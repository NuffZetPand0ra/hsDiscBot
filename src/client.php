<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Discord\Discord;
use Discord\WebSockets\Event;
use Discord\WebSockets\WebSocket;

$discord = new Discord(':email', ':password');
$websocket = new WebSocket($discord);

$websocket->on(Event::MESSAGE_CREATE, function ($message, $discord, $new) {
    echo "New message from {$message->author->username}: {$message->content}".PHP_EOL;
});

$websocket->run();
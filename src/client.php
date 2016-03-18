<?php
namespace Discord\Client;

require_once __DIR__ . '/../vendor/autoload.php';

use Discord\Discord;
use Discord\WebSockets\Event;
use Discord\WebSockets\WebSocket;

$dotenv = new \Dotenv\Dotenv(__DIR__."/../");
$dotenv->required(array("DISCORD_EMAIL","DISCORD_PASSWORD"));
$dotenv->load();
try{
	$discord = new Discord($_ENV['DISCORD_EMAIL'], $_ENV['DISCORD_PASSWORD']);
}catch(\Exception $e){
	echo $e->getMessage();
	echo "<pre>";var_dump($e);echo "</pre>";
}
echo "<pre>";var_dump($discord);echo "</pre>";
// $websocket = new WebSocket($discord);

// $websocket->on(Event::MESSAGE_CREATE, function ($message, $discord, $new) {
    // echo "New message from {$message->author->username}: {$message->content}".PHP_EOL;
// });

// $websocket->run();
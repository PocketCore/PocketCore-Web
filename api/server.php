<?php

/*
    Default port: 27090 - 27100
*/

define("API", 1); // To require scripts, constant 'API' must be defined else you won't have permission for them

require __DIR__ . '/include/vendor/autoload.php'; // Load Ratchet

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use pocketcore\Master;
use pocketcore\Heart;
use pocketcore\utils\Logger;

$logger = new Logger();

$host = gethostname();
$ip = gethostbyname($host);
$port = 27095;

$logger->info("Starting...");

$master = new Master($logger);

// Listen on tick()
Heart::$tick[] = $master;

$server = IoServer::factory($master, $port);

$methodVariable = array($master, 'tick');

is_callable($methodVariable, true, $callback);  //  bool(true)

$server->loop->addPeriodicTimer(0.01, $callback);

$server->run();

?>

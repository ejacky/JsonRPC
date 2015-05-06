<?php
require('vendor/autoload.php');
error_reporting(E_ALL);
use JsonRPC\Server;

$server = new Server;

// Procedures registration

$server->register('addition', function ($a, $b) {
    return $a + $b;
});

$server->register('random', function ($start, $end) {
    return mt_rand($start, $end);
});

// Return the response to the client
echo $server->execute();
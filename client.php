<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require('vendor/autoload.php');

use JsonRPC\Client;

$client = new Client('http://local-github.com/server.php');
$result = $client->execute('addition', [3, 5]);

var_dump($result);
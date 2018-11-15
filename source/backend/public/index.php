<?php

use App\Singleton\DatabaseConnection;
use Libraries\Log;

// Load dependencies
require __DIR__."/../vendor/autoload.php";

Log::getInstance()->info('Application is started ...');


$db1 = DatabaseConnection::getInstance()->connect();
$db2 = DatabaseConnection::getInstance();
var_dump($db1, $db2);


echo '<br/>Done';

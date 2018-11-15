<?php

use Libraries\Log;

// Load dependencies
require __DIR__."/../vendor/autoload.php";

Log::getInstance()->info('Application is started ...');

\App\Application::run($_GET['type'] ?? 'singleton');

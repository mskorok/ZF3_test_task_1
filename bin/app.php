<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 17.1.6
 * Time: 21:27
 */

use Zend\Console\Console;
use ZF\Console\Application;

chdir(dirname(__DIR__));

define('ROOT_PATH', dirname(__DIR__));


include 'vendor/autoload.php';

$application = new Application(
    "ZF-Console Skeleton",
    "1.0",
    include 'config/routes.php',
    Console::getInstance()
);

$exit = $application->run();
exit($exit);
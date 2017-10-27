<?php
$autoloader = require_once __DIR__ . '/../vendor/autoload.php';
if (!$autoloader) {
    die(
      'You need to set up the project dependencies using the following commands:' . PHP_EOL .
      'curl -sS https://getcomposer.org/installer | php' . PHP_EOL .
      'php composer.phar install' . PHP_EOL
    );
}

use Symfony\Component\Console\Application;
use MonkeyCoders\Command\DecoratorCommand;
$app = new Application();
$app->register(new DecoratorCommand());
$app->run();
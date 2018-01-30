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
use MonkeyCoders\Command\DecoratorFiguresCommand;
use MonkeyCoders\Command\DecoratorFastFoodCommand;
use MonkeyCoders\Command\AdapterPaymentGatewayCommand;
use MonkeyCoders\Command\TemplateMethodHamburguerCommand;
use MonkeyCoders\Command\ChainOfResponsibilityHamburguerCommand;
use MonkeyCoders\Command\ObserverSignUpCommand;
$app = new Application();
$app->register(new DecoratorFiguresCommand());
$app->register(new DecoratorFastFoodCommand());
$app->register(new AdapterPaymentGatewayCommand());
$app->register(new TemplateMethodHamburguerCommand());
$app->register(new ChainOfResponsibilityHamburguerCommand());
$app->register(new ObserverSignUpCommand());
$app->run();
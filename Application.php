#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Acme\Console\Command\GreetCommand;
use Acme\Console\Command\GetLostCommand;
use Symfony\Component\Console\Application;



$application = new Application();
$application->add(new GreetCommand());
//$application->add(new GetLostCommand());
$application->run();
#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Commands\HammingCommand;
use Commands\HammingTestCommand;
use Commands\LevenshteinCommand;
use Commands\LevenshteinTestCommand;

$application = new Application();

// ... register commands

$application->add(new HammingTestCommand());
$application->add(new LevenshteinTestCommand());
$application->add(new HammingCommand());
$application->add(new LevenshteinCommand());
$application->run();

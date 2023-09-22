<?php

use Dotenv\Dotenv;

$path = dirname(__DIR__, 1);

$dotenv = Dotenv::createImmutable($path);
$dotenv->load();
<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$username = getenv('username');
$password = getenv('password');
$auth = getenv('auth');
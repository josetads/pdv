<?php
session_start();
require 'app/Config/Config.php';
require 'vendor/autoload.php';

$core = new Config\Core();
$core->start();



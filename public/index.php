<?php
session_start();
$_SESSION['id'] = 1;
ini_set('display_errors', 1);
require "../vendor/autoload.php";
include "../routes/routes.php";

<?php
require './Model/dbkeys.php';
require './Model/ManConnection.php';
$connection = new ManConnection($dbhost, $db, $dbuser, $dbpass);
require './Controller/ManagerController.php';
$controller = new ManagerController();

//Placeholder for user rights
$admin = 1;

$controller->render($_GET, $_POST, $connection, $admin);
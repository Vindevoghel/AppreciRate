<?php
require './Model/dbkeys.php';
require './Model/ManConnection.php';
$connection = new ManConnection($dbhost, $db, $dbuser, $dbpass);
require './Controller/ManagerController.php';
$controller = new ManagerController();
$controller->render($_GET, $_POST, $connection);

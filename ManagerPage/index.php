<?php
require './Controller/ManagerController.php';
require './Model/dbkeys.php';
require './Model/ManConnection.php';
$connection = new ManConnection($dbhost, $db, $dbuser, $dbpass);
$controller = new ManagerController();
$controller->render($_GET, $_POST, $connection);

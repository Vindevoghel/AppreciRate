<?php
declare(strict_types=1);

if (!isset($_SESSION)) {
    session_start();
}

require 'Model/Connection.php';
require 'Model/Company.php';
require 'Model/CompanyLoader.php';
require 'Model/Department.php';
require 'Model/DepartmentLoader.php';
require 'Model/Employee.php';
require 'Model/EmployeeLoader.php';
require 'Model/Review.php';
require 'Model/ReviewLoader.php';
require 'Model/Tourist.php';
require 'Model/TouristLoader.php';
require 'Controller/EmployeeController.php';
require 'Controller/CompanyDepartmentController.php';
require 'Controller/RatingController.php';
require 'Controller/EndPageController.php';
require "Controller/IdentificationController.php";
require "Controller/AboutController.php";
require "Controller/ReviewController.php";

if ($_POST["Name"]){
    $controller = new CompanyDepartmentController();
    $controller->render();
}elseif($_POST["employee"]){
    $controller = new EmployeeController();
    $controller->render($_POST["department"]);
}elseif($_POST["Selectperson"]){
    $controller = new ReviewController();
    $controller->render();
}elseif($_POST["comment"]){
    $controller = new RatingController();
    $controller->render();
}elseif($_POST["Companypostvalue"]){
    $controller = new CompanyDepartmentController();
    $controller->render();
}elseif($_POST["endpagevalue"]){
    $controller = new EndPageController();
    $controller->render();
}elseif($_POST["aboutbuttonvalue"]){
    $controller = new AboutController();
    $controller->render();
}
else{
    $controller = new IdentificationController();
    $controller->render();
}
?>
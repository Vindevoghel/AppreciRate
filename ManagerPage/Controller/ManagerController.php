<?php
class ManagerController
{
    public function render(array $GET, array $POST,  $_connection, $_admin)
    {
        //this is just example code, you can remove the line below

        $connection = $_connection;
        $admin = $_admin;

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if(isset($_POST['getDatabase'])) {
            if(isset($admin)){
            $connection->getExcel();
            } else {
                die('You do not have rights to this database.');
            }
        }


        require 'View/Manager.php';
    }
}

<?php
class ManagerController
{
    public function render(array $GET, array $POST,  $_connection)
    {
        //this is just example code, you can remove the line below

        $connection = $_connection;

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if(isset($_POST['getDatabase'])) {
            $connection->getExcel();
        }


        require 'View/Manager.php';
    }
}

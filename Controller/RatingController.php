<?php
declare(strict_types=1);

class RatingController {

    function render()
    {

        $connection = $_connection;
        if (isset($_POST['className'], $_POST['classLocation'])) {
            $newClass = new AppreciRateClass($_POST['className'], $_POST['classLocation']);
            $connection->sendClasstoDatabase($newClass);
        }
        if(isset($_POST['deleteButton'])) {
            $connection->deleteClass($_POST['deleteButton']);
        }        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        //load the view
        require "../View/confirm.php";
    }

}





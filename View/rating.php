<?php

$rating = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['radio'])) {
        $rating = $_POST['radio'];  //
        //echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
    }
}



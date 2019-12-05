<?php
declare(strict_types=1);

class IdentificationController
{
    function render()
    {
        if (isset($_SESSION["Tourist Name"]) && isset($_SESSION["Company value"]) && isset($_SESSION["Department value"]) && isset($_SESSION["Employee Value"]) && isset($_SESSION["Review text"]) && isset($_POST["image_radio"])) {
            $tourist = new Tourist(1, $_SESSION["Tourist Name"]);
            $touristLoader = new TouristLoader();
            $touristId = $touristLoader->createTourist($tourist);

            $review = new Review(1, $_SESSION["Review text"], $_POST["image_radio"], 1, $touristId, $_SESSION["Company value"], $_SESSION["Department value"], $_SESSION["Employee Value"]);
            $reviewLoader = new ReviewLoader();
            $reviewLoader->createReview($review);
        }
        require "View/identification.php";
    }

}
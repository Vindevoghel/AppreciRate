<?php
declare(strict_types=1);

class IdentificationController
{
    function render()
    {
        if (isset($_SESSION["Tourist Name"]) && isset($_SESSION["Company value"]) && isset($_SESSION["Department value"]) && isset($_SESSION["Employee Value"]) /*&& isset($_SESSION["Tourst Name"])*/) {
            $tourist = new Tourist(1, $_SESSION["Tourist Name"]);
            $touristLoader = new TouristLoader();
            $touristLoader->createTourist($tourist);

            $date =


            $review = new Review(1, "test", 1, 1, 1, $_SESSION["Company value"], $_SESSION["Department value"], $_SESSION["Employee Value"]);
            $reviewLoader = new ReviewLoader();
            $reviewLoader->createReview($review);
        }
        require "View/identification.php";
    }

}

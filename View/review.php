<?php

$_SESSION["Employee Value"] = $_POST["Selectperson"];
$_SESSION["employee"] = $_POST["Selectperson"];
$_SESSION["Progress"] = 75;

?>

<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <div class="radioBox text-center">
                <input type="radio" name="image_radio" value="1" id="radioOne">
                <label class="image_radio r_one" for="radioOne"></label>
                <input type="radio" name="image_radio" value="2" id="radioTwo">
                <label class="image_radio r_two" for="radioTwo"></label>
                <input type="radio" name="image_radio" value="3" id="radioThree">
                <label class="image_radio r_three" for="radioThree"></label>
                <input type="radio" name="image_radio" value="4" id="radioFour">
                <label class="image_radio r_four" for="radioFour"></label>
                <input type="radio" name="image_radio" value="5" id="radioFive">
                <label class="image_radio r_five" for="radioFive"></label>
            </div>
            <h3>What's your observation <br/> for this person?</h3>

            <div class="form-group pt-3">
                <textarea class="form-control" rows="5" id="comment" name="comment" maxlength="500"></textarea>
            </div>

            <button type="submit">Continue</button>
            <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
        </form>
    </div>
</body>

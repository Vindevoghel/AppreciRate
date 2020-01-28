<?php

$_SESSION["Employee Value"] = $_POST["Selectperson"];
$_SESSION["employee"] = $_POST["Selectperson"];
$selectedName= $_POST["Selectperson"];

$employeeLoader = new EmployeeLoader();
$employee = $employeeLoader->getEmployeeName($selectedName);


$_SESSION["Progress"] = 75;

?>

<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <h3>Please rate your experience with [<?php echo $employee ?>]</h3>
            <section>
                <div class="radioBox text-center">
                    <input type="radio" name="image_radio" value="1" id="radioOne" required>
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


                <div class="form-group pt-3">
                    <textarea class="form-control" rows="5" id="comment" name="comment" maxlength="500" required placeholder="Please share your experience with [<?php echo $employee ?>] max 120 characters"></textarea>
                </div>

                <button type="submit">Continue</button>

                <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
            </section>
        </form>
    </div>
</body>

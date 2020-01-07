<?php
declare(strict_types=1);

$_SESSION["Review text"] = $_POST["comment"];
$_SESSION["Progress"] = 80;

if (isset($_POST['submit'])) {
    if (isset($_POST['image_radio'])) {

        $rating = $_POST['image_radio']; // import value from radio selector
    }
}

// $_SESSION['Review rating'] = $rating;
//$employee = $_SESSION['employee'];
$tourist = $_SESSION['Tourist Name'];
// ik heb in comment geplaats want het overwrite de naam van bedrijf en department
/*$company = $_SESSION['Company value'];
$department = $_SESSION['Department value'];*/
$review = $_SESSION['Review text'];

if (isset($_POST['submit'])) {

    $tourist->updateTouristField();
    $company->updateCompanyField();
    $department->updateDepartmentField();
    $review->updateDepartmentField();
    $rating->updateReviewField();
}

?>

<form class="form-signin" method="post">
    <?php include "View/header.php" ?>
    <section>
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

        <h3 class="compdept"><?php echo $company . ' - ' . $department ?></h3>
        <h3 class="employ"><?php echo $employee ?>&nbsp;</h3>

        <fieldset class="echoreview">
            <p><?php echo $review ?></p>
        </fieldset>

        <button type="submit" value="Confirm" name="Confirm">Confirm</button>

        <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
    </section>
</form>

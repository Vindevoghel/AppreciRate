<?php
declare(strict_types=1);



$_SESSION["Smiley Value"] = $_POST["image_radio"];
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
$smileyvalue = $_SESSION['Smiley Value'];

$smileyimage = "";


if ($smileyvalue === '1') {
    $smileyimage = 'r_one';

}elseif ($smileyvalue === '2'){
    $smileyimage = 'r_two';
}
elseif ($smileyvalue === '3'){
    $smileyimage = 'r_three';
}
elseif ($smileyvalue === '4'){
    $smileyimage = 'r_four';
}
elseif ($smileyvalue === '5'){
    $smileyimage = 'r_five';
}


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
            <input  type="radio" name="image_radio" value="<?php echo $smileyvalue?>" id="radioOne" required checked>
            <label class="image_radio <?php echo $smileyimage?>" for="radioOne"></label>
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

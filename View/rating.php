<?php
declare(strict_types=1);

require 'header.php';
require 'companyDepartment.php';

$_SESSION["Progress"] = 80;
?>



<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['image_radio'])) {

        $rating = $_POST['image_radio']; // import value from radio selector

    }
}

// $_SESSION['Review rating'] = $rating;
$tourist = $_SESSION['Tourist Name'];
$company = $_SESSION['Company'];
$department = $_SESSION['Department'];
$review = $_SESSION['Review'];
?>

<section>
    <h3><?php echo $company . ', ' . $department ?></h3>
    <h3><?php echo $tourist ?><br></h3>
    <fieldset>
        <legend>Review:</legend>
        <p><?php echo $review ?></p>
    </fieldset>
    <form method="post">
        <input type="submit" value="Confirm" name="Confirm">
    </form>
</section>

<?php
if (isset($_POST['submit'])) {

    $tourist->updateTouristField();
    $company->updateCompanyField();
    $department->updateDepartmentField();
    $review->updateDepartmentField();
    $rating->updateReviewField();

}
?>
<?php
declare(strict_types=1);

?>



<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['image_radio'])) {

        $rating = $_POST['image_radio']; // import value from radio selector

    }
}

$_SESSION['Review rating'] = $rating;

?>

<section>
    <form method="post">
        <input type="submit" value="Confirm" name="Confirm">
    </form>
</section>

<?php
if (isset($_POST['submit'])) {

    $tourist = $_SESSION["Tourist Name"];
    $tourist->updateTouristField();

    // TODO... now also for the company, department, employees and review

    $rating->updateReviewField();

}
?>
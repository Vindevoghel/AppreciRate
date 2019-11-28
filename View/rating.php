<?php
declare(strict_types=1);






?>

<section>
    <form method="post" action="">
        <input type="submit" value="Confirm" name="Confirm">
    </form>
</section>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['image_radio'])) {

        $rating = $_POST['image_radio']; // import value from radio selector

    }

}

$_SESSION['rating'] = $rating;
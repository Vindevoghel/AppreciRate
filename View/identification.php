<?php
$_SESSION["Progress"] = 10;
?>

<body class="text-center">
    <form class="form-signin" method="post">
        <?php include "View/header.php" ?>
        <h1 class="h3 mb-3 font-weight-normal">Feedback</h1>
        <input type="text" id="inputName" class="form-control text-center" placeholder="Please enter your name" name="Name" required="" autofocus="">
        <button type="submit">Continue</button>
        <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
    </form>
</body>
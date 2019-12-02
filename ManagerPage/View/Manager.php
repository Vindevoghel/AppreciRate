<!doctype html>
<html lang="en">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Assets/Css/Reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Assets/Css/ViewManager.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <title>Manager Page</title>
</head>

<div class="container">
    <h1 class="jumbotron-heading">Reviews</h1>
    <div id="exportdatabase">
        <form method="post">
            <button type="submit" name="getDatabase">Export Database</button>
        </form>
    </div>
    <table>
        <thead>
        <tr>
            <th>Review ID</th>
            <th>Tourist Name</th>
            <th>Employee Name</th>
            <th>Review Text</th>
            <th>Rating</th>
            <th>Company</th>
            <th>Dept Name</th>
            <th>Timestamp</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($connection->getReviews() as $row): ?>
            <tr>
                <td><?php echo $row['id_Review'] ?></td>
                <td><?php echo $row['Tourist_Name'] ?></td>
                <td><?php echo $row['Employees-Name'] ?></td>
                <td><?php echo $row['Review_text'] ?></td>
                <td><?php echo $row['Review_Rating'] . '/5'?></td>
                <td><?php echo $row['Company_Name'] ?></td>
                <td><?php echo $row['Department_Name'] ?></td>
                <td><?php echo $row['Timestamp'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

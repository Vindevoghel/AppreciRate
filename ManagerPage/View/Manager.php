<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Manager Page</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<div class="container">
    <h1 class="jumbotron-heading">Reviews</h1>
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

    <button>Export Database</button>
</div>

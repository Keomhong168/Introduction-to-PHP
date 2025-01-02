<?php
    $id = $_POST["txt-id"];
    $name = $_POST["txt-name"];
    $gender = $_POST["txt-gender"];
    $score1 = $_POST["txt-score1"];
    $score2 = $_POST["txt-score2"];
    $score3 = $_POST["txt-score3"];
    $total = $score1 + $score2 + $score3;
    $average = $total / 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Vaviable</title>
</head>
<body class="bg-light">
    <div class="col-10 mx-auto mt-4 shadow-lg ">
        <table class="table table-hover table-white border-1 text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Score1</th>
                <th>Score2</th>
                <th>Score3</th>
                <th>Total</th>
                <th>Avergae</th>
            </tr>
            <tr>
                <td><?php  echo $id; ?></td>
                <td><?php  echo $name; ?></td>
                <td><?php  echo $gender; ?></td>
                <td><?php  echo $score1; ?></td>
                <td><?php  echo $score2; ?></td>
                <td><?php  echo $score3; ?></td>
                <td><?php  echo $total; ?></td>
                <td><?php  echo $average; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
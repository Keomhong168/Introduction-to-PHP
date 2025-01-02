<?php
    $id = 101;
    $name = "Suy Koemhong";
    $gender = 'Male';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Vaviable</title>
</head>
<body>
    <div class="col-5 mx-auto mt-3">
        <table class="table table-hover table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td><?php  echo $id; ?></td>
                <td><?php  echo $name; ?></td>
                <td><?php  echo $gender; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
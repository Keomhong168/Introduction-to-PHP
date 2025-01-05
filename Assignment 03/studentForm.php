<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>StudentForm</title>
</head>
<body class="bg-light">
    <div class="col-5 mx-auto bg-white p-3 shadow-lg mt-4">
        <form action="student.php" method="POST">
            <h3 class="text-center">Student's From</h3>
            <label for="id-field">ID:</label>
            <input type="text" name="txt-id" id="id-field"  class="form-control my-2" placeholder="ID">
            <label for="name-field">Name:</label>
            <input type="text" name="txt-name" id="name-field"  class="form-control my-2" placeholder="Name">
            <label for="gender-field">Gender:</label>
            <select name="txt-gender" id="gender-field" class="form-control my-2">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <div class="row">
            <div class="col">
            <label for="score1-field">Score1:</label>
            <input type="number" name="txt-score1" id="score1-field"  class="form-control my-2" placeholder="score1">
            </div>
            <div class="col">
            <label for="score2-field">Score2:</label>
            <input type="number" name="txt-score2" id="score2-field"  class="form-control my-2" placeholder="score2">
            </div>
            <div class="col">
                <label for="score3-field">Score3:</label>
                <input type="number" name="txt-score3" id="score3-field"  class="form-control my-2" placeholder="score3">
            </div>
            </div>
            
            <button name="btn-submit" class="btn btn-primary mt-2 justify-content-end">Submit</button>
        </form>
    </div>
</body>
</html>
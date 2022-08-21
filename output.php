<?php

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];

$gender = $_POST['gender'];
$studyLocation = $_POST['city'];
$aboutSelf = $_POST['about'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="output.css" rel="stylesheet" />
    <title>Successful Registration</title>
</head>

<body>
    <div class="container d-flex justify-content-center vh-100 align-items-center">
        <div class="card text-bg-success text-center" style="width: 25rem;">
            <div class="card-body">
                <h2 class="card-title"><?php echo $firstName . " " . $lastName; ?></h2>
                <hr>
                <h5 class="card-title">Gender: </h5>
                <div class="container mt-4">
                    <?php echo $gender; ?>
                </div>
                <h5 class="card-title mt-4">Transport to BIT:</h5>
                <div class="container mt-4">
                    <?php
                        foreach ($_POST['check'] as $value) {
                            echo "$value <br/>";
                        }
                    ?>
                </div>
                <h5 class="card-title mt-4">Study location: </h5>
                <div class="container mt-4">
                    <?php echo $studyLocation; ?>
                </div>
                <h5 class="card-title mt-4">Tell us about yourself:</h5>
                <div class="container mt-4">
                    <?php echo $aboutSelf; ?>
                </div>
                <div class="container mt-4">
                    <a href="input.php" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
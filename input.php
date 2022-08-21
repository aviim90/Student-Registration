

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="input.css" rel="stylesheet" />
    <title>Registration Form</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card mt-3 mb-3 align-items-center text-bg-light bg-opacity-50" style="width: 30rem;">
            <div class="card-body col-md-8 align-items-center">
                <h4 class="text-center">Student Registration Form</h4>
                <form action="output.php" method="post">
                    <div class="mb-3">
                        <label for="vardas" class="form-label">
                            <h6>First Name:</h6>
                        </label>
                        <input type="text" name="first-name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="pavarde" class="form-label">
                            <h6>Last Name:</h6>
                        </label>
                        <input type="text" name="last-name" class="form-control" required>
                    </div>
                    <h6>Gender:</h6>
                    <div class="container d-flex gap-4 mt-3">
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" name="gender" value="Male" id="male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" name="gender" value="Other" id="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    <h6 class="mt-3">Transport to BIT:</h6>
                    <div class="container d-flex gap-4 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="Bike" id="bike">
                            <label class="form-check-label" for="bike">Bike</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="Car" id="car">
                            <label class="form-check-label" for="car">Car</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="Bus" id="bus">
                            <label class="form-check-label" for="bus">Bus</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="Walk" id="walk">
                            <label class="form-check-label" for="bus">Walk</label>
                        </div>
                    </div> 
                    <h6 class="mt-3">Study location:</h6>
                    <select class="form-select" name="city" required>
                        <option selected>select city</option>
                        <option value="Vilnius">Vilnius</option>
                        <option value="Kaunas">Kaunas</option>
                        <option value="Klaipeda">Klaipeda</option>
                    </select>
                    <h6 class="mt-3">Tell us about yourself:</h6>
                    <div class="mb-3">
                        <textarea class="form-control" name="about" id="about" rows="3" required></textarea>
                    </div>
                    <input class="form-check-input" type="checkbox" name="agree" value="" id="agree" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="agree">
                        Agree to terms and conditions
                    </label>
                    <div class="container d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>Registration </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login Here</h2>
                <form action="Validation.php" method="POST">
                    <div class="formgroup">
                        <label for="">Username</label>
                        <input type="text" name="user" class="form-control" required> <br>
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control" required> <br>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>SignIn Here</h2>
                <form action="registration.php" method="POST">
                    <div class="formgroup">
                        <label for="">Username</label>
                        <input type="text" name="user" class="form-control" required> <br>
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control" required><br>
                        <button type="submit" class="btn btn-primary">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
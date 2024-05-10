
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5 col-4">
            <div class="card-body align-item-center">
                <h5 class="card-title">Register please</h5>
                <p class="card-title mb-5"> Sign in to continue</p>
                <form action="../components/register_user.php" method="POST">
    
                    <label>Create a user</label>
                    <div class="mt-1 mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Please create a new username" />

                    </div>
                    <div class="mt-1">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Please type your password" />

                    </div>
                    <div class="mt-3">
                        <label>What is your name?</label>
                        <input type="text" class="form-control" name="name" placeholder="Please type your profile name: " />

                    </div>

                    <div class=" d-flex justify-content-center mt-4">
                        <input type="submit" class="btn btn-danger w-50" value="Registrarse">
                    </div>
                </form>

            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="./home.php" class="register-link m-2"> Home </a>
                <a href="./login.php" class="register-link m-2"> Login instead </a>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
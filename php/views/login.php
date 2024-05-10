<?php

include_once("../components/user.php");
include_once("../components/user_session.php");

$user_session = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {

    $user->setUser($user_session->getCurrentUser());
    Header("Location: ./home_logged.php");
} else if (isset($_POST['username']) && isset($_POST['password'])) {
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExists($userForm, $passForm)) {
        $user_session->setCurrentUser($userForm);
        $user->setUser($userForm);
        Header("Location: ./home_logged.php");
    } else {
        $errorLogin = 'Tu nombre de usuario o password es incorrecto!';
        include_once('./login.php');
    }
} else {
    include_once('./login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container d-flex justify-content-center">
            <div class="card mt-5" style="width: 28rem;">
                <div class="card-body align-item-center">
                    <h5 class="card-title">Log in please</h5>
                    <p class="card-title mb-5"> Log in to your account to continue</p>

                    <form action="" method="POST">

                        <label htmlFor="email">Username</label>
                        <div class="mt-1 mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Please type your username" />

                        </div>

                        <div class="mt-1 mb-1">
                            <label htmlFor="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Please type your password" />

                            <div class="d-flex flex-row-reverse">
                                <a href="" class="m-1 password-recovery-link">Forgot password?</a>
                            </div>
                        </div>

                        <div class="mt-1">
                            <?php
                            if (isset($errorLogin)) {
                                echo $errorLogin;
                            }
                            ?>
                        </div>


                        <div class=" d-flex justify-content-center mt-5">
                            <input type="submit" class="btn btn-danger w-50" value="Login"></input>
                        </div>

                    </form>


                </div>

                <div class="d-flex justify-content-between mt-4">

                    <a href="home.php" class="register-link m-2"> Home </a>
                    <a href="register.php" class="register-link m-2"> Register </a>

                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
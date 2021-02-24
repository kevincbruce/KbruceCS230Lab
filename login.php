<?php
require "includes/header.php"
?>

<main>
    <link rel="stylesheet" href="../css/login.css">
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/login-helper.php" method="post">
                        <h1 class="h3 mb-3 fw-normal">Please Sign In!</h1>
                        <p class="hint-text">Enter your Username and Password</p>
                        <input type="text" class="form-control" name="uname - email" placeholder="Username/Email" required autofocus>
                        <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password" required>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember Me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-outline-danger btn-primary" name="login-submit" type="submit">Sign In</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
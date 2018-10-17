<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("./includes/link-paths-include.php"); ?>
    <link rel="stylesheet" type="text/css" href="general.css">
    <link rel="stylesheet" type="text/css" href="./includes/includes-stylesheet.css">
</head>
<body>
    <!-- LOGIN OR REGISTER FORM -->
    <div class="login-signin">
        <div class="container">
            <div class="row">
                <header class="col-md-12">
                    <div class="form-header">
                        <img src="./homepage/img/logo.png">
                        <h1>Braw</h1>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="login-signin-box">
                    <form method="post" action="./homepage/homepage.php">
                        <section class="form-box">
                            <div class="container">
                                <div class="row">
                                    <div class="form-inputs">
                                        <input type="email" placeholder="Email or Username" maxlength="120" autocomplete="off" role="form" required>
                                        <input type="password" placeholder="Password" autocomplete="off" role="form" required>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="remember-password">
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="remember" role="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                            <label for="remember">Remeber password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="forget-username-password">
                                            <label for="forgot">
                                                <a href="#" id="forgot">
                                                    Forgot Username or Password?
                                                </a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="register-section">
                        <div class="age-warning">
                            <hr>
                            <span>Not Registred Yet?</span>
                            <p>If are not over 21 years of age or older you are not allowed to register.</p>
                        </div>
                        <div class="register">
                            <button type="button">Register</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

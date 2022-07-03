<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet">
</head>


<body>

    <div class="wrapper">


        <div class="wrapper-img">
            <img src="./img/background_form.jpg" alt="picture background" class="picture" style=" width: 100%;
           height: 100%; max-height: 900px;">
        </div>


        <section class="wraper-form">
            <div class="conteiner-form">

                <div class="conteiner-form">
                    <h1 class="title-form">RUNO</h1>
                    <h4 class="title-login">Login to your account</h4>
                </div>

                <form class="conteiner-form" method="post" action="#" name="login_account">

                    <div class="form-group">
                        <label class="view-label" for="mail">Email</label>
                        <input class="view-input" type="email" required="required" name="user_email" id="mail">
                    </div>

                    <div class="form-group">
                        <label class="view-label" for="password">Password</label>
                        <input class="view-input" type="password" required="required" minlength="8" maxlength="12" name="user_password" id="password">
                    </div>

                    <div class="help-password">

                        <div class="conteiner-checkbox">
                            <input class="checkbox-form-input" type="checkbox" id="remember_me" name="remember_me">
                            <label for="remember_me" class="checkbox-form-label">Remember me</label>
                        </div>

                        <a class="forgot-password" href="#">Forgot password?</a>


                    </div>


                    <button type="submit" class="btn-all btn-login">Login</button>

                    <button class="btn-all btn-sign">Sign in with Google</button>

                    <p class="form-content">Don’t have an account?
                        <a class="form-register" href="#">Register</a>
                    </p>

                </form>
            </div>
        </section>

    </div>

</body>

</html>
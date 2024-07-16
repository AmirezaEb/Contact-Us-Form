<?php

@include '../config/config.php';
@include '../controller/helper.php';

if (isset($_POST['login'])) {
    if ($adminEmail === $_POST['email'] && $adminPassword === $_POST['password']) {
        redirect('contacts.php');
    }
    redirect('./?Error=NotFoundAdmin');
}
?>

<!-- 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Panel Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.cdnfonts.com/css/iranian-sans" rel="stylesheet">

    <link href="../assets/css/loginAdmin.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    پنل مدیریت
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="form-control-label email-label">ایمیل</label>
                                <input type="email" name="email" class="form-control email">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label password-label">رمز عبور</label>
                                <input type="password" name="password" class="form-control password" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <!--    -->
                                <p class="login-btm login-text">
                                    <?php if (isset($_GET['Error']) && $_GET['Error'] == 'NotFoundAdmin') {
                                        echo "مدیری با این مشخصات پیدا نشد!";
                                    } ?>
                                </p>
                                <div class="col-lg-12 text-center login-btm login-button">
                                    <button id="login-btn" type="submit" name="login" class="btn btn-outline-primary">ورود</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

        <script src="../assets/js/sweetalert2@11.js"></script>
        <script src="../assets/js/admin.js"></script>
</body>

</html>
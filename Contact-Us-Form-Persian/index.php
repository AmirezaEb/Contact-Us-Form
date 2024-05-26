<?php

@include 'config/config.php';
@include 'controller/helper.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/iranian-sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<!-- 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir  
-->

<body>
    <div class="container">
        <span class="big-circle"></span>
        <div class="form">
            <div class="contact-info">
                <h3 class="title">
                    بیا با هم تماس بگیریم
                </h3>
                <p class="text">
                    کاربر گرامی افتخار ما این است که نظرات، شکایات، انتقادات و پیشنهادات خود را در مورد وب سایت از طریق این فرم با ما در میان بگذارید.
                </p>

                <div class="info">
                    <div class="information">
                        <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp
                        <p><?= Address ?></p>
                    </div>
                    <div class="information">
                        <i class="fas fa-envelope"></i> &nbsp &nbsp
                        <p><?= Email ?></p>
                    </div>
                    <div class="information">
                        <i class="fas fa-phone"></i>&nbsp &nbsp
                        <p class="phone-num"><?= PhoneNumber ?></p>
                    </div>
                </div>

                <div class="social-media">
                    <p>راه های ارتباط با ما :</p>
                    <div class="social-icons">
                        <a href="<?= Instagram ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?= Telegram ?>">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="<?= Github ?>">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="<?= Linkedin ?>">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="controller/send.php" method="post" autocomplete="off">
                    <h3 class="title">ارتباط با ما</h3>
                    <div id="name-div" class="input-container" data-validator="please provide a valid name !">
                        <input id="name-input" type="text" name="name" class="input">
                        <label for=""> نام </label>
                        <span>نام </span>
                    </div>
                    <div id="email-div" class="input-container" data-validator="please enter valid email !">
                        <input id="email-input" type="email" name="email" class="input" />
                        <label for="">ایمیل</label>
                        <span>ایمیل</span>
                    </div>
                    <div id="phone-div" class="input-container" data-validator="phone number must be numberic !">
                        <input id="phone-input" type="number" name="phone" class="input" />
                        <label for="">شماره تماس</label>
                        <span>شماره تماس</span>
                    </div>
                    <div id="text-div" class="input-container textarea" data-validator="please enter your message !">
                        <textarea id="text-input" name="message" class="input"></textarea>
                        <label for="">متن پیام</label>
                        <span>متن پیام</span>
                    </div>
                    <button id="submit-btn" type="submit" name="Send" class="btn">ارسال</button>
                </form>
            </div>
        </div>
        <span class="right-circle"></span>
    </div>
</body>
<script src="assets/js/app.js"></script>

</html>
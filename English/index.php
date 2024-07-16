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
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Dear user, it is our honor to share your comments, complaints, criticisms and suggestions about the website with us through this form.
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
                        <p><?= PhoneNumber ?></p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
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
                    <h3 class="title">Contact us</h3>
                    <div id="name-div" class="input-container" data-validator="please provide a valid name !">
                        <input id="name-input" type="text" name="name" class="input">
                        <label for="">Name</label>
                        <span>Name</span>
                    </div>
                    <div id="email-div" class="input-container" data-validator="please enter valid email !">
                        <input id="email-input" type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div id="phone-div" class="input-container" data-validator="phone number must be numberic !">
                        <input id="phone-input" type="number" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div id="text-div" class="input-container textarea" data-validator="please enter your message !">
                        <textarea id="text-input" name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <button id="submit-btn" type="submit" name="Send" class="btn">Send</button>
                </form>
            </div>
        </div>
        <span class="right-circle"></span>
    </div>
</body>
<script src="assets/js/app.js"></script>

</html>
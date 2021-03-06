<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="Public/css/navbar.css" />
        <link rel="stylesheet" href="Public/css/contact.css" />
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="Public/js/navbar.js"></script>
        <title>Wallet Stats | Contact</title>
    </head>
    <body>
        <?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
        <div class="formContainer">
            <div class="contact-header">
                <div class="contact-header-text">
                    <span>Contact us</span>
                </div>
                <div class="contact-header-img">
                    <img id="contact-header-logo" src="Public/img/logo.svg"/>
                </div>
            </div>
            <form class="contact-form" action="?page=contact" method="POST">
            <div class="messages" id="messages">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                ?>
            </div>
                <div class="inputWrapper">
                    <input type="text" name="e-mail" required autocomplete="off" />
                    <label for="e-mail" class="label-name">
                        <span class="content-name">e-mail</span>
                    </label>
                </div>
                <div class="inputWrapper">
                    <input type="text" name="subject" required autocomplete="off"/>
                    <label for="subject" class="label-name">
                        <span class="content-name">Subject</span>
                    </label>
                </div>
                <div class="msg-body">
                    <textarea class="msg-body--area" cols="10" rows="4" name="msg-body--area" placeholder="Type message text here..." required></textarea>
                    <span class="msg-body--label">Message Body</span>
                    <span class="span-for-border"></span>
                </div>
                <button type="submit" name="submit" class="btn--huge">SUBMIT</button>
            </form>
        </div>
    </body>
</html>
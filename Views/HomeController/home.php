<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="Public/css/style.css"/>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="Public/js/navbar.js"></script>
        <title>Wallet Stats | Home</title>
    </head>
    <body>
        <div class="container">
            <div class="logo-section">
                <img class="logo-img" src="Public/img/logo.svg">
                <img class="logo-text" src="Public/img/walletstats.svg">
            </div>
            <div class="start-section">
                <span id="span-join">Join us and start controlling your expenses today!</span>
                <form action="?page=register" method="post">
                    <button type="submit" class="btn-light">SIGN UP</button>
                </form>
                <span class="text-small">Have you got an account yet?</span>
                <form action="?page=login" method="post">
                    <button type="submit">SIGN IN</button>
                </form>
                <div class="text-wrapper">
                    <span>Connect with us </span>
                    <span id="span-light">@walletstats</span>
                </div>
                <div class="socials-wrapper">
                    <img class="social" src="Public/img/facebook.svg">
                    <img class="social" src="Public/img/twitter.svg">
                    <img class="social" src="Public/img/instagram.svg">
                    <img id="social-yt" src="Public/img/youtube.svg">
                </div>
            </div>
        </div>
    </body>
</html>
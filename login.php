
<!DOCTYPE >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bake With ME</title>
    <link rel="icon" href="assets/img/logo.png.png" type="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        <?php include 'assets/css/login.css';?>
    </style>

    
</head>
<body>
<?php include 'header.php';?>

    <div class="fix-m-header">
        <img src="./assets/cell-phone.png" alt="Android">
        <span>Get Bake With ME for Android and browse faster</span>
    </div>

    <div class="containers">
        <!-- main container -->
        <div class="content">
            <!-- logo container -->
           <div class="left-content">
               <div class="f-logo">
                   <img src="assets/img/bake-logo.png" alt="Bake With ME" />
               </div>
               <h2 class="f-quote">Join us with our home-cooked meals that are just a click away!</h2>
           </div>
           <!-- login form -->
           <div class="right-content">
               <div class="card">
                   <form action="" method="post">
                       <div class="inputcontainer">
                           <input id="email" type="text" placeholder="Email address or phone number">
                           <div class="error"></div>
                       </div>
                       <div class="inputcontainer">
                            <input id="password" type="password" placeholder="Password">
                            <div class="error"></div>
                        </div>
                        <div class="login-btn-container">
                            <button type="submit" class="login-btn">Login</button>
                        </div>
                   </form>

                   <div class="forgotten-password">
                       <a href="#">Forgotten Password?</a>
                   </div>

                   <div class="divider"></div>

                   <div class="" style="text-align: center;">
                       <a class="crt-new-ac" href="signup.php">Create New Account</a>
                   </div>
               </div>
               <div class="crt-page">
                   <a href="#">Create a Page</a>
                   <span>for a celebrity, band or business.</span>
               </div>
           </div>  
        </div>
    </div>
        

    <footer class="f-lg-footer">
        <ul>
            <li><a href="">English (UK)</a></li>
            <li><a href="">বাংলা</a></li>
            <li><a href="">हिन्दी</a></li>
            <li><a href="">اردو</a></li>
            <li><a href="">नेपाली</a></li>
            <li><a href="">ଓଡ଼ିଆ</a></li>
            <li><a href="">Español</a></li>
            <li><a href="">Português (Brasil)</a></li>
            <li><a href="">Français (France)</a></li>
            <li><a href="">Deutsch</a></li>
            <li><a href="">Italiano</a></li>
        </ul>
    </footer>

    <div class="m-footer">
        <div class="m-f-lang">
            <ul>
                <li><a href="">English (UK)</a></li>
                <li><a href="">বাংলা</a></li>
                <li><a href="">हिन्दी</a></li>
            </ul>
            <ul>
                <li><a href="">اردو</a></li>
                <li><a href="">नेपाली</a></li>
                <li><a href="">ଓଡ଼ିଆ</a></li>
            </ul>
        </div>
        

        <div style="clear: both;"></div>

        <div class="links" style="text-align: center;">
            <a href="#">About</a><a href="#">Help</a><a href="#">More</a>
        </div>

        <div style="font-weight: 600;text-align: center;margin: 10px 0;color: #777;">Bake With ME Inc</div>
    </div>
    <script src="https://kit.fontawesome.com/5245bddf71.js" crossorigin="anonymous"></script>
    <script defer src="assets/js/login.js"></script>
    <script defer src="assets/js/signup.js"></script>
    
</body>
</>
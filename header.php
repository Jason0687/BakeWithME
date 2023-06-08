<php>
    <head>
        
        <style>
            <?php include 'assets/css/style.css';?>
            <?php include 'assets/css/nextpage.css';?>
            <?php include 'assets/css/navbar.css';?>
            <?php include 'assets/css/mediaQueries.css';?>
            <?php include 'assets/css/recipes.css';?>
            <?php include 'assets/css/about.css';?>
            <?php include 'assets/css/footer.css';?>
            <?php include 'assets/css/login.css';?>
            <?php include 'assets/css/contacts.css';?>
        </style>

    <link rel="icon" href="assets/img/logo.png.png" type="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=PT+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
    <header>
    <div class="banner">
        <nav class="navbar">
            <img src="assets/img/bake-logo.png" class="logo">
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li>
                    <a class="recipes" href="Recipes.php">Recipes</a>
                    
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="ChocolateCookies.php">Cookies</a></li>
                            <li><a href="Blueberry Cheesecake.php">Cheesecake</a></li>
                            <li><a href="Cinnabon.php">Cinnabon</a></li>
                            <li><a href="Brownies.php">Brownies</a></li>
                            <li><a href="Doughnuts.php">Doughnuts</a></li>
                            <li><a href="lolasempanada.php">Empanada</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li class="login-col"><a  href="login.php">Log In</a></li>
            </ul>
            <div class="toggle_btn">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </nav>
    </div>
</header>
    </body>

</php>
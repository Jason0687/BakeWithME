<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Crete+Round&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
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
</head>
<body>
    <?php include 'header.php'; ?>
    
        <div class="rcontainer">
            <div class="rtitle">
                <h1>Our Menu Recipes</h1>
            </div>
            <div class="sub-container">
                <div class="submeunu">
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Blueberry_Cheesecake.jfif" alt="Blueberry Cheesecake">
                        <h2>Blueberry Cheesecake</h2>
                        <button class="btn"><a href="Blueberry Cheesecake.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Brownies.webp" alt="Brownies">
                        <h2>Brownies</h2>
                        <button class="btn"><a href="Brownies.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Chocolate_cookies.webp" alt="ChocolateCookies">
                        <h2>Chocolate Cookies</h2>
                        <button class="btn"><a href="ChocolateCookies.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Cinnabon.webp" alt="Cinnabon">
                        <h2>Cinnabon</h2>
                        <button class="btn"><a href="Cinnabon.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/Doughnuts.jpg" alt="Doughnuts">
                        <h2>Doughnuts</h2>
                        <button class="btn"><a href="Doughnuts.php">Recipe</a></button>
                    </div>
                    <div class="submeunu-item">
                        <img src="assets/RecipesList/lolasempanada-2.jpg" alt="lolasempanada">
                        <h2>Curry Empanadas</h2>
                        <button class="btn"><a href="">Recipe</a></button>
                    </div>
                </div>
            </div>
        </div>  
        <?php include 'footer.php'; ?>

    <script src="https://kit.fontawesome.com/5245bddf71.js" crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
</body>
</php>
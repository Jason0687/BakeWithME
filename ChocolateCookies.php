<!DOCTYPE php>
<php lang="en">
<head>
    <title>Bake With Me</title>
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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <?php include 'header.php';?>

    <div class="container">
	
        <div class="left">
            <div class="img-holder" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-doration="500">
                <img src="assets/RecipesList/Chocolate_cookies.webp" alt="Chocolate cookies">
            </div>

        </div>
        
        <div class="right" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <table>
            <tbody>
                <div class="header" data-aos="fade-left">
                    <h1>Chocolate Cookies Recipe</h1>
                </div>
                <tr> 
                    <th> Name </th>
                    <th> Quantity </th>
                </tr>

                <tr>
                    <td>Gold Medal™ all-purpose flour</td>
                    <td>2 1/4 cups</td>
                </tr>
                <tr>
                    <td>Baking soda</td>
                    <td>1 tsp</td>
                </tr>
                <tr>
                    <td>Salt</td>
                    <td>1/2 tsp</td>
                </tr>
                <tr>
                    <td>Butter, softened</td>
                    <td>1 cup</td>
                </tr>
                <tr>
                    <td>Granulated sugar</td>
                    <td>3/4 cup</td>
                </tr><tr>
                    <td>Brown sugar</td>
                    <td>3/4 cup packed</td>
                </tr>
                <tr>
                    <td>Egg</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Vanilla</td>
                    <td>1 tsp</td>
                </tr>
                <tr>
                    <td>Semisweet chocolate chips</td>
                    <td>2 cups</td>
                </tr>
                <tr>
                    <td>Coarsely chopped nuts, if desired</td>
                    <td>1 cup</td>
                </tr>           
                
            </tbody>
    
        </table>         
        </div> 
        <div class="buttom">
            <h2 class="steps-col" data-aos="fade-left">Steps</h2>
                <ol data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <li>Heat oven to 375°F. In small bowl, mix flour, baking soda and salt; set aside.</li>
                    <li>In large bowl, beat softened butter and sugars with electric mixer on medium speed, or mix with spoon about 1 minute or until fluffy, scraping side of bowl occasionally.</li>
                    <li>Beat in egg and vanilla until smooth. Stir in flour mixture just until blended (dough will be stiff). Stir in chocolate chips and nuts.</li>
                    <li>Onto ungreased cookie sheets, drop dough by rounded tablespoonfuls 2 inches apart.</li>
                    <li>Bake 8 to 10 minutes or until light brown (centers will be soft). Cool 2 minutes; remove from cookie sheet to cooling rack. Cool completely, about 30 minutes. Store covered in airtight container.</li>
                </ol>
        </div> 
    </div>
    <?php include 'footer.php';?>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/5245bddf71.js" crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
</body>

</php>
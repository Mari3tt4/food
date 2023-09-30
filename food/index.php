<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section id="Home">
        <nav>


            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="menu.php">Menu</a></li>


            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
            
            </div>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Taste of<span>Tokyo</span></h1>
            </div>

            <div class="main_image">
                <img src="img/food.png"><!---->
            </div>

        </div>

        <p>
            "Tantalize your taste buds with Tokyo Temptations! Dive into the heart of Japanese cuisine with our handpicked collection of authentic Tokyo recipes. From savory sushi to soul-warming ramen, embark on a culinary journey through Tokyo's diverse flavors. Explore traditional dishes, discover secret ingredients, and master the art of Japanese cooking in the comfort of your own kitchen. Get ready to savor the essence of Tokyo, one delicious recipe at a time."
        </p>

        <div class="main_btn">
            <a href="#">Order Now</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>

     <!--About-->

     <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="img/onigigro.png">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose us?</h3>
                <p>
                    Choosing the "Taste of Tokyo" offers a delightful culinary journey for enthusiasts and food lovers. With its authentic and diverse range of Japanese recipes, the site provides a reliable source for trying out traditional and contemporary Japanese dishes.
                     Beyond mere recipes, the platform offers cultural context and background, enhancing the cooking experience with rich insights. Its visually appealing design, user-friendly interface, and interactive features create an engaging environment. 
                     Whether users seek reliable recipes, cultural immersion, or a vibrant cooking community, the "Taste of Tokyo" website stands out as a go-to destination, combining culinary expertise with an enjoyable user experience.
                </p>
            </div>

        </div>

        <a href="#" class="about_btn">Order Now</a>

    </div>

    <?php include 'components/footer.php'; ?>

</body>
</html>

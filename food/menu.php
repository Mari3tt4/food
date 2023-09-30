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
                <li><a href="index.html">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="menu.html">Menu</a></li>


            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
            
            </div>

        </nav>

        <body>
            <section>
                <h1 class="food-menu-heading">Japanese Cuisine</h1>
                <div class="food-menu-container">
                    <div class="food-menu-item">
                        <div class="food-img">
                            <img src="img/susi.jpg" alt="susi" />
                            <h1>Sushi Mosaic</h1>
                            <button type="button" onclick="showProductPreview('susi')">View Recipe</button>
                        </div>
                        <div class="food-description">
                            <p>This colorful Mosaic Sushi features sashimi, tamagoyaki rolled omelette, and vegetables arranged in a checkerboard pattern over sushi rice. It’s a feast for the senses! Despite its exquisite presentation, anyone can make it at home. 
                            
                        </div>
                    </div>
                    <div class="food-menu-container">
                        <div class="food-menu-item">
                            <div class="food-img">
                                <img src="img/Okonomiyaki.jpg" alt="" />
                                <h1>Okonomiyaki</h1>
                                <button class="view-recipe-button">View Recipe</button>
                            </div>
                            <div class="food-description">
                                
                                <p>
                                    A popular street food from Osaka, Okonomiyaki is a delicious Japanese savory pancake “grilled as you like it“ with your choice of protein and tasty condiments and toppings.
                                </p>
                                
                            </div>
                        </div>
                        <div class="food-menu-container">
                            <div class="food-menu-item">
                                <div class="food-img">
                                    <img src="img/onigiri.jpg" alt="" />
                                    <h1>Yaki Onigiri Chazuke</h1>
                                    <button class="view-recipe-button">View Recipe</button>
                                </div>
                                <div class="food-description">
                                    
                                    <p>
                                        Yaki Onigiri Chazuke is a Japanese comfort dish of warm dashi soup poured over a crispy grilled rice ball and garnished with savory toppings. Make and freeze the rice balls ahead of time so you can enjoy this as a quick meal or midnight snack.
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="food-menu-container">
                                <div class="food-menu-item">
                                    <div class="food-img">
                                        <img src="img/Oyakodon.jpg" alt="" />
                                        <h1>Oyakodon</h1>
                                        <button class="view-recipe-button">View Recipe</button>
                                    </div>
                                    <div class="food-description">
                                        
                                        <p>
                                            Oyakodon is a classic comfort food of Japanese home cooking. Tender pieces of chicken, onions, and eggs are simmered in an umami-rich sauce and then poured over a bowl of fluffy steamed rice. Simple, delicious, and utterly comforting, this is the kind of one-bowl meal you can cook in less than 30 minutes!
                                        </p>
                                        
                                    </div>
                                </div>                
                             </div>
                        </div>
                        <div class="view-recipe" id="susi">
                        <div class="preview">
                            <i class="fas fa-times" id="closePreview6"></i>
                            <div class="content">
                                <img src="img/susi.png" alt="">
                                    <div class="servings">
                                        <i class="fas fa-clock"></i><span> 25</span> Minutes
                                        <i class="fas fa-book-open"></i><span> 8</span> Ingredients
                                        <i class="fas fa-user"></i><span> 2-3</span> Servings
                                    </div>
                                    <h2>Lorem ipsum.</h2>
                                    <h1>Recipe:
                                        dfsdfsdfsdfsdf
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
        
            </section>



            <!--js link-->
        <script type="text/javascript" src="js/js.js"></script>
        </body>
        </html>
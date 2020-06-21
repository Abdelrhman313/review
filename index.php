<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Website~1</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="css/hover.css" />
    <!-- Main File For CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <!--Start NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Typeography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="bookNow">
                    <button>Book Now</button>
                </div>
            </div>
        </div>
    </nav>
    <!--End NavBar-->

    <!--Start Header Section-->

    <div class="header text-center">
        <div class="container">
            <h1>Welcom</h1>
            <hr/>
            <p>Our restaurant offers full-service dining with breathtaking views seen from our indoor covered patio and our outdoor sundeck.</p>
        </div>
    </div>

    <!--End Header Section-->

    <!--Start Section Book And About Us-->
    <section class="book_about">
        <div class="container">
            <section class="book">
                <form>
                    <div class="name">
                        <p>NAME</p>
                        <input type="text" placeholder="Your Name" />
                        <span></span>
                    </div>
                    <div class="phone">
                        <p>PHONE</p>
                        <input type="number" placeholder="Your Phone number" />
                        <span></span>
                    </div>
                    <div class="date">
                        <p>DATE</p>
                        <input type="date" />
                        <span></span>
                    </div>
                    <div class="no_peaple">
                        <p>No. OF PEAPLE</p>
                        <select>
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <span></span>
                    </div>
                    <div class="check">
                        <input type="submit" value="CHECK AVILABILITY" />
                    </div>
                </form>
            </section>
            <section class="about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rest_chef_imgs">
                            <img src="images/resturant.jpg" alt="restorent" />
                            <img src="images/chef.png" alt="Chef Photo" class="chef" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="details">
                            <h2 class="h1">About Us</h2>
                            <p>Pesto is a family owned and operated Italian Restaurant offering a combination of fresh ingredients and authentic Italian cooking.</p>
                            <p>We will make sure you are served the most authentic and fresh Italian dishes, while offering the best customer service. Our kitchen is committed to providing our guests with the best Italian Cuisine.</p>
                            <img src="images/twqy3.png" alt='Twqy3 el chef' />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--End Section Book And About Us-->

    <!--Start Features-->
    <section class="features text-center">
        <h2 class="h1">Featured Offers</h2>
        <p>We offer a great variety of the best Italian dishes to our visitors and guests. Below are some of our most popular main dishes and desserts.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feat">
                        <div class="feat_figure">
                            <img src="images/features/1.jpg" alt="Feature" />
                            <div class="figure_btn">
                                <a href="#" class="btn btn-success">Order Now</a>
                            </div>
                        </div>
                        <p><a href="#">Ravioli</a></p>
                        <span>$8</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feat">
                        <div class="feat_figure">
                            <img src="images/features/2.jpg" alt="Feature" />
                            <div class="figure_btn">
                                <a href="#" class="btn btn-success">Order Now</a>
                            </div>
                        </div>
                        <p><a href="#">Black Pasta</a></p>
                        <span>$13</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feat">
                        <div class="feat_figure">
                            <img src="images/features/3.jpg" alt="Feature" />
                            <div class="figure_btn">
                                <a href="#" class="btn btn-success">Order Now</a>
                            </div>
                        </div>
                        <p><a href="#">Gelato</a></p>
                        <span>$4</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features-->

    <!--Start Restaurant Menu-->
    <section class="res_menu text-center">
        <h2 class="h1">Our Restaurant Menu</h2>
        <div class="container">
            <div class="nav_menu">
                <div class="nav">
                    <ul class="list-unstyled">
                        <li class="active" data-class='.mains'>
                            <a href="#">Mains</a>
                        </li>
                        <li data-class=".desserts">
                            <a href="#">Desserts</a>
                        </li>
                        <li data-class=".drinks">
                            <a href="#">Drinks</a>
                        </li>
                    </ul>
                </div>
                <div class="menu text-left">
                    <div class="mains">
                        <div class="meal">
                            <span>$25.89</span>
                            <h3>
                                <a href="#">Osso Buco</a>
                            </h3>
                            <p>Osso Buco is one of the Italian greats - slow cooked veal in a white wine tomato sauce. Meltingly tender, this is both hearty and luxurious.</p>
                        </div>
                        <div class="meal">
                            <span>$16.89</span>
                            <h3>
                                <a href="#">Pappardelle Mimmo</a>
                            </h3>
                            <p>This delicious dish tops long, wide pasta with scallops, lobster, asparagus, butter, sage and truffle oil to cater every palate.</p>
                        </div>
                        <div class="meal">
                            <span>$17.89</span>
                            <h3>
                                <a href="#">Trippa Satriano</a>
                            </h3>
                            <p>Thinly sliced herb encrusted ahi tuna topped with diced tomatoes, olives, capers, red onions and fennel. Perfect choice even for the first-time visitors!</p>
                        </div>
                        <div class="meal">
                            <span>$18.89</span>
                            <h3>
                                <a href="#">Filetto Di Manzo</a>
                            </h3>
                            <p>Wonderful combination of prime tenderloin, winter greens, Jerusalem artichoke puree, and oxtail reduction sauce.</p>
                        </div>
                    </div>
                    <div class="desserts">
                        <div class=" meal ">
                            <span>$20.89</span>
                            <h3>
                                <a href="# ">Tiramisu</a>
                            </h3>
                            <p>A Pesto’s favorite - classic Italian dessert made with lady fingers, Mascarpone cheese & espresso. Perfect for both kids and adults.</p>
                        </div>
                        <div class="meal ">
                            <span>$6.89</span>
                            <h3>
                                <a href="# ">Cannoli</a>
                            </h3>
                            <p>Trio tower of cannoli filled with smooth ricotta, sugar & cinnamon, with chocolate & raspberry sauces. Single cannoli is also available.</p>
                        </div>
                        <div class="meal ">
                            <span>$5.89</span>
                            <h3>
                                <a href="# ">Pistachio Passion</a>
                            </h3>
                            <p>Layered pistachio cream, cream cheese custard & whipped cream atop a rich walnut crust.</p>
                        </div>
                        <div class="meal ">
                            <span>$4.89</span>
                            <h3>
                                <a href="# ">Chocolate-and-Pistachio Biscotti</a>
                            </h3>
                            <p>At Pesto, we vary these wonderful nutty biscotti, while also dipping them in melted dark chocolate for an extra layer of flavor.</p>
                        </div>
                    </div>
                    <div class="drinks">
                        <div class="meal ">
                            <span>$10.89</span>
                            <h3>
                                <a href="# ">Aperol Spritz</a>
                            </h3>
                            <p>The most popular drink in Venice: refreshing, easygoing &…happy! Perfect to be sipped as an “Aperitivo” just before dinner - delightful!</p>
                        </div>
                        <div class="meal ">
                            <span>$9.89</span>
                            <h3>
                                <a href="# ">Negroni</a>
                            </h3>
                            <p>Reward yourself with a moment of relaxation & pure pleasure while enjoying the full flavour & simplicity of a Negroni, an iconic Italian cocktail.</p>
                        </div>
                        <div class="meal ">
                            <span>$11.89</span>
                            <h3>
                                <a href="# ">Negroni Sbagliato</a>
                            </h3>
                            <p>A cocktail for those who prefer more delicate flavours but nonetheless want a drink full of taste & personality.</p>
                        </div>
                        <div class="meal ">
                            <span>$8.89</span>
                            <h3>
                                <a href="# ">White Peach Bellini</a>
                            </h3>
                            <p>White Peach Bellini is a classic drink from Venice Italy of white peach purée and Prosecco. It is one of our most popular drinks at Pesto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Restaurant Menu-->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.0.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>

    <!-- Main File For JS Code -->
    <script src="js/main.js "></script>
</body>

</html>

</html>

</html>

</html>
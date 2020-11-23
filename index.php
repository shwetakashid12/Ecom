<html>
    <head>
        <title>E-Commerce Website</title>
        <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<?php include 'links.php'?>
<?php include 'style_copy.php'?>  
</head>

<body>
    <div class ="top-nav-bar">
    <div class="search-box">
        <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>

        <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>

    <img src="images/rsz_1logo1.png" class="logo">
    <input type="text" class="form-control">
    <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div> 
    
    <div class="menu-bar">
        <ul>
            <li><a href="index.html"  >Home</a></li>
            <li><a href="finallogin.php"   >Log In</a></li>

            <li><a href="original.php">Sign Ip</a></li>
            <li><a href="gallary.html">Gallery</a></li>
<!--<li><a href="#"><i class="fa fa-shopping-cart"></i>
                cart</a></li>-->
            

                <!--div class="model" id ="myModel">
                    <div class="model-dialog">
                        <div class="model-content">

                            <div class="model-header">
                                <h3 class="text-center text-primary">LogIn</h3>
                            </div>

                        </div>
                    </div>

                </div-->
        </ul>
    </div>
    </div>
    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
                <li>On Sale<i class="fa fa-angle-right" aria-hidden="true"></i>
                <ul>
                    <li>Sub Menu-1</li>
                    <li>Sub Menu-1</li>
                    <li>Sub Menu-1</li>
                    <li>Sub Menu-1</li>

                </ul>
                </li>
                <li>Mens<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
    
                    </ul>
                </li>
                <li>Womens<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
    
                    </ul>
                </li>

                <li>Kids<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
    
                    </ul>
                </li>

                <li>Fitness<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
    
                    </ul>
                </li>
                <li>Watches<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
    
                    </ul>
                </li>



            </ul>
        </div>
        <div class="slider">
            <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/w1.jpg" class="d-block w-100" >
                    <div class="carousel-caption">
                        <h1 class="display-2">FirstSmile</h1>
                        <h3>Every Purchase has a Purpose</h3>
                        <button type="button" class="btn btn-outline-light btn-primary btn-lg">VIEW Products</button>
                        <button type="button" class="btn btn-primary btn-lg">Shop Now</button>
        
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <img src="images/shoe7.jpg" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="images/w2.jpg" class="d-block w-100" >
                  </div>
                  
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    
  
                </ol>
                
              </div>

        </div>
        <div class="container-fluid">
            <div class="row-jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead">Online Shopping Site for Fashion & Lifestyle in India. Buy Shoes, Clothing, Accessories and lifestyle products for women & men. Best Online Fashion Store .</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="#"><button type="button"  class="btn btn-outline-secondary btn-lg">Shop Now</button></a>
                </div>
            </div>
            </div>

            <!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun
</button>

 <div id="emoji" class="collapse">
	 <div class="container-fluid padding">
		 <div class="row text-center">
			 <div class="col-sm-6 col-md-3">
				 <img class="gif" src="images/gif/panda.gif">
			 </div>
			 <div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/poo.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/unicorn.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/chicken.gif">
			</div>
		 </div>
	 </div>
 </div> 



<!--*********fetured category-->

<section class="fetured-categories">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/w5.jpg">
                
                
            </div>

            <div class="col-md-4">
                <img src="images/shoe1.jpg">
            </div> 

            <div class="col-md-4">
                <img src="images/w5.jpg">
            </div>

        </div>
    </div>
</section>

<!--On sale-->
<section class="on-sale">
<div class="container">
    <div class="title-box">
        <h2>On Sale</h2>
    </div>
<div class=row>
    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w1.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
            <h3>Watch</h3>
            <h5>$40.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe4.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Shoes</h3>
            <h5>$45.00</h5>

        </div>
    </div>


    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w3.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Watch</h3>
            <h5>$30.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe6.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
            <h3>Sport Shoes</h3>
            <h5>$200.00</h5>

        </div>
    </div>

</div>





</div>
</section>

    </section>

    <!-- new Products-->
<section class="new-products">
<div class="container">
    <div class="title-box">
        <h2>New Arrivals</h2>
    </div>
<div class=row>
    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w1.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
            <h3>Watch</h3>
            <h5>$40.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe4.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Shoes</h3>
            <h5>$45.00</h5>

        </div>
    </div>


    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w3.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Watch</h3>
            <h5>$30.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe6.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
            <h3>Sport Shoes</h3>
            <h5>$200.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe4.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Shoes</h3>
            <h5>$45.00</h5>

        </div>
    </div>


    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w3.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
            <h3>Watch</h3>
            <h5>$30.00</h5>

        </div>
    </div>

    <div class="col-md-3">
        <div class="product-top">
            <img src="images/shoe6.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
            <h3>Sport Shoes</h3>
            <h5>$200.00</h5>

        </div>
    </div>
    <div class="col-md-3">
        <div class="product-top">
            <img src="images/w1.jpg">
            <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye"></i>
                </button>

                <button type="button" class="btn btn-secondary" title="Add to Whishlist">
                    <i class="fa fa-heart-o"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="product-bottom text-center">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
            <h3>Sport Shoes</h3>
            <h5>$40.00</h5>

        </div>
    </div>
</div>
</div>
</section>

    <!-- website features -->
<section class="website-features">
    <div class="container">
        <div class="row">
            <div class="col-md-3 feature-box">
                <img src="images/original.jpg">
                <div class="feature-text">
                    <p><b>100% Original items</b> are available at company</p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/return.jpg">
                <div class="feature-text">
                    <p><b>Return within 30 day </b>of receiving</p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/truck.jpg">
                <div class="feature-text">
                    <p><b>Get free delievery for every </b>order on more than price </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/card.jpg">

                <div class="feature-text">
                    <p><b>Pay Online through multiple </b>options(card/Net banking)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus-official"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <!-- <a><i class="fa fa-facebook-official"></i></a>
                <a><i class="fa fa-linkedin"></i></a>
                <a><i class="fa fa-youtube-play"></i></a>
                <a><i class="fa fa-twitter"></i></a> -->

		</div>
	</div>
</div>

<!--Footer-->
<section class="footer">
    <div class="container tex-center">
        <div class="row">
            <div class="col-md-3">
            <h1>Useful Links</h1>
            <p>Privacy Policy</p>
            <p>Term of Use</p>
            <p>Return Policy</p>
            <p>Discount Coupons</p>
            </div>     
        
            <div class="col-md-3">
            <h1>Company</h1>
            <p>About Us</p>
            <p>Contact Us</p>
            <p>Career</p>
            <p>Affiliate</p>
            </div>   

            <div class="col-md-3">
                <h1>Follow US On</h1>
                <p><i class="fa fa-facebook-official"></i> Facebook</p>
                <p><i class="fa fa-linkedin"></i> Linkedin</p>
                <p><i class="fa fa-youtube-play"></i> YouTube</p>
                <p><i class="fa fa-twitter"></i> Twitter</p>
                </div>
                <div class="col-md-3 footer-image">
                    <h1>Download App</h1>
                    <img src="images/app.jpg">
                    
                    </div>

        </div>
        <hr>
        <p class="copyright">Made with <i class="fa fa-heart-o"></i> by Shweta</p>
    </div>
</section>






    <!-- website features -->












<script>
    function openmenu()
    {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";

        document.getElementById("close-btn").style.display="block";


    }
    function closemenu()
    {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";

        document.getElementById("close-btn").style.display="none";


    }

</script>

</body>

</html>
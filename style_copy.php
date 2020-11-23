
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *
{
margin: 0;
padding: 0;
}
body
{
background-color: #f1f3f4;
font-family: sans-serif;
}
.top-nav-bar
{
    height: 57px;
    top: 0;
    position: sticky;
    background: #fff;
    margin-bottom: 20px;
    border-bottom: 3px solid orange;
    z-index: 2;
}
.logo
{
    height: 40px;
    margin:5px 10px;
}
.form-control
{
    margin-top: 9px;
    margin-left:30px;
    border: 1px solid orange !important;
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important ;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    box-shadow: none;
}
.input-group-text
{
    background: orange !important;
    border:1px solid orange !important;
    margin:8.5px 10px 3px 0 !important;
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
    cursor:pointer;
}
.search-box
{
    display: inline-flex;
    width: 60%;
}
.fa-search
{
    color:#fff;
}
.menu-bar
{
    width: 40%;
    height:57%;
    float:right;
}
.menu-bar ul
{
   display: inline-flex;
   float: right; 
}
.menu-bar li
{
    border-left: 1px solid #fff;
    list-style-type:none;
    padding: 15px 35px;
    text-align: center;
    background-color: orange;
    cursor: pointer;
    
}
.menu-bar ul li a
{
    font-size:16px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;

}
.fa-shopping-cart
{
    margin-right:5px ;
}

@media only screen and (max-width:980px)
{
    .top-nav-bar
    {
        height:118px ;
        border-bottom: 0;

    }
    .search-box
    {
        width: 100%;
    }
    .menu-bar
    {
        width: 100%;
    }
    .menu-bar ul
    {
        margin: 10px 0;
        width: 100%;
    }
    .menu-bar ul li
    {
        height: 57px;
        width: 100%;
    }

}
/*   slide menu*/
.side-menu
{
    height: 79%;
    width: 15%;
    font-size: 14px;
    float:left;
    z-index: 2;
    background-color:#ddd ;
}
.side-menu ul{
    margin-left: 10px;
}
.side-menu ul li{
    list-style-type: none;
    font-weight: bold;
    margin-top: 10px;
    cursor: pointer;
}
.side-menu ul li:hover{
    color: orange;
}
.side-menu ul li ul{
    display: none;
    z-index: 10;
    top:77px;
}
.side-menu ul li:hover ul
{
display: block;
height: 400px;
margin-left: 14%;
padding: 0 100px 10px 10px;
position: fixed;
background: #ececec;
box-shadow:1px 1px 4px 1px rgba(0,0,0,0.5) ;
}
 .fa-angle-right{
    margin-top: 4px;
    margin-right: 8px;
    float: right;
}
#menu-btn,#close-btn{
    margin:10px ;
    font-size: 30px;
    color: orange;
    display: none;
}
@media only screen and (max-width:980px){
    .side-menu{
        width: 34%;
        z-index: 20;
        top: 133px;
        position: fixed;
        font-size: 12px;
        background: #f1f3f4;
        display: none;
    }
    .side-menu ul li ul{
top:133px;
    }

    .side-menu ul li:hover ul{
        margin-left: 31%;
    }

    #menu-btn{
      display: block;  
    }

}

.slider{
    width: 85%;
    margin-left: 15%;
    padding: 0 10px;
    /*cursor: pointer;*/
}
.carousel-item{
	height : 500px;
}

.carousel
{
    box-shadow:1px 1px 4px 1px rgba(0,0,0,0.5) ;
}

.carousel-caption{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.carousel-caption h1{
  font-size: 500%;
  text-transform: uppercase;
  text-shadow: 1px 1px 15px #000;
}
.carousel-caption h3{
  font-size: 200%;
  font-weight: 500;
  text-shadow: 1px 1px 10px #000;
  padding-bottom: 1rem;
}
.carousel-indicators
{
    z-index: 1 !important;
}
@media only screen and (max-width:980px)
{
    .slider{
    width: 100%;
   margin-left: 0; 
}
}
.row-jumbotron{
    background: orange;
    margin-left: 190px;
    margin-top: 20px;

}

.fun{
    width: 100%;
    margin-bottom:2rem;

  }
.gif{
  max-width: 100%;
}
/*fetured css*/
.fetured-categories
{
    margin: 50px 0;
}
.fetured-categories img
{
    width: 100%;
    padding: 20px 0;
transition: 1s;
cursor: pointer;
}
.fetured-categories img:hover{
transform: scale(1.1);
}


/**on sale product***/
.title-box{
    background: orange;
    color: #fff;
    width: 180px;
    padding: 4px 10px;
    height: 40px;
    margin-bottom: 30px;
    display: flex;
}
.title-box h2{
    font-size: 24px;
}
.title-box::after{
    content: '';
    border-top: 40px solid orange;
    border-right: 50px solid transparent;
    position: absolute;
    display: flex;
    margin-top: -4px;
    margin-left: 170px;
}

/*product top css*/
.product-top img{
    width: 100%;
}
.overlay-right{
    display: block;
    opacity: 0;
    position: absolute;
    top: 10%;
    margin-left: 0;
    width: 70px;
}
.overlay-right .fa
{
    cursor: pointer;
    background-color: #fff;
    color: #000;
    height:35px ;
    width: 35px;
    font-size: 20px;
    padding: 7px;
    margin-top: 5%;
    margin-bottom: 5%;

}
.overlay-right .btn-secondary
{
   background: none !important;
   border: none !important;
   box-shadow: none !important; 
}

.product-top:hover .overlay-right
{
    opacity: 1;
    margin-left: 5%;
    transition: 0.5s;

}

/**product bottom**/
.product-bottom .fa
{
    color: orange;
    font-size: 10px;

}
.product-bottom h3
{
    font-size: 20px;
    font-weight: bold;
}
.product-bottom h5
{
    font-size: 15px;
    padding-bottom: 10px;
    

}

.new-product{
    margin:50px 0;

}

.website-features{
    margin: 60px 0;

}
.website-features img{
    width:20%
}

.feature-text{
margin-top: 10px;
float: right;
width: 80%;
padding-left: 20px;
}
.feature-box
{
    padding-top: 20px;
}


.social a{
  font-size: 4.5em;
  padding: 3rem;

}
.fa-facebook{
  color: #3b5998;

}
.fa-twitter{
  color: #00aced;
  
}.fa-google-plus-official{
  color: #blue;
  
}
.fa-instagram{
  color: #517fa4;
  }
  .fa-youtube-play{
    color: #bb0000;
    
  }
  .fa-facebook:hover,.fa-twitter:hover,.fa-google-plus-official:hover,
  .fa-instagram:hover,.fa-youtube-play:hover{
    color: #d5d5d5;
  }

.footer{
    margin-top: 50px;
    background: black;
    color: white;
}
.footer h1{
    font-size: 15px;
    margin:25px 0 ;
}
.footer p{
    font-size: 12px;
}
.copyright{
    margin-bottom: -80px;
    text-align: center;
    font-size: 15px;
    padding-bottom: 20px;

}
.fa-heart-o{
    color: red;
    font-size: 15px;
}
.footer hr{
margin-top:10px;
background-color: #ccc;
}
.footer-image img{
    width: 150px;
}

.footer .row .fa{
    padding-right: 20px;
    font-size: 15px;
}
</style>
</head>

</html>

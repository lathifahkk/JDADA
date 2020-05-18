<?php include ('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>Welcome at JD-ADA</title>
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
    <style>
 *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    overflow: hidden;
}

body{
    font-family: Playfair Display;
    background-color: #193660;
}

nav{
    background: #ffffff;
    height: 65px;
    width: 100%;
}

label.logo{
    color: #193660;
    font-size: 24px;
    font-weight: bold;
    line-height: 65px;
    padding: 0 100px;
}

nav ul{
    float: right;
    margin-right: 20px;
}

nav ul li{
    display: inline-block;
    line-height: 65px;
    margin: 0 5px;
}

nav ul li a{
    color: #193660;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}

a.active, a:hover{
    background: #C4C4C4;
    transition: .5s;
}

.lingkaran{
    position: absolute;
    width: 916px;
    height: 916px;
    left: -150px;
    top: 180px;

    background: #0A2142; 
    border-radius: 100%; 
}

.lingkaran b{
    position: absolute;
    width: 351px;
    height: 368px;

    font-family: Playfair Display;
    font-style: normal;
    font-weight: bold;
    font-size: 90px;
    line-height: 150px;
    left: 360px;
    top: 50px;

    color: #FFFFFF;
}

.buy b{
    top: 200px;
    right: 95px;
    position: absolute;
    width: 412px;
    height: 249px;

    font-family: Playfair Display;
    font-style: normal;
    font-weight: bold;  
    font-size: 30px;
    line-height: 40px;
    text-align: left;

    color: #FFFFFF;
}



.boxlogin{
    position: absolute;
    right: 190px;
    top: 420px;

    background: #193660;
    border-radius: 3px;

    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
}

.boxlogin a{
    text-align: center;
    color: #ffffff;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}

.boxlogin .login{
    color: #FFFFFF;
    background: #0A2142;
    padding: 10px 30px;
}

.wave{
	position: fixed;
	bottom: 50;
	left: 0;
	height: 100%;
	z-index: -1;
}
.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.owl-carousel{
    top: 80px;
    left: 110px;
    width: 70%;
    height: 450px;
    max-height: 450px;
    align-items: center;
    justify-content: flex-end;
}

.owl-dots
{
    position: fixed;
    padding-left: 1.2rem;
    padding-bottom: 9rem;
    display: flex !important;
    flex-direction: column;  
    transform: translateY(-240px); 
}
.owl-dots button
{
    border-radius: 5rem;
    margin: .3rem 0; 
}
.owl-dots button span
{
    background: whitesmoke !important;
    margin: 0rem .6rem !important;
}
.owl-dots .active
{
    border: 1px solid slateblue !important;
}
.owl-dots .active span
{
    background: slateblue !important;
    margin: .3rem .5rem !important;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.kanan{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.owl-stage-outer{
    align-items: center;
    justify-content: flex-end;
}
    </style>
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="index.php">Sell</a></li>
            <li><a href="shopdisplayonly.php">Shop</a></li>
                <li><a href="index.php">Contact Us</a></li>
            <li><a href="index.php">Profile</a></li>
        </ul>
    </nav>

    <img class="wave" src="img/wave6.png" />

    <<div class="container">
        <!-- Owl-Carousel -->
        <div class="owl-carousel owl-theme">
                <img src="img/imgcart.svg" alt="" class="login_img">
                <img src="img/undraw_web_shopping_dd4l (2).svg" alt="" class="login_img">
                <img src="img/imghello.svg" alt="" class="login_img">
        </div>
        <!-- /Owl-Carousel -->
        <div class="kanan">
            <div class="buy">
                <b>
                    BUY things from other. </br> SELL your unused things. </br>Save the world, and </br>Get your own profit.
                </b>
            </div>
        </div>
    </div>

    <div class=boxlogin>
        <a class="login" href="registerlogin.php">Log In</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>
</html>
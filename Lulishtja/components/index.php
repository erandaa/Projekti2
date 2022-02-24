
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lulishtja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="./index.php" class="logo ">Lulishtja<span>.</span></a>
    <!-- <?php 
    echo "Username: ".$_SESSION['username'];
    ?> -->
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="Register.php" class="fas fa-user"></a>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Fresh Flowers</h3>
        <span> Natural & Beautiful Flowers </span>
        <p>Lulishtja. është kompania e parë online për shitjen e luleve në të gjithë Kosovën. A service with a smile :).</p>
        <a href="products.php" class="btn">Blej tani</a>
    </div>
    
</section>

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.webp" alt="">
        <div class="info">
            <h3>Free Delivery</h3>
            <span>On All Orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.webp" alt="">
        <div class="info">
            <h3>10 days Returns</h3>
            <span>Moneyback Guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.webp" alt="">
        <div class="info">
            <h3>Offer & Gifts</h3>
            <span>On All Orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.webp" alt="">
        <div class="info">
            <h3>Secure Payments</h3>
            <span>Protected By Paypal</span>
        </div>
    </div>
   
</section>

<section class="products" id="products">

    <h1 class="heading"> Latest <span>Products</span> </h1>

    <div class="box-container">

    </div>

</section>

<section class="review" id="review">

<h1 class="heading"> Customer's <span>Review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>I looked online and came across Lulishtja., it was easy to use and found a florist local to the recipient. They did not disappoint. I was even able to get the flowers delivered the same day! I’m not very online savvy and it was a breeze for me so I’d highly recommend and have even purchased a 2nd bunch already.</p>
        <div class="user">
            <img src="images/pic-1.webp" alt="">
            <div class="user-info">
                <h3>Filan Filani</h3>
                <span>Gjilan</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>I ordered these flower in the morning and they were delivered that afternoon, my cousin sent me a photo and the flowers were so beautiful ! I am over the moon with the order and how quickly they were made up and received, 100% I would use you again!</p>
        <div class="user">
            <img src="images/pic-2.webp" alt="">
            <div class="user-info">
                <h3>Filane Fisteku</h3>
                <span>Venecia</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Wasn`t sure how to send flowers from Swiss to the Kosovo and found this website. Ordering was easy and i could choose Swiss franc so i could see how much it would cost me. Flowers and chocolates were delivered as stated and the recipient was thrilled with the bouquet and the chocolates were delicious!.</p>
        <div class="user">
            <img src="images/pic-3.webp" alt="">
            <div class="user-info">
                <h3>Anon Anonimi</h3>
                <span>Bern</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>Locations</h3>
            <a href="#">Kosovo</a>
            <a href="#">Germany</a>
            <a href="#">Switzerland</a>
            <a href="#">Italy</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">lulishtja@gmail.com</a>
            <a href="#">Gjilan, Kosovo - 60000</a>
            <img src="images/payment.webp" alt="">
        </div>

    </div>

</section>

<script  src="./js/db.js"></script>
<script  src="./js/index.js"></script>

</body>
</html>

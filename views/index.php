 <?php 
include '../components/header.php';
?>


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

    <div class="box-container-main">
    <div class="slider-main">
 
    
            <!--<a href="slider.html">Slider<ul>*/-->
            <div id="sliderAuto">
                <script >
                    var index = 0;
                    var kohaPerSlide = 3000;
                    var fotot = [];

                    fotot[0] = '../images/Blush.jpg'
                    fotot[1] = '../images/violets.jpg'
                    fotot[2] = '../images/Stylish.jpg'


                    function slidePics() {
                        document.sliderpics.src = fotot[index];
                        if (index < fotot.length - 1) {

                            index++;

                        } else {

                            index = 0;

                        }

                        setTimeout("slidePics()", kohaPerSlide);
                    }
                    window.onload = slidePics;
                </script>
                
                <img name="sliderpics" id="imgCSS" style="filter: invert(0);">
            </div>
        </div>

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
            <img src="../images/pic-1.webp" alt="">
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
            <img src="../images/pic-2.webp"" alt="">
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
            <img src="../images/pic-3.webp" alt="">
            <div class="user-info">
                <h3>Anon Anonimi</h3>
                <span>Bern</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<?php 
include '../components/footer.php';
?>
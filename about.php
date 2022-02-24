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

    <a href="./index.php" class="logo">Lulishtja<span>.</span></a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>

<section class="about" id="about">

    <h1 class="heading"> <span> About </span> Us </h1>

    <div class="row">

        <div class="slider">
           <!--<a href="slider.html">Slider<ul>*/-->
            <div id="sliderAuto">
                <script>
    
                var index=0 ;
                var kohaPerSlide= 3000;
                var fotot = [];
    
                fotot[0]= 'Slider/img/img1.jpg'
                fotot[1]='Slider/img/img2.jpg'
                fotot[2]='Slider/img/img3.jpg.'
               
    
                function slidePics(){
                    document.sliderpics.src = fotot[index];
                    if(index<fotot.length - 1){
    
                    index++;
    
                    }
                    else{
    
                    index=0;
    
                    }
    
                    setTimeout("slidePics()",kohaPerSlide);
                }
                window.onload = slidePics;
    
                </script>
                <img name="sliderpics" id="imgCSS" style="filter: invert(0);">
            </div>
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>Lulishtja is all about our ultimate love for flowers and exceeding our clients’ expectations!</p>
            <p>Attention to detail is visible in everything we create down to the selection of ribbons and special embellishments that make every wedding bouquet unique and perfect for the bride who carries it. At Lulishtja, we merge our style with our clients’ personalities to create gorgeous flowers and floral arrangements.</p>
            <p>Whether you know exactly what you want or don’t know where to start, Lulishtja is the perfect floral partner. We go above and beyond to ensure our clients’ needs are met. We are very responsive and always get back to our clients promptly. We work with your venues and your vendors to ensure all timelines are completed as planned.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <a href="contact.php">Contact</a>
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

</body>
</html>
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

    <a href="./index.html" class="logo">Lulishtja<span>.</span></a>

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

<section style="margin-top: 100px;" class="products" id="products">

    <h1 class="heading"> Our <span>Flowers</span> </h1>

    <div class="search" style="margin:auto;max-width:300px; margin-bottom: 30px;">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>

    <div class="box-container">

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

<script src="./js/db.js"></script>
<script src="./js/flowers.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lulishtja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="../views/" class="logo ">Lulishtja<span>.</span></a>
    <!-- <?php 
    echo "Username: ".$_SESSION['username'];
    ?> -->
    <nav class="navbar">
        <a class="<?php if($page == 'index.php'){ echo ' active';}?>" href="../views/index.php">Home</a>
        <a class="<?php if($page == 'rrethnesh.php'){ echo ' active';}?>" href="../views/rrethnesh.php">About</a>
        <a class="<?php if($page == 'produktet.php'){ echo ' active';}?> "href="../views/produktet.php">Products</a>
        <a class="<?php if($page == 'kontakt.php'){ echo ' active';}?>" href="../views/kontakt.php">Contact</a>
    </nav>

    <div class="icons">
    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1 ){ ?>
                        <li class="<?php if($page == 'dashboard.php'){ echo ' active';}?>"><a href="dashboard.php">Dashboard</a></li>
    <?php } else {?>
                        <a class="<?php if($page == 'shporta.php'){ echo ' active';}?>">
                        <a href="../views/shporta.php" class="fas fa-shopping-cart"></a>
                        </a>
                    <?php } ?>
                    <?php if(isset($_SESSION['is_logged_in'])){ ?>
                        <a><a href="logout.php" class="button">Logout</a></a>
                    <?php } else {?>
                        <a class="<?php if($page == 'llogaria.php'){ echo ' active';}?>">
                        <a href="../views/llogaria.php" class="fas fa-user"></a>
                            </a>
                    <?php }?>
        <a href="#" class="fas fa-heart"></a>
    </div>

</header>
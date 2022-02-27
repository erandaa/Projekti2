<?php
require_once 'ProductMapper.php';
require_once 'Product.php';
require_once 'UserMapper.php';
require_once 'CartMapper.php';
session_start();

if(isset($_POST['add-product-btn'])){
 
    $mapper= new UserMapper();

    $currentAdmin = $mapper->getUserByEmail($_SESSION['email']);
    $emri=$_POST['name'];
    $prodhuesi = $_POST['prodhuesi'];
    $cmimi=$_POST['price'];
    $pershkrimi =$_POST['desc'];
    $sasia= $_POST['qty'];
    $kategoria= $_POST['cat'];
    $image= $_FILE['image'];
    $admin= $currentAdmin['id'];

    $fileTmpName= $_FILES['image']['tmp_name'];
    $imageName= $_FILES['image']['name'];
    $fileDestination='../images/produkte/'.$imageName;

    move_uploaded_file($fileTmpName,$fileDestination);
    $mapper = new ProductMapper();
    $product = new Product($emri, $cmimi,$pershkrimi,$sasia,$fileDestination,$admin,$prodhuesi);

    if($mapper->insertProduct($product)){
        header("Location ..//dashboard   per sukses");
    }
    else{
        header("location ..//dashborad per error");
    }
}
else if(isset($_POST['add-category-btn'])){
    $pmapper= new ProductMapper();
    $kategoria = $_POST['kategoria'];

    $allCategories = $pmapper->getAllCategories();
    foreach($allCategories as $category)
        if($kategoria == $category['emri'])
            header("location ..// error upload");

    $pmapper->insertCategories($kategoria);
    header("Location ...// upload success");
}
else if(isset($_POST['add-slider-img'])){
    $image=$_FILES['slider-image'];
    $fileTmpName=$_FILES['slider-image']['tmp_name'];
    $imageName= $_FILES['slider-image']['name'];
    $fileDestination='.//images/slider/'.$imagename;

    move_uploaded_file($fileTmpName,$fileDestination);
    $pmapper= new ProductMapper();
    $mapper->insetIntoSlider($fileDestination);
    header("Location//// success");
}
else if(isset ($_POST['add-brand-img'])){
    $image=$_FILES['brand-image'];
    $fileTmpName=$_FILES['brand-image']['tmp_name'];
    $imageName= $_FILES['brand-image']['name'];
    $fileDestination='.//images/brands/'.$imagename;

    move_uploaded_file($fileTmpName,$fileDestination);
    $pmapper= new ProductMapper();
    $mapper->insetIntoBrands($fileDestination);
    header("Location//// success");
}
else if(isset($_POST["send-msg"])){
    $name= $_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $msg=$_POST['mgs'];

    $mapper= new MessageMapper();
    $mapper->insertMessage($name,$lastname,$email,$msg);
    header("Location: ..///");
}
else if(isset($_GET['action'])&& $_GET['action']=='add-to-cart'){
    if(isset($_GET['product-id'])){
        $usermapper= new UserMapper();
        $cartmapper= new CartMapper();
        $user =$usermapper->getUserByEmail($_SESSION['email']);
        $cartmapper->insetToCart($user['id'],$_GET['product-id']);
        header ("Location: ///");
    }
}
else if(isset($_POST['change-rreth-nesh'])){
    $newText = $_POST['text'];
    $msgmapper= new MessageMapper();
    $msgmapper->updatetext($_OST['id'],$newText);
    header("Location: ..");
}
else{
    header("Location: .. ");
}
?>
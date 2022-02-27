<?php
include_once "ProductMapper.php";
include_once "UserMapper.php";
include_once "cartMapper.php";
session_start();



if(!empty($_SESSION['is_logged_in'])&& isset($_SESSION['is_logged_in'])&& $_SESSION['is_logged_in']==1&&$_SESSION['role']==1){
    $pmapper = new ProductMapper();
    $mapper= new UserMapper();
    $user = $mapper->getUserByEmail($_SESSION['email']);

    if(isset($_GET['action'])&& ($_GET['action']=='delete-product')){
        if(isset($_GET['prod-id'])&& (is_numeric($_GET['proc-id']))){
            $product=$pmapper->getProductById($_GET['prod-id']);
            $filepath= $product['image'];
            if(file_exists($filepath))
                unlink($filepath);
            $pmapper->deleteProducts($_GET['prod-id']);
            header("location..");
        }
    }
    else if (isset($_GET['action'])&&($_GET['action']=='edit-product')){
        if(isset($_GET['prod-id'])&&(is_numeric($_GET['prod-id']))){
            $pmapper->promoteProduct($_GET['prod-id']);
            header(" Location..");            
        }
    }
    else if (isset($_GET['action'])&&($_GET['action']=='make-admin')){
        if(isset($_GET['prod-id'])&&(is_numeric($_GET['user-id']))){
            $mapper->makeadmin($_GET['user-id']);
            header(" Location..");            
        }
    }
    else if (isset($_GET['action'])&&($_GET['action']=='remove-admin')){
        if(isset($_GET['prod-id'])&&(is_numeric($_GET['user-id']))){
            $mapper->removeadmin($_GET['user-id']);
            header(" Location..");            
        }
    }
    else if (isset($_GET['action'])&&($_GET['action']=='edit-user')){
        $mapper->$_GET['user-id'];
        header(" Location..");            
    }
    else if (isset($_GET['action'])&& $_GET['action']=="remove-from-cart"){
        if(isset($_GET['product-id'])){
            $cartmapper= new CartMapper();
            $cartmapper->deleteProductFromCart($_GET['product-id']);
            header("Location...");
        }
    }
    else if (isset($_GET['action'])&& $_GET['action']=="delete-category"){
        if(isset($_GET['category'])){
            $mapper= new ProductMapper();
            $mapeper->deleteProductsWithCategory($_GET['category']);
            $mapeper->deleteFromCategory($_GET['category']);
            header("Location...");
        }
    }
    else if(isset($_GET['action'])&&$_GET['action']=="remove-from-cart"){
        if(isset($_GET['product-id'])){
            $cartmapper = new CartMapper();
            $cartmapper->deleteProductFromCart($_GET['product-id']);
            header("location...");
        }
    }
    else{
        header("Location ...");
    }

}
?>
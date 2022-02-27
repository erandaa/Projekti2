<?php
include '../components/header.php';
include_once '../logic/ProductMapper.php';
include_once '../logic/Product.php';
include_once '../logic/Cart.php';
include_once '../logic/CartMapper.php';
include_once '../logic/UserMapper.php';

$umapper = new UserMapper();
$mapper = new ProductMapper();
$cmapper = new CartMapper();

$products = $mapper->getAllProducts();
if(isset($_GET['filter'])&&$_GET['filter']=='price-low-to-high'){
    $products = $mapper->getPriceLowToHigh();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='price-high-to-low'){
    $products=$mapper->getPriceHighToLow();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='name-A-Z'){
    $products=$mapper->getNameAtoZ();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='name-Z-A'){
    $products=$mapper->getNameZtoA();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='newest'){
    $products=$mapper->getNewest();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='oldest'){
    $products=$mapper->getOldest();
}
else if(isset($_GET['filter'])&&$_GET['filter']=='all'){
    $products=$mapper->getAllProducts();
}
else{
    $products= $mapper->getAllProducts();
}
?>
<section style="margin-top: 100px;" class="products" id="products">

    <h1 class="heading"> Our <span>Flowers</span> </h1>
 
    <div id="product-filter">
        <form method="GET" action="<?= $_SERVER['PHP_SELF']?>">
            <select name="filter">
                <option value="all">Të gjitha</option>
                <option value="price-low-to-high">Cmimi: poshtë-lart</option>
                <option value="price-high-to-low">Cmimi: lart-poshtë</option>
                <option value="name-A-Z">Emri: A-Z</option>
                <option value="name-Z-A">Emri: Z-A</option>
                <option value="newest">Më të fundit</option>
                <option value="oldest">Më të vjetrat</option>
            </select>
            <input type="submit" value="Filtro">
        </form>
    </div>
        <div class="products-container"> 
            <div class="products-panel wrapper">
                <?php foreach($products as $product){
                    $pid = $product['id'];
                ?>
                <input class="hidden" type="text" name="product_id" value=<?php $pid; ?>> 
                    <div class="square">
                        <div>
                            <a href="<?php echo "view-product.php?pid=$pid" ?>"><img src=<?php echo $product['image']; ?> alt=""></a>
                        </div>
                        <div>
                            <h3><?php echo $product['emri']; ?></h3>
                            <h2><?php echo $product['cmimi']; ?>&euro;</h2>
                            <a class="button" href="<?php echo "view-product.php?pid=$pid" ?>">Shiko Produktin</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </div>
</section>

<?php
include '../components/footer.php';
?>
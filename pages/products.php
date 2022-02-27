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
    <main id="main">
    <div id="product-filter">
        <form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
            <select name="filter">
                <option value="all">Everything</option>
                <option value="price-high-to-low">Cmimi Lart-Ulet</option>
                <option value="price-low-to-high">Cmimi Ulet-Lart</option>
                <option value="name-A-Z">A-Z</option>
                <option value="name-Z-A">Z-A</option>
                <option value="newest">Te Rejat</option>
                <option value="oldest">Aktuale</option>
            </select>
            <input type="submit" value="Filtro">
        </form>
    </div>
    <div class="search" style="margin:auto;max-width:300px; margin-bottom: 30px;">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>

    <div class="box-container">
        <?php foreach($products as $product){$pid=$product['id'];}?>
        <input class="hidden" type="text" name="product_id" value=<?php $pid;?>>
        <div>
            <a href="<?php echo "view-product.php?pid=$pid"?>"><img src="<?php echo $product['image'];?>"></a>
        </div>
        <div>
            <h3><?php echo $product['emri']?></h3>
            <h2><?php echo $product['cmimi']?>&euro;</h2>
            <a class="button" href="<?php echo "view-product.php?pid=$pid"?>">Shiko</a>
        </div>
    </div>
</section>

<?php
include '../components/footer.php';
?>
<?php require __DIR__. "/../Layout/HomeHeader.php";
$config = require 'config.php';
$baseURL = $config['baseURL'];
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// var_dump($productlist)
?>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($productlist as $item) {?>
                    <div class="col mb-5">
                
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?=$baseURL.'Asset/asset/products/'.$item['Image']?>" alt="<?=$item['Image']?>" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $item['Name']?></h5>
                                <!-- Product price-->
                                <?php echo $item['Price']?>
                            </div>
                        </div>
                        
                        <!-- Product actions-->
                        <div class="text-center mb-2"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            <form method="post" action="<?=$baseURL .'cart/add'?>">
                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
                            </form>
                    </div>
                    
                </div>
                <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__. "/../Layout/HomeFooter.php"
?>
        
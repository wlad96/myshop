<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2 class="title text-center">Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="panel-group category-products">
                        <?php foreach ($brands as $brandItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/brand/<?php echo $brandItem['id']; ?>"
                                           class="<?php if ($brandId == $brandItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                               <?php echo $brandItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товара: <?php echo $product['code']; ?></p>
                                <span>
                                    <span><?php echo $product['price']; ?> &#8381;</span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                                <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Производитель:</b> <?php echo Product::getBrand($product['brand_id']); ?></p>
                                <p><b>Размер экрана:</b> <?php echo $product['screen_size']; ?>"</p>
                                <p><b>Частота процессора:</b> <?php echo $product['CPU']; ?> МГц</p>
                                <p><b>Объем ОП:</b> <?php echo $product['RAM']; ?> Гб</p>
                                <p><b>Объем жесткого диска:</b> <?php echo $product['hard_disk']; ?> Гб</p>
                                <p><b>Оптический привод:</b> <?php echo Product::getOpticalDrive($product['drive']); ?></p>
                                <p><b>Время автономной работы:</b> <?php echo $product['battery_life']; ?> ч</p>
                                <p><b>Вес:</b> <?php echo $product['weight']; ?> кг</p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Описание товара</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
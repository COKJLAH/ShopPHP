<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
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
                                <p>Код товару: <?php echo $product['code']; ?></p>
                                <span>
                                    <span><?php echo $product['price']; ?>Грн</span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В кошик
                                    </a>
                                </span>
                                <p><b>Навність:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Реєстрація:</b> <?php echo $product['brand']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h1>Описание товара</h1>
                            <h2>Склад</h2>
                            <br>
                            <?php echo $product['description']; ?>
                            <h2>Особливості щодо застосування</h2>
                            <br>
                            <?php echo $product['description2']; ?>
                            <h2>Передозування</h2>
                            <br>
                            <?php echo $product['description3']; ?>
                            <h2>Умови зберігання</h2>
                            <br>
                            <?php echo $product['description4']; ?>
                            <h2>Термін придатності</h2>
                            <br>
                            <?php echo $product['description6']; ?>
                            <h2>Адреса</h2>
                            <br>
                            <?php echo $product['description5']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
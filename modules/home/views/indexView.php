<?php
get_header();
?>
<?php $cats = db_fetch_array("SELECT * FROM `tbl_product_cats`"); ?>
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <div class="item">
                        <img src="public/images/slider-01.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/images/slider-02.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/images/slider-03.png" alt="">
                    </div>
                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-1.png">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-2.png">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">1900.9999</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-3.png">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-4.png">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-5.png">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <li>
                            <a href="?mod=product&action=detail" title="" class="thumb">
                                <img src="public/images/img-pro-05.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">Laptop Lenovo IdeaPad 120S</a>
                            <div class="price">
                                <span class="new">5.190.000đ</span>
                                <span class="old">6.190.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-pro-08.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">Samsung Galaxy S8 Plus</a>
                            <div class="price">
                                <span class="new">20.490.000đ</span>
                                <span class="old">22.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-pro-07.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">Laptop Acer Aspire ES1</a>
                            <div class="price">
                                <span class="new">6.390.000đ</span>
                                <span class="old">7.390.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-pro-10.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">Sony Xperia XZ Premium</a>
                            <div class="price">
                                <span class="new">17.990.000</span>
                                <span class="old">20.990.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-pro-06.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">Laptop Asus E402NA</a>
                            <div class="price">
                                <span class="new">5.990.000đ</span>
                                <span class="old">6.990.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-pro-09.png">
                            </a>
                            <a href="?page=detail_product" title="" class="product-name">IPhone 7 128GB</a>
                            <div class="price">
                                <span class="new">18.990.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="section" id="list-product-wp">
                <?php foreach ($list_cats as $cat) {
                ?>
                    <?php
                    $cats_childs = data_tree($cats, $cat['id'], 0);
                    $cats_childs[] = $cat;
                    // show_array($cat);
                    $products_cats_child = [];
                    foreach ($list_products as $product) {
                        foreach ($cats_childs as $tem) {
                            if ($product['cat_id'] == $tem['id']) {
                                $products_cats_child[] = $product;
                            }
                        }
                    }
                    // show_array($products_cats_child);
                    ?>
                    <?php if (isset($products_cats_child)) { ?>
                        <div class="section-head">
                            <h3 class="section-title"><?php echo $cat['name'] ?></h3>
                        </div>
                        <div class="section-detail">
                            <ul class="list-item clearfix">
                                <?php foreach ($products_cats_child as $item) { ?>
                                    <li>
                                        <a href="?mod=product&action=detail&id=<?php echo $item['id'] ?>" title="" class="thumb">
                                            <img src="public/images/<?php echo $item['thumbnail'] ?>">
                                        </a>
                                        <a href="?page=detail_product" title="" class="product-name"><?php echo $item['name'] ?></a>
                                        <div class="price">
                                            <span class="new"><?php echo  currency_format($item['price'])  ?></span>
                                            <span class="old"><?php echo  currency_format($item['old_price']) ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <a href="?mod=cart&action=add&id=<?php echo $item['id'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                            <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                <?php
                } ?>
            </div>
        </div>
        <div class="sidebar fl-left">
            <?php
            get_sidebar();
            get_sidebar('product');
            get_template_part('adv');
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>
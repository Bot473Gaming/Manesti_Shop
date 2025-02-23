<div class="" bis_skin_checked="1">
    <div id="shopify-section-template--14169934495857__main" class="shopify-section" bis_skin_checked="1">




        <div class="theme-default-margin search-page" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-lg-8 offset-lg-2 col-md-12" bis_skin_checked="1">


                        <h4 class="text-center page-search-title">Từ khóa tìm kiếm : "<?=esc($keywords)?>"</h4>



                        <div class="page-search-bar" bis_skin_checked="1">
                            <form action="/search" method="get" class="page-search-form" role="search" style="position: relative;">

                                <input type="search" name="q" value="<?=esc($keywords)?>" placeholder="Tìm kiếm trong cửa hàng" class="" aria-label="Tìm kiếm trong cửa hàng" autocomplete="off">
                                <button type="submit" class="page-search-button theme-default-button">
                                    <span class="fallback-text">Tìm kiếm</span>
                                </button>
                                <ul class="search-results home-two" style="position: absolute; left: 0px; top: 38px; display: none;"></ul>
                            </form>
                        </div>


                        <div class="search-list" bis_skin_checked="1">
                            <?php if ($notok):?>
                            <h4>Chúng tôi không tìm thấy sản phẩm nào.</h4>
                            <?php endif?>
                            <?php foreach($product as $pd):?>
                            <div class="row product-layout-list" bis_skin_checked="1">
                                <div class="col-lg-4 col-md-5" bis_skin_checked="1">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap" bis_skin_checked="1">
                                        <div class="product-image" bis_skin_checked="1">
                                            <a href="/products/<?=esc($pd->slug)?>-<?=esc($pd->_id)?>"><img src="/public/image/<?=esc($pd->types[0]->image)?>" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-8 col-md-7" bis_skin_checked="1">
                                    <div class="product_desc" bis_skin_checked="1">
                                        <!-- single-product-wrap start -->
                                        <div class="product-content-list" bis_skin_checked="1">
                                            <h3><a href="/products/<?=esc($pd->slug)?>-<?=esc($pd->_id)?>"><?=esc($pd->name)?></a></h3>
                                            <div class="price-box" bis_skin_checked="1">
                                                 <?php
                                            if ($pd->sale > 0) {
                                                echo '<span id="ComparePrice" class="old-price"> <span class="money">' . $pd->price . '</span></span>';
                                                echo '<span id="ProductPrice" class="new-price"> <span class="money">' . $pd->sale_price . '</span></span>';
                                            } else {
                                                echo '<span id="ProductPrice" class="new-price"> <span class="money">' . $pd->price . '</span></span>';
                                            }
                                            ?>    
                                            
                                            </div>
                                            <div class="product-description" bis_skin_checked="1">
                                                <p><?=esc($pd->sub_desc)?></p>

                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>


                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
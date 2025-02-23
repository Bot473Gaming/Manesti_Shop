        <div class="">
            <div id="shopify-section-template--14169934135409__main" class="shopify-section">
                <!-- content-wraper start -->
                <div class="content-wraper" id="section-template--14169934135409__main">
                    <div class="container">
                        <div class="row flex-row-reverse">
                            <div class="col-lg-9 col-12">
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">
                                    <div class="shop-bar-inner">

                                        <!-- <div class="toolbar-amount">
                                        </div> -->
                                    </div><!-- product-select-box start -->
                                    <div class="product-select-box">
                                        <div class="product-short">
                                            <label for="SortBy">Sắp xếp</label>
                                            <select name="SortBy" id="SortBy">
                                                <option value="def">-- Chọn --</option>
                                                <option value="_id|DESC">Mới nhất</option>
                                                <option value="sold|DESC">Bán chạy</option>
                                                <option value="name|ASC">A - Z</option>
                                                <option value="name|desc">Z - A</option>
                                                <option value="sale_price|ASC">Giá, Thấp đến Cao</option>
                                                <option value="sale_price|DESC">Giá, Cao đến Thấp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- product-select-box end -->
                                </div>
                                <!-- shop-top-bar end -->


                                <script>
                                    Shopify.queryParams = {};
                                    if (location.search.length) {
                                        for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                            aKeyValue = aCouples[i].split('=');
                                            if (aKeyValue.length > 1) {
                                                Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                            }
                                        }
                                    }
                                    $(function() {
                                        const queryString = window.location.search;
                                        const urlParams = new URLSearchParams(queryString);
                                        var sort_by = (!!urlParams.get('sort_by'))?urlParams.get('sort_by'):'def';
                                        if (sort_by !== 'def') {
                                            $('option[value="def"]').attr('hidden', 'hidden');
                                        }
                                        $('#SortBy')
                                            .val(sort_by)
                                            .bind('change', function() {
                                                Shopify.queryParams.sort_by = jQuery(this).val();
                                                location.search = jQuery.param(Shopify.queryParams);
                                            });
                                    });
                                </script>

                                <!-- shop-products-wrapper start -->
                                <div class="shop-products-wrapper">
                                    <div class="tab-content">
                                        <div id="grid-view">
                                            <div class="shop-product-area">
                                                <?php if (count($products) == 0):?>
                                                <h4 class="mt-4">Chúng tôi không tìm thấy sản phẩm nào.</h4>
                                                <?php endif?>
                                                <div class="row">
                                                    <?php foreach ($products as $ix => $pd) : ?>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-30">
                                                            <form class="product-forms" method="post" action="/products/<?= esc($pd->_id) ?>/addtocart" ?>
                                                                <!-- single-product-wrap start -->
                                                                <div class="single-product-wrap ix<?= esc($ix) ?>">

                                                                    <div class="product-image">
                                                                        <a href="/products/<?= esc($pd->slug) ?>-<?= esc($pd->_id) ?>">
                                                                            <img class="popup_cart_image" src="/public/image/<?= esc($pd->types[0]->image) ?>" alt="" onmouseover="this.src = '/public/image/<?= esc($pd->types[1]->image) ?>'" onmouseout="this.src='/public/image/<?= esc($pd->types[0]->image) ?>'">
                                                                        </a>
                                                                        <?php if ($pd->qty == 0) : ?>
                                                                            <span class="soldout-title label-product">Hết gàng</span>
                                                                        <?php elseif ($pd->sale > 0) : ?>
                                                                            <!-- SALE -->
                                                                            <span class="sale-title label-product">Sale</span>
                                                                            <span class="percent-count label-product label-sale">-<?= esc($pd->sale) ?>%</span>
                                                                        <?php endif ?>

                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3 class="popup_cart_title"><a href="/products/<?= esc($pd->slug) ?>-<?= esc($pd->_id) ?>"><?= esc($pd->name) ?></a></h3>
                                                                        <div class="price-box">

                                                                            <?php
                                                                            if ($pd->sale > 0) {
                                                                                echo '<span class="old-price"> <span class="money">' . $pd->price . '</span></span>';
                                                                                echo '<span class="new-price"> <span class="money">' . $pd->sale_price . '</span></span>';
                                                                            } else {
                                                                                echo '<span class="new-price"> <span class="money">' . $pd->price . '</span></span>';
                                                                            }
                                                                            ?>
                                                                            <div class="float-right" style="opacity: .6;">
                                                                                Đã bán:
                                                                                <span class="text-right sold-value'"><?= esc($pd->sold) ?></spanc>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <div class="col pl-0">
                                                                                <?php if (count($pd->size) > 0) : ?>
                                                                                    <div class="d-block">
                                                                                        <div class="swatch clearfix add-to-cart" data-option-index="0">
                                                                                            <?php foreach ($pd->size as $index => $sizes) : ?>
                                                                                                <?php if ($index>=3) {break;}?>
                                                                                                <div data-value="<?= esc($sizes) ?>" class="swatch-element <?= esc($sizes) ?> available">
                                                                                                    <input id="swatch-ixx<?= esc($ix) ?>-<?= esc($sizes) ?>" type="radio" name="size" value="<?= esc($sizes) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                                                    <label for="swatch-ixx<?= esc($ix) ?>-<?= esc($sizes) ?>">
                                                                                                        <?= esc($sizes) ?>
                                                                                                    </label>
                                                                                                </div>
                                                                                            <?php endforeach ?>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif ?>
                                                                                
                                                                                <?php if (count($pd->color) > 0) : ?>
                                                                                <?php if (!!$pd->colorMode):?>
                                                                                    <div class="d-block">
                                                                                        <div class="swatch clearfix add-to-cart" data-option-index="0">
                                                                                            <?php foreach ($pd->color as $index => $color) : ?>
                                                                                            <?php if ($index>=3) {break;}?>
                                                                                                <div data-value="<?= esc(str_replace(' ', '-', $color)) ?>" class="swatch-element <?= esc(str_replace(' ', '-', $color)) ?> available">
                                                                                                    <input id="swatch-ixx<?= esc($ix) ?>-<?= esc(str_replace(' ', '-', $color)) ?>" type="radio" name="color" value="<?= esc($color) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                                                    <label for="swatch-ixx<?= esc($ix) ?>-<?= esc(str_replace(' ', '-', $color)) ?>">
                                                                                                        <?= esc($color) ?>
                                                                                                    </label>
                                                                                                </div>
                                                                                            <?php endforeach ?>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php else:?>
                                                                                    <div class="d-block py-1">
                                                                                        <div class="swatch clearfix add-to-cart color ixx<?= esc($ix) ?>">
                                                                                            <?php foreach ($pd->color as $index => $color) : ?>
                                                                                                <?php if ($index>=3) {break;}?>
                                                                                                <div data-value="<?= esc($color) ?>" class="swatch-element ixx<?= esc($ix) ?> color <?= esc($color) ?> available">
                                                                                                    <input id="swatch-ixx<?= esc($ix) ?>-<?= esc($color) ?>" type="radio" name="color" value="<?= esc($color) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                                                    <label for="swatch-ixx<?= esc($ix) ?>-<?= esc($color) ?>" style="background-color: <?= esc($color) ?>; ">
                                                                                                    </label>
                                                                                                </div>
                                                                                            <?php endforeach ?>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif?>
                                                                            <?php endif ?>
                                                                                
                                                                            </div>
                                                                            <input hidden class="classify-data" type="text" value="<?=esc($pd->classify)?>">
                                                                            <?php if ($pd->qty == 0) : ?>
                                                                                <button class="cart-disable add-to-cart">
                                                                                    <span class="cart-text"><i class="fas fa-shopping-cart"></i>Hết hàng</span>
                                                                                </button>
                                                                            <?php else : ?>
                                                                                <input hidden type="number" name="qty" value="1">
                                                                                <button type="submit" class="add-to-cart">
                                                                                    <span>
                                                                                        <span class="cart-title"><i class="fas fa-cart-plus" style="font-size: 18px;"></i></span>
                                                                                    </span>
                                                                                </button>
                                                                            <?php endif ?>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    <?php endforeach ?>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- paginatoin-area start -->
                                        <div class="paginatoin-area">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="theme-default-pagination">
                                                        <!-- <nav class="pagination"> -->
                                                        <?= $pager->links() ?>
                                                        <!-- </nav> -->
                                                    </div>

                                                    <script>
                                                        $(".theme-default-pagination .disabled a").removeAttr("href");
                                                        $(".theme-default-pagination li.active a").removeAttr("href");
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- paginatoin-area end -->
                                    </div>
                                </div>
                                <!-- shop-products-wrapper end -->
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="shop-sidebar storefront-filter">
                                    <form class="filter-form" name="testform" id="myform">
                                        <!--sidebar-categores-box start  -->

                                        <!--sidebar-categores-box end  -->
                                        <!--sidebar-categores-box start  -->
                                        <div class="sidebar-categores-box sidebar-widget">
                                            <div class="filter-sub-area">
                                                <h5 class="filter-sub-titel">Lọc</h5>

                                                <input class="theme-default-button" type="submit" value="Lọc">
                                            </div>
                                        </div>
                                        <div class="sidebar-categores-box sidebar-widget">
                                            <!-- filter-sub-area start -->
                                            <div class="filter-sub-area">
                                                <h5 class="filter-sub-titel">Giá</h5>
                                                <div class="sidebar-list-style">
                                                    <div class="checkbox-container categories-list sidebar-price-filter">
                                                        <div class="filter-range-from">
                                                            <input name="minPrice" id="Filter-Price-2" type="number" placeholder="0" min="0" max="1000000000" step="1000" value="<?=esc($minPrice)?>">
                                                        </div>
                                                        <span style="align-self: center;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                        <div class="filter-price-range-to">
                                                            <input name="maxPrice" id="Filter-Price-2" type="number" placeholder="100000000" min="1000" max="100000000" step="1000" value="<?=esc($maxPrice)?>">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- filter-sub-area end -->
                                        </div>
                                        <!--sidebar-categores-box start  -->
                                        <div class="sidebar-categores-box sidebar-widget">
                                            <!-- filter-sub-area start -->
                                            <div class="filter-sub-area">
                                                <h5 class="filter-sub-titel">Màu</h5>
                                                <div class="size-checkbox">
                                                    <ul>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="black" id="Filter-color-1" <?php if (in_array('black', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-1" style="background-color: black; " title="Đen"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="blue" id="Filter-color-2" <?php if (in_array('blue', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-2" style="background-color: blue; " title="Xanh lam"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="gold" id="Filter-color-3" <?php if (in_array('gold', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-3" style="background-color: gold; "title="Vàng (gold)"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="gray" id="Filter-color-4" <?php if (in_array('gray', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-4" style="background-color: gray; "title="Xám"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="green" id="Filter-color-5" <?php if (in_array('green', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-5" style="background-color: green; " title="Xanh lục"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="magenta" id="Filter-color-6" <?php if (in_array('magenta', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-6" style="background-color: magenta; "title="Hồng sẫm"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="orange" id="Filter-color-9" <?php if (in_array('orange', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-9" style="background-color: orange; "title="Cam"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="pink" id="Filter-color-10" <?php if (in_array('pink', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-10" style="background-color: pink; " title="Hồng"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="purple" id="Filter-color-11" <?php if (in_array('purple', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-11" style="background-color: purple; " title="Tím"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="red" id="Filter-color-12" <?php if (in_array('red', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-12" style="background-color: red; " title="Đỏ"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="violet" id="Filter-color-13" <?php if (in_array('violet', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-13" style="background-color: violet; " title="Violet"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color white">
                                                            <input type="checkbox" name="color[]" value="white" id="Filter-color-14" <?php if (in_array('white', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-14" style="background-color: white; " title="Trắng"></label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element color">
                                                            <input type="checkbox" name="color[]" value="yellow" id="Filter-color-15" <?php if (in_array('yellow', $colors)) {echo "checked";} ?>>
                                                            <label for="Filter-color-15" style="background-color: yellow; " title="Vàng"></label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- filter-sub-area end -->
                                        </div>
                                        <!--sidebar-categores-box start  -->
                                        <div class="sidebar-categores-box sidebar-widget">
                                            <!-- filter-sub-area start -->
                                            <div class="filter-sub-area">
                                                <h5 class="filter-sub-titel">Size</h5>
                                                <div class="size-checkbox">
                                                    <ul>
                                                        <li class="form-check form-check-inline swatch-element size">
                                                            <input type="checkbox" name="size[]" value="s" id="Filter-size-1" <?php if (in_array('s', $size)) {echo "checked";} ?>>
                                                            <label for="Filter-size-1">s</label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element size">
                                                            <input type="checkbox" name="size[]" value="m" id="Filter-size-2" <?php if (in_array('m', $size)) {echo "checked";} ?>>
                                                            <label for="Filter-size-2">m</label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element size">
                                                            <input type="checkbox" name="size[]" value="l" id="Filter-size-3" <?php if (in_array('l', $size)) {echo "checked";} ?>>
                                                            <label for="Filter-size-3">l</label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element size">
                                                            <input type="checkbox" name="size[]" value="xl" id="Filter-size-4" <?php if (in_array('xl', $size)) {echo "checked";} ?>>
                                                            <label for="Filter-size-4">xl</label>
                                                        </li>
                                                        <li class="form-check form-check-inline swatch-element size">
                                                            <input type="checkbox" name="size[]" value="xxl" id="Filter-size-5" <?php if (in_array('xxl', $size)) {echo "checked";} ?>>
                                                            <label for="Filter-size-5">xxl</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- filter-sub-area end -->
                                        </div>
                                        <!--sidebar-categores-box end  -->
                                    </form>
                                </div>


                                <script>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wraper end -->

                <style>
                    .shop-sidebar {
                        position: sticky;
                        top: 84px;
                    }
                    #section-template--14169934135409__main {
                        padding-top: 100px;
                        padding-bottom: 100px;
                    }

                    @media (min-width: 768px) and (max-width: 991px) {
                        #section-template--14169934135409__main {
                            padding-top: 80px;
                            padding-bottom: 80px;
                        }
                    }

                    @media (max-width: 767px) {
                        #section-template--14169934135409__main {
                            padding-top: 60px;
                            padding-bottom: 60px;
                        }
                    }
                </style>


            </div>
        </div>
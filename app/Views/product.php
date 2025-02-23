<div class="">
    <div id="shopify-section-template--14169934463089__main" class="shopify-section">
        <!-- content-wraper start -->
        <div class="content-wraper" id="section-template--14169934463089__main">
            <div class="container">
                <div class="row single-product-area">
                    <div class="col-lg-5 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left product-image single-product-wrap">
                            <div class="product-details-images slider-lg-image-1 " id="ProductPhoto">

                                <div class="lg-image"><img id="ProductPhotoImg" class=" product-zoom  product_variant_image" data-image-id="" alt="<?= esc($product->name) ?>" data-zoom-image="/public/image/<?= esc($product->types[0]->image) ?>" src="/public/image/<?= esc($product->types[0]->image) ?>">
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1" id="ProductThumbs">
                                <?php foreach ($product->types as $index => $pd) : ?>
                                    <div class="sm-image">
                                        <a class="product-single__thumbnail <?php if ($index == 0) {
                                                                                echo "active";
                                                                            } ?>" data-image="/public/image/<?= esc($pd->image) ?>" data-zoom-image="/public/image/<?= esc($pd->image) ?>" <?php if (!!$pd->cl) {
                                                                                                                                                                                                                                            echo 'data-color="' . str_replace(' ', '-', $pd->cl) . '"';
                                                                                                                                                                                                                                        } ?>>
                                            <img src="/public/image/<?= esc($pd->image) ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>

                            <?php if ($product->sale > 0) : ?>
                                <span class="sale-title label-product">Sale</span>


                                <span class="percent-count label-product label-sale">-<?= esc($product->sale) ?>%</span>
                            <?php endif ?>



                        </div>
                        <!--// Product Details Left -->
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <form class="product-forms" method="post" action="/products/<?= esc($product->_id) ?>/addtocart" id="AddToCartForm" accept-charset="UTF-8" >
                            <div class="product-details-view-content">
                                <div class="product-info">
                                    <h4 id="popup_cart_title m-0" style="margin: 0;"><?= esc($product->name) ?></h4>
                                    <div hidden class="product-sku">SKU: <span class="variant-sku"></span></div>
                                    <div class="d-inline-block">
                                        <div class="product-variant-sold d-inline-block">
                                            <span class="sold-title">Đã bán: </span> <span class="sold-value'"><?= esc($product->sold) ?></span>
                                        </div>
    
                                        <div class="product-variant-inventory d-inline-block ml-3 mb-0">
                                            <span class="inventory-title">Kho: </span> <span class="variant-inventory"></span>
                                        </div>
                                    </div>
                                    <div class="single-product-price-2">
                                        <div class="price-box">
                                            <?php
                                            if ($product->sale > 0) {
                                                echo '<span id="ComparePrice" class="old-price"> <span class="money">' . $product->price . '</span></span>';
                                                echo '<span id="ProductPrice" class="new-price"> <span class="money">' . $product->sale_price . '</span></span>';
                                            } else {
                                                echo '<span id="ProductPrice" class="new-price"> <span class="money">' . $product->price . '</span></span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="product-description" bis_skin_checked="1" >
                                        <span id="show-hide-description" <?php if (strlen($product->sub_desc)==0) {echo "hidden";}?>>Xem mô tả</span>
                                        <span class="product-description-content" style="white-space: pre-wrap;overflow-wrap: anywhere;display:none;"><?= esc($product->sub_desc) ?></span>
                                    </div>
                                    <script>

                                    </script>
                                    <div class="product-variant-option">

                                        <style>
                                            #show-hide-description {
                                                cursor: pointer;
                                                font-weight: bold;
                                                color: #7f8f1d;
                                            }
                                            #show-hide-description:hover {
                                                    opacity: 0.7;
                                            }
                                            .product-description.active .product-description-content {
                                                display:block !important;
                                            }
                                            label[for="product-select-option-0"] {
                                                display: none;
                                            }

                                            #product-select-option-0 {
                                                display: none;
                                            }

                                            #product-select-option-0+.custom-style-select-box {
                                                display: none !important;
                                            }
                                        </style>
                                        <script>
                                            $("#show-hide-description").click(e => {
                                                if ($(".product-description").hasClass('active')) {
                                                    $("#show-hide-description").text('Xem mô tả');
                                                } else 
                                                    $("#show-hide-description").text('Ẩn mô tả');
                                                $(".product-description").toggleClass('active')
                                            })
                                            $(window).load(function() {
                                                $('.selector-wrapper:eq(0)').hide();
                                            });
                                        </script>

                                        <div hidden class="swatch-element">
                                            <input hidden type="radio" name="size" value="non"/>
                                        </div>
                                        <?php if (count($product->size) > 0) : ?>
                                            <div class="swatch clearfix size row" data-option-index="0">
                                                <div class="header col-ms-4 m-0 pl-3">Size : </div>
                                                <div class="col">
                                                    <?php foreach ($product->size as $index => $size) : ?>
                                                        <div class="swatch-element size <?= esc($size) ?>">
                                                            <input id="swatch-0-<?= esc($size) ?>" type="radio" name="size" value="<?= esc($size) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                            <label for="swatch-0-<?= esc($size) ?>">
                                                                <?= esc($size) ?>
                                                            </label>
                                                        </div>
                                                    <?php endforeach ?>    
                                                </div>
                                            </div>
                                        <?php endif ?>


                                        <style>
                                            label[for="product-select-option-1"] {
                                                display: none;
                                            }

                                            #product-select-option-1 {
                                                display: none;
                                            }

                                            #product-select-option-1+.custom-style-select-box {
                                                display: none !important;
                                            }
                                        </style>
                                        <script>
                                            $(window).load(function() {
                                                $('.selector-wrapper:eq(1)').hide();
                                            });
                                        </script>

                                    
                                        <?php if (count($product->color) > 0) : ?>
                                            <?php if (!!$product->colorMode):?>
                                            <div class="swatch clearfix size row" data-option-index="0">
                                                <div class="header col-ms-4 m-0 pl-3">Màu sắc : </div>
                                                <div class="col">
                                                    <?php foreach ($product->color as $index => $color) : ?>
                                                        <div class="swatch-element size <?= esc(str_replace(' ', '-', $color)) ?>">
                                                            <input id="swatch-0-<?= esc(str_replace(' ', '-', $color)) ?>" type="radio" name="color" value="<?= esc($color) ?>" data-link="<?= esc(str_replace(' ', '-', $color)) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                            <label for="swatch-0-<?= esc(str_replace(' ', '-', $color)) ?>">
                                                                <?= esc($color) ?>
                                                            </label>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <?php else:?>
                                            <div class="swatch clearfix color row" data-option-index="1">
                                            <div class="header col-ms-4 m-0 pl-3">Màu sắc : </div>
                                                <div class="col">
                                                    <?php foreach ($product->color as $index => $color) : ?>
                                                        <div class="swatch-element color <?= esc($color) ?>">
                                                            <input id="swatch-1-<?= esc($color) ?>" type="radio" name="color" value="<?= esc($color) ?>" data-link="<?= esc(str_replace(' ', '-', $color)) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                            <label for="swatch-1-<?= esc($color) ?>" style="background-color: <?= esc($color) ?>; ">
                                                            </label>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <?php endif?>
                                        <?php endif ?>

                                        <input hidden class="classify-data" type="text" value="<?=esc($product->classify)?>">
                                        <script>
                                            jQuery(function() {
                                                jQuery('.swatch.color :radio,.swatch.size :radio').change(function() {
                                                    var optionValue = jQuery(this).attr('data-link');
                                                    if (!!$('.product-single__thumbnail[data-color=' + optionValue + ']')) {
                                                        $('.product-single__thumbnail.active').removeClass('active');
                                                        $('.product-single__thumbnail[data-color=' + optionValue + ']').addClass('active');
                                                        $('.product-single__thumbnail.active').click()
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <style>
                                        .product-variant-option .selector-wrapper {
                                            display: none;
                                        }
                                    </style>


                                    <div class="single-add-to-cart">
                                        <div class="cart-quantity">
                                            <div class="product-quantity-action quantity-selector quantity">

                                                <label>Số lượng</label>

                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" value="1" name="qty">
                                                </div>
                                            </div>
                                            <div class="product-cart-action">

                                                <?php if ($product->qty > 0) : ?>
                                                    <button type="submit" class="add-to-cart" id="AddToCart">
                                                        <span>
                                                            <span class="cart-title" id="AddToCartText">Thêm vào giỏ hàng</span>
                                                        </span>
                                                    </button>

                                                    <button id="BuyNow" type="button" class="add-to-cart buy-now">
                                                        <span>
                                                            <span class="cart-title">Mua ngay</span>
                                                        </span>
                                                    </button>
                                                <?php else : ?>
                                                    <button type="button" class="add-to-cart" id="AddToCart" disabled>
                                                        <span>
                                                            <span class="cart-title" disabled>Đã hết hàng</span>
                                                        </span>
                                                    </button>
                                                <?php endif ?>
                                                <script>
                                                
                                                    $('#BuyNow').click(function(e) {
                                                        e.preventDefault();
                                                        var form = this.parentElement;
                                                        while (!form.action) {
                                                            form = form.parentElement;
                                                        }
                                                        var color;
                                                        try {
                                                            color = form.querySelector('input[name="color"]:checked').value
                                                        } catch {
                                                            color = null;
                                                        }
                                                        var size;
                                                        try {
                                                            size = form.querySelector('input[name="size"]:checked').value;
                                                        } catch {
                                                            size = null;
                                                        }
                                                        var qty = form.querySelector('input[name="qty"]').value;
                                                        // console.log(color, size, qty, form.action);
                                                        var id = location.pathname.split('-').pop();
                                                        $.ajax({
                                                            type: "GET",
                                                            url: '/checkout',
                                                            data: {
                                                                color,
                                                                size,
                                                                qty,
                                                                id,
                                                            },
                                                            cache: false,
                                                            success: function(data) {
                                                                // data = JSON.parse(data);
                                                                // console.log(location.protocol + '//' + location.host + '/checkout/' + data);
                                                                location.href = location.protocol + '//' + location.host + '/checkout/' + data;

                                                            },
                                                            error: function(xhr, status, error) {
                                                                console.error(xhr);
                                                                $('#modalAddToCartError').modal('show');
                                                            }
                                                        });
                                                    })
                                                </script>


                                            </div>


                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->




        <style>
            #section-template--14169934463089__main {
                padding-top: 100px;
                padding-bottom: 100px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14169934463089__main {
                    padding-top: 80px;
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14169934463089__main {
                    padding-top: 60px;
                    padding-bottom: 60px;
                }
            }
        </style>



        <script src="/public/cdn.shopify.com/s/files/1/0069/3177/5601/t/13/assets/jquery.elevateZoom-3.0.8.min6979.js?v=123299089282303306721629263877"></script>
        <link href="/public/cdn.shopify.com/s/files/1/0069/3177/5601/t/13/assets/jquery.fancybox32d1.css?v=95878193068690839161629263878" rel="stylesheet" type="text/css" media="all" />
        <script src="/public/cdn.shopify.com/s/files/1/0069/3177/5601/t/13/assets/jquery.fancybox.minf076.js?v=52186688543886745331629263878"></script>

        <script>
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
        </script>
        <script>
            // Preorder
            
            function productZoom() {
                $(".product-zoom").elevateZoom({
                    gallery: 'ProductThumbs',
                    galleryActiveClass: "active",
                    zoomType: "inner",
                    cursor: "crosshair"
                });
                $(".product-zoom").on("click", function(e) {
                    var ez = $('.product-zoom').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });

            };

            function productZoomDisable() {
                if ($(window).width() < 767) {
                    $('.zoomContainer').remove();
                    $(".product-zoom").removeData('elevateZoom');
                    $(".product-zoom").removeData('zoomImage');
                } else {
                        productZoom();
                }
            };

            productZoom();
            $(window).resize(function() {
                productZoom();
                
            });
            /*--
                    Deals product active Slider
                -----------------------------------*/
            $('.product-single__thumbnail').on('mouseover', e => {
                var val = $(e.currentTarget);
                if (!val.hasClass('active')) {
                     $('.product-single__thumbnail.active').removeClass('active');
                     val.addClass('active');
                     val.click();
                }
            })
            $('#section-template--14169934463089__main .product-details-thumbs').slick({
                accessibility: false,
                dots: false,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: false,
                prevArrow: true,
                nextArrow: true,
                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                ]
            });
        </script>



        </script>
    </div>
    <div id="shopify-section-template--14169934463089__single-product-tab" class="shopify-section">
        <!-- content-wraper start -->
        <div class="content-wraper" id="section-template--14169934463089__single-product-tab">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-tab">
                            <ul role="tablist" class="mb--50 nav">

                                <li>
                                    <a href="#pro-dec" data-toggle="tab" role="tab" class="active" aria-selected="true">
                                        Mô tả sản phẩm
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#pro-dec-detail" data-toggle="tab" role="tab" class="" aria-selected="true">
                                        Chi tiết sản phẩm
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#pro-size" data-toggle="tab" role="tab" class="" aria-selected="true">
                                        Bảng size
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_details_tab_content tab-content">
                            
                            <div class="product_tab_content tab-pane active" id="pro-dec" role="tabpanel">
                                <div class="product_description_wrap">
                                    <?php echo $product->description; ?>
                                    <!--<span style="white-space: pre-wrap;overflow-wrap: anywhere;"></span>-->
                                </div>
                            </div>
                            <div class="product_tab_content tab-pane" id="pro-dec-detail" role="tabpanel">
                                <table class="table table-sm">
                                    <!---->
                                    <?php foreach(json_decode($product->desc_detail) as $dt):?>
                                            <tr>
                                                <td class="input-group-sm title" style="width:128px"><strong><?=esc($dt->name)?></strong></td>
                                                <td class="input-group-sm" style=""><?=esc($dt->ppt)?></td>
                                            </tr>
                                    <?php endforeach?>
                                    <!---->
                                </table>
                            </div>
                            <!-- End Single Content -->
                            <div class="product_tab_content tab-pane" id="pro-size" role="tabpanel">
                                <div class="text-center">
                                    <?php if ($product->size_chart != ''):?>
                                    <img src="<?= esc($product->size_chart)?>" alt="" style="max-height:500px">
                                    <?php else:?>
                                    <h4>Sản phẩm chưa có bảng size</h4>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->




        <style>
            table td {
                border: none;
            }
            tr:first-child > td {
                border: none;
            }
            td.title strong {
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
            }
            #section-template--14169934463089__single-product-tab .product-details-tab .nav {
                border-bottom: 1px solid #ddd;
            }


            #section-template--14169934463089__single-product-tab .product-details-tab .nav li a {
                color: #383838;
            }

            #section-template--14169934463089__single-product-tab .product-details-tab .nav li a:before {
                background: #8a8f6a;
            }

            #section-template--14169934463089__single-product-tab .product-details-tab .nav li a:hover {
                color: #8a8f6a;
            }

            #section-template--14169934463089__single-product-tab .product-details-tab .nav li a.active {
                color: #8a8f6a;
            }



            #section-template--14169934463089__single-product-tab {
                padding-top: 0px;
                padding-bottom: 100px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14169934463089__single-product-tab {
                    padding-top: 0px;
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14169934463089__single-product-tab {
                    padding-top: 0px;
                    padding-bottom: 60px;
                }
            }
        </style>

    </div>
    <div id="shopify-section-template--14169934463089__related-product" class="shopify-section">
        <!-- PRODUCT SECTION START -->






        <!-- Product Area Start -->
        <div class="product-area" id="section-template--14169934463089__related-product">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title start -->
                        <div class="section-title section-bg-2 text-center">
                            <h2>Sản phẩm tương tự</h2>
                            <!-- <p>Most Trendy 2018 Clother</p> -->
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>

                <!-- product-wrapper start -->
                <div class="product-wrapper">
                    <div class="row product-slider">

                        <?php foreach ($productsOld as $ix => $pd) : ?>
                            <div class="col-12">
                                <form class="product-forms" method="post" action="/products/<?= esc($pd->_id) ?>/addtocart" ?>
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap ix<?= esc($ix) ?>">

                                        <div class="product-image">
                                            <a href="/products/<?= esc($pd->slug) ?>-<?= esc($pd->_id) ?>">
                                                <img class="popup_cart_image" src="/public/image/<?= esc($pd->types[0]->image) ?>" alt="" onmouseover="this.src = '/public/image/<?= esc($pd->types[1]->image) ?>'" onmouseout="this.src='/public/image/<?= esc($pd->types[0]->image) ?>'">
                                            </a>
                                            <?php if ($pd->qty == 0) : ?>
                                                <span class="soldout-title label-product">Hết Hàng</span>
                                            <?php elseif ($pd->sale > 0) : ?>
                                                <!-- SALE -->
                                                <span class="sale-title label-product">Sale</span>
                                                <span class="percent-count label-product label-sale">-<?= esc($pd->sale) ?>%</span>
                                            <?php endif ?>

                                            <!-- <div class="quick_view">
                                                <a class="quick-view-btn" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview(<?= esc($pd->name) ?>)"><i class="fa fa-search"></i>
                                                </a>
                                            </div> -->


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
                                                            <div class="swatch clearfix add-to-cart ixd<?= esc($ix) ?>">
                                                                <?php foreach ($pd->size as $index => $size) : ?>
                                                                <?php if ($index>=3) {break;}?>
                                                                    <div data-value="<?= esc($size) ?>" class="swatch-element ixd<?= esc($ix) ?> <?= esc($size) ?>">
                                                                        <input id="swatch-ixd<?= esc($ix) ?>-<?= esc($size) ?>" type="radio" name="size" value="<?= esc($size) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                        <label for="swatch-ixd<?= esc($ix) ?>-<?= esc($size) ?>">
                                                                            <?= esc($size) ?>
                                                                        </label>
                                                                    </div>
                                                                <?php endforeach ?>
                                                            </div>
                                                        </div>
                                                    <?php endif ?>
                                                    

                                                    <?php if (count($pd->color) > 0) : ?>
                                                        <?php if (!!$pd->colorMode):?>
                                                            <div class="d-block">
                                                                <div class="swatch clearfix add-to-cart color" data-option-index="0">
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
                                                    <button class="cart-disable add-to-cart align-right">
                                                        <span class="cart-text"><i class="fas fa-shopping-cart"></i>Hết Hàng</span>
                                                    </button>
                                                <?php else : ?>
                                                    <input hidden type="number" name="qty" value="1">
                                                    <button type="submit" class="add-to-cart  align-right">
                                                        <span>
                                                            <span class="cart-title"><i class="fas fa-cart-plus" style="font-size: 18px;"></i></span>
                                                        </span>
                                                    </button>
                                                <?php endif ?>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- single-product-wrap end -->
                            </div>
                        <?php endforeach ?>






                    </div>
                </div>
                <!-- product-wrapper end -->
            </div>
        </div>
        <!-- Product Area End -->



        <style>
            #section-template--14169934463089__related-product .section-title h2 {
                color: #383838;
            }

            #section-template--14169934463089__related-product .section-title p {
                color: #191919;
            }



            #section-template--14169934463089__related-product .section-title {
                background: url(/public/cdn.shopify.com/s/files/1/0069/3177/5601/files/title-bgde4b.png?v=1540478728);
                background-repeat: no-repeat;
                background-position: bottom center;
                margin-bottom: 20px;
                padding-bottom: 60px;
            }


            #section-template--14169934463089__related-product {
                padding-top: 0px;
                padding-bottom: 100px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14169934463089__related-product {
                    padding-top: 0px;
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14169934463089__related-product {
                    padding-top: 0px;
                    padding-bottom: 60px;
                }
            }
        </style>


        <script>
            /*--
        Product Slider
    -----------------------------------*/
            $('#section-template--14169934463089__related-product .product-slider').slick({
                dots: false,

                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                prevArrow: true,
                nextArrow: true,
                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        </script>






    </div>
    <div id="shopify-section-template--14169934463089__custom-collection" class="shopify-section">
        <!-- Product Area Start -->
        <div class="product-area" id="section-template--14169934463089__custom-collection">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title start -->
                        <div class="section-title section-bg-2 text-center">
                            <h2>Sản phẩm bán chạy</h2>
                            <!-- <p>Most Trendy 2018 Clother</p> -->
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>

                <!-- product-wrapper start -->
                <div class="product-wrapper">
                    <div class="row product-slider">
                        <?php foreach ($productsBest as $ix => $pd) : ?>
                            <div class="col-12">
                                <form class="product-forms" method="post" action="/products/<?= esc($pd->_id) ?>/addtocart" ?>
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap ixx<?= esc($ix) ?>">

                                        <div class="product-image">
                                            <a href="/products/<?= esc($pd->slug) ?>-<?= esc($pd->_id) ?>">
                                                <img class="popup_cart_image" src="/public/image/<?= esc($pd->types[0]->image) ?>" alt="" onmouseover="this.src = '/public/image/<?= esc($pd->types[1]->image) ?>'" onmouseout="this.src='/public/image/<?= esc($pd->types[0]->image) ?>'">
                                            </a>
                                            <?php if ($pd->qty == 0) : ?>
                                                <span class="soldout-title label-product">Hết Hàng</span>
                                            <?php elseif ($pd->sale > 0) : ?>
                                                <!-- SALE -->
                                                <span class="sale-title label-product">Sale</span>
                                                <span class="percent-count label-product label-sale">-<?= esc($pd->sale) ?>%</span>
                                            <?php endif ?>

                                            <!-- <div class="quick_view">
                                                <a class="quick-view-btn" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview(<?= esc($pd->name) ?>)"><i class="fa fa-search"></i>
                                                </a>
                                            </div> -->


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
                                                                <?php foreach ($pd->size as $index => $size) : ?>
                                                                <?php if ($index>=3) {break;}?>
                                                                    <div data-value="<?= esc($size) ?>" class="swatch-element <?= esc($size) ?> available">
                                                                        <input id="swatch-ixx<?= esc($ix) ?>-<?= esc($size) ?>" type="radio" name="size" value="<?= esc($size) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                        <label for="swatch-ixx<?= esc($ix) ?>-<?= esc($size) ?>">
                                                                            <?= esc($size) ?>
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
                                                        <span class="cart-text"><i class="fas fa-shopping-cart"></i>Hết Hàng</span>
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
                                <!-- single-product-wrap end -->
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- product-wrapper end -->
            </div>
        </div>
        <!-- Product Area End -->




        <style>
            #section-template--14169934463089__custom-collection .section-title h2 {
                color: #383838;
            }

            #section-template--14169934463089__custom-collection .section-title p {
                color: #191919;
            }



            #section-template--14169934463089__custom-collection .section-title {
                background: url(/public/cdn.shopify.com/s/files/1/0069/3177/5601/files/title-bgde4b.png?v=1540478728);
                background-repeat: no-repeat;
                background-position: bottom center;
                margin-bottom: 20px;
                padding-bottom: 60px;
            }


            #section-template--14169934463089__custom-collection {
                padding-top: 0px;
                padding-bottom: 100px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14169934463089__custom-collection {
                    padding-top: 0px;
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14169934463089__custom-collection {
                    padding-top: 0px;
                    padding-bottom: 60px;
                }
            }
        </style>


        <script>
            /*--
        Product Slider
    -----------------------------------*/
            $('#section-template--14169934463089__custom-collection .product-slider').slick({
                dots: false,

                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                prevArrow: true,
                nextArrow: true,
                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        </script>






    </div>
</div>
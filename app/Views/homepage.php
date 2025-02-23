                <div class="">
                    <div id="shopify-section-template--14169934200945__162919577262768072" class="shopify-section">
                        <!-- Hero Slider start -->
                        <div class="hero-slider hero-slider-one" id="section-template--14169934200945__162919577262768072">
                            <?php if (is_array($banners) || is_object($banners)):?>
                            <?php foreach ($banners as $banner) : ?>
                                <div class="single-slide" style="background-image: url(/public/image/<?= esc($banner->image) ?>)">
                                </div>
                            <?php endforeach ?>
                            <?php endif?>

                        </div>
                        <!-- Hero Slider end -->
                        <style>
                            #block-6d17ad13-94ed-4993-8f78-fb4fdf7de818 .slider-text-info h1 {
                                color: #ffffff;
                            }

                            #block-6d17ad13-94ed-4993-8f78-fb4fdf7de818 .slider-text-info p {
                                color: #ffffff;
                            }

                            #block-6d17ad13-94ed-4993-8f78-fb4fdf7de818 .slider-text-info .slider-btn {
                                background: rgba(0, 0, 0, 0);
                                color: #ffffff;
                                border: 2px solid #ffffff;
                            }


                            #block-6d17ad13-94ed-4993-8f78-fb4fdf7de818 .slider-text-info .slider-btn:hover {
                                background: #ffffff;
                                color: #000000;
                                border: 2px solid #ffffff;
                            }

                            #block-84a1f417-b6ca-4da5-b499-34e836e7524e .slider-text-info h1 {
                                color: #383838;
                            }

                            #block-84a1f417-b6ca-4da5-b499-34e836e7524e .slider-text-info p {
                                color: #191919;
                            }

                            #block-84a1f417-b6ca-4da5-b499-34e836e7524e .slider-text-info .slider-btn {
                                background: #ffffff;
                                color: #000000;
                                border: 2px solid #ffffff;
                            }


                            #block-84a1f417-b6ca-4da5-b499-34e836e7524e .slider-text-info .slider-btn:hover {
                                background: #ffffff;
                                color: #000000;
                                border: 2px solid #ffffff;
                            }






                            #section-template--14169934200945__162919577262768072.hero-slider .slick-arrow {
                                background-color: #000000;
                                color: #ffffff;
                            }

                            #section-template--14169934200945__162919577262768072.hero-slider .slick-arrow:hover {
                                background-color: #8a8f6a;
                                color: #ffffff;
                            }
                        </style>

                        <script>
                            $('#section-template--14169934200945__162919577262768072.hero-slider').slick({
                                accessibility: false,

                                dots: false,
                                infinite: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                autoplay: true,
                                prevArrow: true,
                                nextArrow: true,
                                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                                responsive: [{
                                        breakpoint: 991,
                                        settings: {
                                            slidesToShow: 1,
                                        }
                                    },
                                    {
                                        breakpoint: 767,
                                        settings: {
                                            slidesToShow: 1,
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
                    <div id="shopify-section-template--14169934200945__16291957581118cd7d" class="shopify-section">
                        <!-- Banner area start -->
                        <div class="banner-area" id="section-template--14169934200945__16291957581118cd7d">
                            <div class="container">
                                <div class="row " style="justify-content: center;">


                                    <?php for($i = 0;$i<3;$i++):?>
                                    <?php if ($subbanner[$i]->image):?>
                                    <div class="col-lg-4 col-md-4">
                                        <!-- single-banner start -->
                                        <div class="single-banner mt--30">
                                            <a href="<?= esc(($subbanner[$i]->url != '')?$subbanner[$i]->url:'collections/all')?>">
                                                <img src="/public/image/<?= esc($subbanner[$i]->image)?>" alt="">
                                            </a>
                                        </div>
                                        <!-- single-banner end -->
                                    </div>
                                    <?php endif?>
                                <?php endfor?>

                                </div>
                            </div>
                        </div>
                        <!-- Banner area end -->
                        <style data-shopify>
                            #section-template--14169934200945__16291957581118cd7d {
                                padding-top: 0px;
                                padding-bottom: 30px;
                            }

                            @media (min-width: 768px) and (max-width: 991px) {
                                #section-template--14169934200945__16291957581118cd7d {
                                    padding-top: 0px;
                                    padding-bottom: 30px;
                                }
                            }

                            @media (max-width: 767px) {
                                #section-template--14169934200945__16291957581118cd7d {
                                    padding-top: 0px;
                                    padding-bottom: 30px;
                                }
                            }
                        </style>
                        <style>
                        </style>
                    </div>

                    <div id="shopify-section-template--14169934200945__16291959854b96c879" class="shopify-section">
                        <!-- Product Area Start -->
                        <div class="product-area" id="section-template--14169934200945__16291959854b96c879">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- section-title start -->
                                        <div class="section-title text-center">
                                            <h2>Sản phẩm mới nhất</h2>
                                            <!-- <p>Most Trendy 2018 Clother</p> -->
                                        </div>
                                        <!-- section-title end -->
                                    </div>
                                </div>

                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="row product-slider">

                                        <?php foreach ($productsNew as $ix => $pd) : ?>
                                            <?php if ($ix % 2 == 0) : ?>
                                                <div class="col-12">
                                                <?php endif ?>
                                                <!-- single-product-wrap start -->
                                                <form class="product-forms" method="post" action="/products/<?= esc($pd->_id) ?>/addtocart" ?>
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap ix<?= esc($ix) ?>">

                                                        <div class="product-image">
                                                            <a href="/products/<?= esc($pd->slug) ?>-<?= esc($pd->_id) ?>">
                                                                <img class="popup_cart_image" src="/public/image/<?= esc($pd->types[0]->image) ?>" alt="" onmouseover="this.src = '/public/image/<?= esc($pd->types[1]->image) ?>'" onmouseout="this.src='/public/image/<?= esc($pd->types[0]->image) ?>'">
                                                            </a>
                                                            <?php if ($pd->qty == 0) : ?>
                                                                <span class="soldout-title label-product">Soldout</span>
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
                                                                                <?php foreach ($pd->size as $index => $size) : ?>
                                                                                    <?php if ($index>=3) {break;}?>
                                                                                    <div data-value="<?= esc($size) ?>" class="swatch-element <?= esc($size) ?> available">
                                                                                        <input id="swatch-ix<?= esc($ix) ?>-<?= esc($size) ?>" type="radio" name="size" value="<?= esc($size) ?>" <?php if ($index == 0) echo "checked" ?> />
                                                                                        <label for="swatch-ix<?= esc($ix) ?>-<?= esc($size) ?>">
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
                                                                    <button class="cart-disable add-to-cart" disabled>
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

                                                <?php if ($ix % 2 == 1) : ?>
                                                </div>
                                            <?php endif ?>
                                        <?php endforeach ?>

                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        </div>
                        <!-- Product Area End -->
                        <style data-shopify>
                            #section-template--14169934200945__16291959854b96c879 {
                                padding-top: 100px;
                                padding-bottom: 70px;
                            }

                            @media (min-width: 768px) and (max-width: 991px) {
                                #section-template--14169934200945__16291959854b96c879 {
                                    padding-top: 80px;
                                    padding-bottom: 50px;
                                }
                            }

                            @media (max-width: 767px) {
                                #section-template--14169934200945__16291959854b96c879 {
                                    padding-top: 60px;
                                    padding-bottom: 30px;
                                }
                            }
                        </style>
                        <style>
                            #section-template--14169934200945__16291959854b96c879 .section-title {
                                background: url(/public/cdn.shopify.com/s/files/1/0069/3177/5601/files/title-bgde4b.png?v=1540478728);
                                background-repeat: no-repeat;
                                background-position: bottom center;
                                margin-bottom: 20px;
                                padding-bottom: 60px;
                            }



                            #section-template--14169934200945__16291959854b96c879 .section-title h2 {
                                color: #383838;
                            }

                            #section-template--14169934200945__16291959854b96c879 .section-title p {
                                color: #191919;
                            }

                            #section-template--14169934200945__16291959854b96c879 .product-slider .slick-arrow {
                                background: #dddddd;
                                color: #191919;
                            }

                            #section-template--14169934200945__16291959854b96c879 .product-slider .slick-arrow:hover {
                                background: #8a8f6a;
                                color: #ffffff;
                            }
                        </style>

                        <script>
                            /*--
          Product Slider
      -----------------------------------*/
                            $('#section-template--14169934200945__16291959854b96c879 .product-slider').slick({
                                dots: false,

                                infinite: true,
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                autoplay: true,
                                prevArrow: true,
                                nextArrow: true,
                                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                                responsive: [{
                                        breakpoint: 1199,
                                        settings: {
                                            slidesToShow: 3,
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
                    <div id="shopify-section-template--14169934200945__162919709678baee38" class="shopify-section">
                        <!-- Banner area start -->
                        <div class="banner-area-two" id="section-template--14169934200945__162919709678baee38">
                            <div class="container-fluid">
                                <div class="row"  style="justify-content: center;">
                                    <?php for ($i = 3; $i < 5; $i++) : ?>
                                        <?php if ($subbanner[$i]->image != '') : ?>
                                            <div class="col-lg-6 col-md-6">

                                                <div class="single-banner-two mt--30">
                                                    <a href="<?= esc(($subbanner[$i]->url != '')?$subbanner[$i]->url:'collections/all')?>">
                                                        <img src="/public/image/<?=esc($subbanner[$i]->image)?>" alt="">
                                                    </a>
                                                </div>

                                            </div>
                                        <?php endif ?>
                                    <?php endfor ?>
                                </div>
                            </div>
                        </div>
                        <!-- Banner area end -->
                        <style data-shopify>
                            #section-template--14169934200945__162919709678baee38 {
                                padding-top: 0px;
                                padding-bottom: 0px;
                            }

                            @media (min-width: 768px) and (max-width: 991px) {
                                #section-template--14169934200945__162919709678baee38 {
                                    padding-top: 0px;
                                    padding-bottom: 0px;
                                }
                            }

                            @media (max-width: 767px) {
                                #section-template--14169934200945__162919709678baee38 {
                                    padding-top: 0px;
                                    padding-bottom: 0px;
                                }
                            }
                        </style>
                        <style>
                            #block-540276d3-1390-4601-bd51-8baa8d5abc50 .single-banner-two:before,
                            #block-540276d3-1390-4601-bd51-8baa8d5abc50 .single-banner-two a:before {
                                border-top: 2px solid #ffffff;
                            }

                            #block-540276d3-1390-4601-bd51-8baa8d5abc50 .single-banner-two:after,
                            #block-540276d3-1390-4601-bd51-8baa8d5abc50 .single-banner-two a:after {
                                border-right: 2px solid #ffffff;
                            }





                            #block-304a355c-21c0-434f-9a1b-ef83891ac310 .single-banner-two:before,
                            #block-304a355c-21c0-434f-9a1b-ef83891ac310 .single-banner-two a:before {
                                border-top: 2px solid #ffffff;
                            }

                            #block-304a355c-21c0-434f-9a1b-ef83891ac310 .single-banner-two:after,
                            #block-304a355c-21c0-434f-9a1b-ef83891ac310 .single-banner-two a:after {
                                border-right: 2px solid #ffffff;
                            }
                        </style>









                    </div>
                    <div id="shopify-section-template--14169934200945__16291974022f12d747" class="shopify-section">
                        <!-- Product Area Start -->
                        <div class="product-area" id="section-template--14169934200945__16291974022f12d747">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- section-title start -->
                                        <div class="section-title text-center">
                                            <h2>Sản phẩm bán chạy</h2>
                                        </div>
                                        <!-- section-title end -->
                                    </div>
                                </div>

                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="row product-slider">
                                        <?php foreach ($productsBest as $ix => $pd) : ?>
                                            <?php if ($ix % 2 == 0) : ?>
                                                <div class="col-12">
                                                <?php endif ?>
                                                <!-- single-product-wrap start -->
                                                <form class="product-forms" method="post" action="products/<?= esc($pd->_id) ?>/addtocart" ?>
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

                                                <!-- single-product-wrap end -->
                                                <!-- single-product-wrap end -->
                                                <?php if ($ix % 2 == 1) : ?>
                                                </div>
                                            <?php endif ?>
                                        <?php endforeach ?>





                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        </div>
                        <!-- Product Area End -->
                        <style data-shopify>
                            #section-template--14169934200945__16291974022f12d747 {
                                padding-top: 100px;
                                padding-bottom: 100px;
                            }

                            @media (min-width: 768px) and (max-width: 991px) {
                                #section-template--14169934200945__16291974022f12d747 {
                                    padding-top: 80px;
                                    padding-bottom: 80px;
                                }
                            }

                            @media (max-width: 767px) {
                                #section-template--14169934200945__16291974022f12d747 {
                                    padding-top: 60px;
                                    padding-bottom: 60px;
                                }
                            }
                        </style>
                        <style>
                            #section-template--14169934200945__16291974022f12d747 .section-title {
                                background: url(/public/cdn.shopify.com/s/files/1/0069/3177/5601/files/title-bgde4b.png?v=1540478728);
                                background-repeat: no-repeat;
                                background-position: bottom center;
                                margin-bottom: 20px;
                                padding-bottom: 60px;
                            }



                            #section-template--14169934200945__16291974022f12d747 .section-title h2 {
                                color: #383838;
                            }

                            #section-template--14169934200945__16291974022f12d747 .section-title p {
                                color: #191919;
                            }

                            #section-template--14169934200945__16291974022f12d747 .product-slider .slick-arrow {
                                background: #dddddd;
                                color: #191919;
                            }

                            #section-template--14169934200945__16291974022f12d747 .product-slider .slick-arrow:hover {
                                background: #8a8f6a;
                                color: #ffffff;
                            }
                        </style>

                        <script>
                            /*--
          Product Slider
      -----------------------------------*/
                            $('#section-template--14169934200945__16291974022f12d747 .product-slider').slick({
                                dots: false,

                                infinite: true,
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                autoplay: true,
                                prevArrow: true,
                                nextArrow: true,
                                prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></i> </button>',
                                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                                responsive: [{
                                        breakpoint: 1199,
                                        settings: {
                                            slidesToShow: 3,
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

                    <!-- Categories List Post area -->
                    <style data-shopify>
                        #section-template--14169934200945__16291987195054162b {
                            padding-top: 100px;
                            padding-bottom: 100px;
                        }

                        @media (min-width: 768px) and (max-width: 991px) {
                            #section-template--14169934200945__16291987195054162b {
                                padding-top: 80px;
                                padding-bottom: 80px;
                            }
                        }

                        @media (max-width: 767px) {
                            #section-template--14169934200945__16291987195054162b {
                                padding-top: 60px;
                                padding-bottom: 60px;
                            }
                        }
                    </style>
                    <style>
                        #section-template--14169934200945__16291987195054162b .categories-list-post-item .category-inner {
                            background: #ffffff;
                            color: #323232;
                        }

                        #section-template--14169934200945__16291987195054162b .categories-list-post-item .category-inner:hover {
                            background: #8a8f6a;
                            color: #ffffff;
                        }
                    </style>

                    <script>
                        /*--
          vertical-product-active
      --------------------------------------*/
                        $('#section-template--14169934200945__16291987195054162b .product-categproes-active').slick({
                            slidesToShow: 4,
                            arrows: false,

                            autoplay: true,
                            slidesToScroll: 1,
                            button: false,
                            responsive: [{
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 2,
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 2,
                                        vertical: false,
                                    }
                                },
                                {
                                    breakpoint: 520,
                                    settings: {
                                        slidesToShow: 1,
                                        vertical: false,
                                    }
                                }
                            ]

                        });
                    </script>







                </div>
                <div id="shopify-section-template--14169934200945__162919887443ae37f2" class="shopify-section">
                    <!-- Our Services Area Start -->
                    <div class="our-services-area" id="section-template--14169934200945__162919887443ae37f2">
                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-lg-3 col-md-6">
                                    <!-- single-service-item start -->
                                    <div class="single-service-item" id="block-150a63e6-09c8-447e-abe5-757077d02b66">

                                        <div class="our-service-icon text-left">
                                            <i class="fa fa-truck"></i>
                                        </div>

                                        <div class="our-service-info text-left">

                                            <h3>Miễn phí vận chuyển</h3>


                                            <p>Miễn phí vận chuyển cho tất cả đơn hàng từ đ1.000.000</p>

                                        </div>
                                    </div>
                                    <!-- single-service-item end -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!-- single-service-item start -->
                                    <div class="single-service-item" id="block-4cde19e1-a238-4c8c-a9e9-c5c4c5a18fff">

                                        <div class="our-service-icon text-left">
                                            <i class="fa fa-support"></i>
                                        </div>

                                        <div class="our-service-info text-left">

                                            <h3>Hỗ trợ 24/7</h3>


                                            <p>Liên hệ với chúng tôi 24 giờ một ngày, 7 ngày một tuần</p>

                                        </div>
                                    </div>
                                    <!-- single-service-item end -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!-- single-service-item start -->
                                    <div class="single-service-item" id="block-02e6fbad-2ff2-443e-895f-19e157ce0c03">

                                        <div class="our-service-icon text-left">
                                            <i class="fa fa-undo"></i>
                                        </div>

                                        <div class="our-service-info text-left">

                                            <h3>7 ngày hoàn trả</h3>


                                            <p>Chỉ cần trả lại nó trong vòng 7 ngày để trao đổi</p>

                                        </div>
                                    </div>
                                    <!-- single-service-item end -->
                                </div>
                               

                            </div>
                        </div>
                    </div>
                    <!-- Our Services Area End -->
                    <style data-shopify>
                        #section-template--14169934200945__162919887443ae37f2 {
                            padding-top: 0px;
                            padding-bottom: 70px;
                        }

                        @media (min-width: 768px) and (max-width: 991px) {
                            #section-template--14169934200945__162919887443ae37f2 {
                                padding-top: 0px;
                                padding-bottom: 50px;
                            }
                        }

                        @media (max-width: 767px) {
                            #section-template--14169934200945__162919887443ae37f2 {
                                padding-top: 0px;
                                padding-bottom: 30px;
                            }
                        }
                    </style>
                    <style>
                        #block-150a63e6-09c8-447e-abe5-757077d02b66 .our-service-info h3 {
                            color: #383838;
                        }

                        #block-150a63e6-09c8-447e-abe5-757077d02b66 .our-service-info p {
                            color: #191919;
                        }

                        #block-150a63e6-09c8-447e-abe5-757077d02b66 .our-service-icon i {
                            color: #383838;
                        }

                        #block-4cde19e1-a238-4c8c-a9e9-c5c4c5a18fff .our-service-info h3 {
                            color: #383838;
                        }

                        #block-4cde19e1-a238-4c8c-a9e9-c5c4c5a18fff .our-service-info p {
                            color: #191919;
                        }

                        #block-4cde19e1-a238-4c8c-a9e9-c5c4c5a18fff .our-service-icon i {
                            color: #383838;
                        }

                        #block-02e6fbad-2ff2-443e-895f-19e157ce0c03 .our-service-info h3 {
                            color: #383838;
                        }

                        #block-02e6fbad-2ff2-443e-895f-19e157ce0c03 .our-service-info p {
                            color: #191919;
                        }

                        #block-02e6fbad-2ff2-443e-895f-19e157ce0c03 .our-service-icon i {
                            color: #383838;
                        }

                        #block-df749b3c-5c68-4f59-aab6-ab61b1719307 .our-service-info h3 {
                            color: #383838;
                        }

                        #block-df749b3c-5c68-4f59-aab6-ab61b1719307 .our-service-info p {
                            color: #191919;
                        }

                        #block-df749b3c-5c68-4f59-aab6-ab61b1719307 .our-service-icon i {
                            color: #383838;
                        }
                    </style>






                </div>
                </div>
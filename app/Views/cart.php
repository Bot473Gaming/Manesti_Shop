<div class="" bis_skin_checked="1">
    <div id="shopify-section-template--14169934102641__main" class="shopify-section" bis_skin_checked="1">
        <!-- content-wraper start -->
        <div class="content-wraper" id="section-template--14169934102641__main" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <form action="/cart" method="post" novalidate="">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-12" bis_skin_checked="1">
                            <?php if (!isset($user->carts[0])) : ?>
                                <div class="empty-cart-page">
                                    <h2>Giỏ hàng</h2>
                                    <h3>Giỏ hàng của bạn hiện đang trống.</h3>
                                    <p>Tiếp tục mua sắm <a href="/collections/">ở đây</a></p>
                                </div>
                            <?php else : ?>
                                <div class="cart-table" bis_skin_checked="1">
                                    <div class="table-content cart-table table-responsive" bis_skin_checked="1">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="plantmore-product-thumbnail" style="width:17%">Ảnh</th>
                                                    <th class="cart-product-name" style="width:33%">Sản Phẩm</th>
                                                    <th class="plantmore-product-price" style="width:15%">Giá</th>
                                                    <th class="plantmore-product-quantity" style="width:16%">Số Lượng</th>
                                                    <th class="plantmore-product-subtotal" style="width:16%">Tổng</th>
                                                    <th class="plantmore-product-remove" style="width:15%">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- loop product -->
                                                <?php $totalAmount = 0;
                                                $i = 0 ?>

                                                <?php foreach ($products as $product) : ?>
                                                    <tr>
                                                        <td class="plantmore-product-thumbnail"><a href="/products/<?= esc($product->slug) ?>-<?= esc($product->id) ?>"><img src="/public/image/<?= esc($product->image) ?>" alt="" style=""></a></td>
                                                        <td class="plantmore-product-name text-left">
                                                            <a href="/products/<?= esc($product->slug) ?>-<?= esc($product->id) ?>" style="display: block"><?= esc($product->name) ?></a>
                                                            <a href="javascript:void(0)" class="btn-type">
                                                            <small><?= esc($product->size) ?> / <?= esc($product->color) ?></small>
                                                            </a>
                                                        </td>
                                                        <td class="plantmore-product-price"><span class="amount"><span class="money"><?= esc($product->price) ?></span></span></td>
                                                        <td class="plantmore-product-quantity product_quantity">
                                                            <div class="product-quantity" bis_skin_checked="1">
                                                                <input type="text" value="<?= esc($product->qty) ?>" name="qty[]">
                                                                <!-- <span class="dec qtybtn"> - </span><span class="inc qtybtn"> + </span> -->
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal"><span class="amount"><span class="money"><?= esc($product->price * $product->qty) ?></span></span></td>
                                                        <td class="plantmore-product-remove"><a href="/cart/delete?line=<?= esc($i++) ?>"><i class="fa fa-close"></i></a></td>
                                                        <?php $totalAmount += $product->price * $product->qty; ?>
                                                    </tr>
                                                <?php endforeach ?>
                                                <!--  -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-md-8" bis_skin_checked="1">
                                            <div class="coupon-all" bis_skin_checked="1">
                                                <div class="coupon2" bis_skin_checked="1">
                                                    <input class="submit btn" value="Cập nhật giỏ hàng" type="submit">
                                                    <a href="/collections" class="btn continue-btn">Tiếp tục mua sắm</a>
                                                    <a href="/cart/clear" class="btn continue-btn">Xóa toàn bộ giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 ml-auto" bis_skin_checked="1">
                                            <div class="cart-page-total" bis_skin_checked="1">
                                                <h2>Tổng giỏ hàng</h2>
                                                <ul>
                                                    <li>Tổng <span id="bk-cart-subtotal-price"><span class="money"><?= esc($totalAmount) ?></span></span></li>
                                                </ul><a href="/checkout" class="proceed-checkout-btn">Tiến hành thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- content-wraper end -->

        <style>
            #section-template--14169934102641__main {
                padding-top: 100px;
                padding-bottom: 100px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14169934102641__main {
                    padding-top: 80px;
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14169934102641__main {
                    padding-top: 60px;
                    padding-bottom: 60px;
                }
            }
        </style>




        <style>
            @media (max-width: 767px) {

                /* Force table to not be like tables anymore */
                .cart-table table,
                .cart-table thead,
                .cart-table tbody,
                .cart-table th,
                .cart-table td,
                .cart-table tr {
                    display: block;
                }

                /* Hide table headers (but not display: none;, for accessibility) */
                .cart-table thead tr {
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                }

                .cart-table tr {
                    border: 1px solid #ccc;
                }

                .cart-table td {
                    /* Behave  like a "row" */
                    border: none;
                    border-bottom: 1px solid #eee;
                    position: relative;
                    padding-left: 50%;
                }

                .cart-table td:before {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    padding-right: 0;
                    white-space: nowrap;
                }

                /*
    Label the data
    
    td:nth-of-type(1):before { content: "Image"; }
    td:nth-of-type(2):before { content: "Product"; }
    td:nth-of-type(3):before { content: "Price"; }
    td:nth-of-type(4):before { content: "Quantity"; }
    td:nth-of-type(5):before { content: "Total"; }
    td:nth-of-type(6):before { content: "Remove"; }
    */
                .cart-table table tbody tr td.pro-thumbnail {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-thumbnail {
                    width: auto;
                    max-width: 100%;
                    min-width: 100%;
                    text-align: center;
                }

                .cart-table table tbody tr td.pro-thumbnail a {
                    display: block;
                    min-width: unset;
                    width: auto;
                }

                .cart-table table tbody tr td.pro-thumbnail a img {
                    width: auto;
                    max-width: 100%;
                }

                .cart-table table tbody tr td.pro-title {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-price {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-quantity {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-subtotal {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-remove {
                    width: auto;
                }

                .cart-table table tbody tr td.pro-remove a {
                    width: auto;
                }

                .cart-table table tbody tr td {
                    padding: 5px 5px;
                }

                .cart-table td.pro-thumbnail a {
                    border: 0px solid #eee;
                }

                .cart-table table tbody tr td {
                    border-bottom: 0px solid #ddd;
                }
            }
        </style>



        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" defer="defer"></script>
        <!--<![endif]-->
        <!--[if lte IE 9]><script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js"></script><![endif]-->

        <script>
            $('.product-quantity').append('<span class="dec qtybtn"> - </span><span class="inc qtybtn"> + </span>');
            $('.qtybtn').on('click', function() {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
            $('.plantmore-product-remove a').click(function(e) {
                e.preventDefault();
                var btn = this;
                // console.log(btn);
                $.ajax({
                    type: "GET",
                    url: btn.href,
                    data: {},
                    cache: false,
                    success: function(data) {
                        data = JSON.parse(data);
                        // console.log(data);
                        if (!data.length) {
                            location.reload();
                        }
                        var total = 0;
                        var sl = 0;
                        data.forEach((pd, index) => {
                            total += pd.price * pd.qty;
                            sl += +pd.qty;
                        });
                        try {
                            $('.remove-from-cart a[href="' + btn.getAttribute("href") + '"]').parent().parent().remove();
                        } catch {

                        }
                        btn.parentElement.parentElement.remove();
                        $('#bigcounter').text(sl);
                        $('.shopping-cart__total .money').html(Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(total));
                        $('#bk-cart-subtotal-price .money').text(Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(total));
                        Array.from($('.plantmore-product-remove a')).forEach((e, index) => {
                            let val = $(e).attr('href').split('=');
                            val[1] = index;
                            // console.log(val.join('='))
                            val = val.join('=');
                            $('.remove-from-cart a').eq(index).attr('href', val);
                            $(e).attr('href', val);
                        })

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });

            })
        </script>



    </div>
</div>
<div class="" bis_skin_checked="1">
    <div class="customer-page" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
        <div class="row mt-4">
            <div class="status-box" bis_skin_checked="1">
                <a class="status" href="/purchase?type=all"><span class="text-status">Tất cả</span></a>
                <a class="status" href="/purchase?type=waiting"><span class="text-status">Chờ xác nhận</span><?php if ($cntOrder['waiting'] > 0){echo '<span class="counter-purchase">('.$cntOrder['waiting'].')</span>';}?></a>
                <a class="status" href="/purchase?type=processed"><span class="text-status">Chờ lấy hàng</span><?php if ($cntOrder['processed'] > 0){echo '<span class="counter-purchase">('.$cntOrder['processed'].')</span>';}?></a>
                <a class="status" href="/purchase?type=shipping"><span class="text-status">Đang giao</span><?php if ($cntOrder['shipping'] > 0){echo '<span class="counter-purchase">('.$cntOrder['shipping'].')</span>';}?></a>
                <a class="status" href="/purchase?type=delivered"><span class="text-status">Đã giao</span><?php if ($cntOrder['delivered'] > 0){echo '<span class="counter-purchase">('.$cntOrder['delivered'].')</span>';}?></a>
                <a class="status" href="/purchase?type=cancel"><span class="text-status">Đã Hủy</span><?php if ($cntOrder['cancel'] > 0){echo '<span class="counter-purchase">('.$cntOrder['cancel'].')</span>';}?></a>
            </div>
        </div>
        <div class="row" bis_skin_checked="1">
          <div bis_skin_checked="1" style="width:100%">
            <!--<h2 class="h4">Order History</h2>-->
            <?php if (count($orders) > 0):?>
                <?php foreach($orders as $od):?>
                    <div class="col order-box pb-3 mb-4">
                        <div class="header-status pt-3"><?=esc($od->status)?></div>
                        <a class="col p-0 non-a" href="/purchase/<?=esc($od->_id)?>">
                            <hr>
                            <?php
                            $pds = json_decode($od->pds);
                            $len = count($pds) - 1;
                            $total = 0;
                            foreach ($pds as $index=>$pd):?>
                                <div class="d-flex">
                                    <img src="/public/image/<?=esc($pd->image)?>" alt="" style="width:80px;height:80px">
                                    <div class="col">
                                        <p style="margin-bottom: 0;"><?= esc($pd->name)?> - <span>SKU: <?= esc($pd->sku)?></span></p>
                                        <small><?= esc($pd->size)?> / <?= esc($pd->color)?></small>
                                        <p style="margin-bottom: 0;"><strong>x<?= esc($pd->qty)?></strong></p>
                                    </div>
                                    <div class="col col-md-2 align-self-center text-right">
                                        <div class="price-box" bis_skin_checked="1">
                                            <span class="new-price"> <span class="money"><?=esc($pd->price)?></span></span>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($index < $len):?>
                                <hr>
                                <?php endif?>
                            <?php endforeach?>
                        </a>
                            <div class="row box-bt pt-3 mt-4">
                                <div class="col crAt align-self-center">
                                    <p style="margin:0">Tạo lúc: <?=esc($od->createAt)?></p>
                                </div>
                                <div class="col gross-amount h5 pt-4 pb-4 text-right ">
                                    <span class="h6" style="color: #000">Tổng số tiền: </span>
                                    <span class="money"><?=esc($od->grossAmount)?></span>
                                </div>
                            </div>
                    </div>
                <?php endforeach?>
            <?php else:?>
            <p class="text-center mt-4">Bạn chưa có đơn hàng.</p>
            <?php endif?>
          </div>
        </div>
      </div>
    </div>
    <style>
        .header-status {
            font-size: 18px;
            padding-top: 12px;
            text-transform: uppercase;
            color: #8a8f6a;
        }
        .active-tab , .status:hover {
            color:#8a8f6a!important;
            border-color: #8a8f6a !important;
        }
        .status {
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            padding: 16px 0;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            color: rgba(0,0,0,.8);
            background: #F5F5F5;
            border-bottom: 2px solid rgba(0,0,0,.09);
            display: flex;
            flex: 1;
            overflow: hidden;
            align-items: center;
            justify-content: center;
            transition: color .2s;
            min-width:120px;
        }
        .status-box {
            width: 100%;
            margin-bottom: 12px;
            display: flex;
            overflow: hidden;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 10;
            background: #F5F5F5;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            overflow-x: scroll;
        }   
        .status-box::-webkit-scrollbar {
          display: none;
        }
        .customer-page {
            min-height: 800px;
        }
        .order-box {
            background: #F5F5F5;
        }
        .box-bt {
            border-top: 1px solid rgba(0,0,0,.09);
        }
        .gross-amount {
            color: #f3283d;
        }
        .non-a {
            color:#191919!important;
        }
    </style>
    <script>
        $(function() {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            var type = (!!urlParams.get('type') && ['all','waiting', 'processed', 'shipping', 'delivered', 'cancel'].includes(urlParams.get('type')))?urlParams.get('type'):'all';
            var arr = {
                'all'       : 0,
                'waiting'   : 1,
                'processed' : 2,
                'shipping'  : 3,
                'delivered' : 4,
                'cancel'    : 5,
            };
            $('a.status').eq(arr[type]).addClass('active-tab');
        });
        var ar = {
                "waiting"   : "Chờ xác nhận",
                "processed" : "Chờ lấy hàng",
                "shipping"  : "Đang giao",
                "delivered" : "Đã giao",
                "cancel"    : "Hủy",
            }
            Array.from($('.header-status')).forEach(e => {
                var val = e.innerText.toLocaleLowerCase();
                var res = ar[val];
                e.innerText = res;
            })
    </script>
</div>
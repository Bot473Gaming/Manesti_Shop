<div class="" bis_skin_checked="1">
    <div class="customer-page" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
        
        <div class="row" bis_skin_checked="1">
    
          <div bis_skin_checked="1" style="width:100%">
            <!--<h2 class="h4">Order History</h2>-->
            <?php if ($order != false):?>
                    <div class="col order-box pb-3 mt-4">
                        <div class="d-flex header justify-content-between pt-3">
                            <div class="btn-back" onclick="history.back()">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span>TRỞ LẠI</span>
                            </div>
                            <div class="text-right h6">
                                <span>ID: <?= esc('#'.str_pad($order->_id, 6, '0', STR_PAD_LEFT)) ?></span>
                                <span style="margin: 0 16px;">|</span>
                                <span class="header-status"><?=esc($order->status)?></span>
                            </div>
                        </div>
                        <hr>
                        <div class="address">
                            <div class="heading mb-3">
                                <span class="h5">Địa chỉ nhận hàng</span>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inf">
                                        <p style="margin:0"><strong><?=esc($order->customer_name)?></strong></p>
                                        <p style="margin:0"><?=esc($order->customer_phone)?> | <?=esc((!empty($order->customer_email))?$order->customer_email:"(email)")?></p>
                                        <p style="margin:0"><?=esc($order->customer_address)?> <?php if ($order->status == 'waiting'):?>
                                            <a id="change-inf" href="javascript:void(0)" data-toggle="modal" data-target="#changeInf">sửa</a>
                                            <?php endif?></p>
                                    </div>
                                </div>
                                <div class="col-md-auto" style="border-left: 1px solid rgba(0,0,0,.09);">
                                    <div class="col pl-4 status-time-box">
                                        <?php foreach($order->time_update as $at):?>
                                            <p class="status-time mb-2">
                                                <span class="dots">&nbsp;</span>
                                                <span class="time mr-3"><?=esc($at->timeAt)?></span>
                                                <span class="title"><?=esc($at->title)?></span>
                                            </p>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if ($order->status == 'waiting'):?>
                            <a class="text-danger" href="javascript:void(0)" data-toggle="modal" data-target="#cancelOrder">Hủy đơn hàng</a>
                            <?php endif?>
                        </div>
                        <hr>
                        <?php
                        $pds = json_decode($order->pds);
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
                                <div class="col col-md-3 align-self-center text-right">
                                    <div class="price-box" bis_skin_checked="1">
                                        <span class="new-price"> <span class="money"><?=esc($pd->price)?></span></span>
                                    </div>
                                </div>
                            </div>
                            <?php $total += $pd->price * $pd->qty?>
                            <?php if ($index < $len):?>
                            <hr>
                            <?php endif?>
                        <?php endforeach?>
                        <div class="col box-bt text-right pt-3 mt-4">
                            <div class="row gross-amount h5 pt-4 pb-4">
                                <table class="table">
                                	<tr>
                                		<td style="width:70%;color: #000"><small>Tổng tiền hàng</small></td>
                                		<td style="width:30%" class="money"><?=esc($total)?></td>
                                	</tr>
                                	<tr>
                                		<td style="width:70%;color: #000"><small>Phí vận chuyển</small></td>
                                		<td style="width:30%" class="money">30000</td>
                                	</tr>
                                	<tr>
                                		<td style="width:70%;color: #000"><small>Tổng số tiền</small></td>
                                		<td style="width:30%" class="money"><?=esc($order->grossAmount)?></td>
                                	</tr>
                                </table>
                            </div>
                        </div>
                    </div>
            <?php else:?>
            <p class="text-center mt-4">
                Đơn hàng không tồn tại.
                <a href="/purchase" class="home-bacck-button mt-4">Quay trở lại</a>
            </p>
            <?php endif?>
          </div>
        </div>
      </div>
    </div>
    <?php if ($order->status == 'waiting'):?>
    <div class="modal fade" id="changeInf" tabindex="-1" role="dialog"aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="changeinfLabel">Thay đổi thông tin nhận hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/purchase/handel" method="post" class="changeOrder">
            <input name="act" type="hidden" value="update">
            <div bis_skin_checked="1">
                <div class="section-content section-customer-information no-mb" bis_skin_checked="1">
                    <div class="fieldset" bis_skin_checked="1">
                        <div class="field field-required  " bis_skin_checked="1">
                            <div class="field-input-wrapper" bis_skin_checked="1">
                                <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="customer_name" name="customer_name" value="" autocomplete="false" required  req="min:6">
                            </div>
                        </div>
                        <div class="field field-required field-two-thirds  " bis_skin_checked="1">
                            <div class="field-input-wrapper" bis_skin_checked="1">
                                <label class="field-label" for="checkout_user_email">Email</label>
                                <input autocomplete="false" placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="customer_email" name="customer_email" value="">
                            </div>
                        </div>
                        <div class="field field-required field-third  " bis_skin_checked="1">
                            <div class="field-input-wrapper" bis_skin_checked="1">
                                <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="customer_phone" name="customer_phone" value="" required req="min:8|max:12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content" bis_skin_checked="1">
                    <div class="fieldset" bis_skin_checked="1">
                            <div class="" bis_skin_checked="1">
                                <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false" bis_skin_checked="1">
                                    <div class="order-checkout__loading--box" bis_skin_checked="1">
                                        <div class="order-checkout__loading--circle" bis_skin_checked="1"></div>
                                    </div>

                                    <div class="field field-required  " bis_skin_checked="1">
                                        <div class="field-input-wrapper" bis_skin_checked="1">
                                            <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                            <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="customer_address_detail" value="" required>
                                        </div>

                                    </div>

                                    <input name="customer_province" type="hidden" value="">
                                    <input name="customer_district" type="hidden" value="">
                                    <input name="customer_ward" type="hidden" value="">
                                    <input name="order_id" type="hidden" value="<?=esc($order->_id)?>">

                                    <div class="field field-show-floating-label  field-third " bis_skin_checked="1">
                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                            <label class="field-label" for="customer_shipping_province"> Tỉnh / thành </label>
                                            <select class="field-input" id="customer_shipping_province" name="province" required>
                                            </select>
                                        </div>


                                    </div>


                                    <div class="field field-show-floating-label  field-third " bis_skin_checked="1">
                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                            <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                                            <select class="field-input" id="customer_shipping_district" name="district" required>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="field field-show-floating-label   field-third  " bis_skin_checked="1">
                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                            <label class="field-label" for="customer_shipping_ward">Phường / xã</label>
                                            <select class="field-input" id="customer_shipping_ward" name="ward" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn">Thay đổi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <div class="modal fade" id="cancelOrder" tabindex="-1" role="dialog" aria-labelledby="cancel-order" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cancel-order">Hủy đơn hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              Xác nhận hủy đơn hàng!
            <form action="/purchase/handel" method="post" class="cancelOrder">
                <input name="act" type="hidden" value="cancel">
                <input name="order_id" type="hidden" value="<?=esc($order->_id)?>">
              <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn">Hủy đơn hàng</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php endif?>
    
    <style>
        .header-status {
            text-transform: uppercase;
            color: #8a8f6a;
        }
        .header {
            font-size: 18px;
            padding-top: 12px;
        }
        .active-tab , .status:hover {
            color:#8a8f6a!important;
            border-color: #8a8f6a !important;
        }
        .dots {
            margin-right:8px;
            line-height:1;
            width:12px;
            height:12px;
            border-radius:1rem;
            background-color:rgba(0,0,0,.09);
            display: inline-block;
        }
        .status-time:first-child .title  {
            color:#8a8f6a;
        }
        .status-time:first-child .dots {
            background-color:#8a8f6a;
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
        .btn-back {
            cursor: pointer;
        }
        #change-inf {
            color:#8a8f6a;
        }
    </style>
    <style>
        .btn {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 1.4em 1.7em;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            position: relative;
            background: #8a8f6a;
            color: white;
        }

        .fieldset .field .field-input-wrapper .field-input {
            box-shadow: 0 0 0 1px #d9d9d9;
            transition: all 0.2s ease-out;
            background-color: white;
            color: #333333;
            border-radius: 4px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 0.94em 2.8em 0.94em 0.8em;
            word-break: normal;
        }

        .fieldset .field .field-input-wrapper .field-input:focus {
            box-shadow: 0 0 0 2px #8a8f6a;
            outline: none;
        }

        .radio-wrapper .radio-input .input-radio:checked,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked {
            border: none;
            box-shadow: 0 0 0 10px #8a8f6a inset;
        }

        .fieldset .field.field-error .field-input-wrapper .field-input {
            box-shadow: 0 0 0 2px #ff6d6d;
            outline: none;
        }

        a {
            text-decoration: none;
            color: #8a8f6a;
            transition: color 0.2s ease-in-out;
            display: inline-block;
        }

        .alert {
            padding: 16px;
            border-radius: 5px;
            display: -webkit-flex;
            display: flex;
            align-items: center;
        }


        .alert-danger svg {
            width: 20px;
            margin-right: 10px;
        }


        .alert-danger * {
            flex: 0 0 auto;
        }

        .alert-danger {
            color: #721c24;
            background-color: #ffebeb;
            border-color: #ffebeb;
            line-height: 20px;
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }


        a:focus {
            outline: none;
        }

        a:hover {
            filter: brightness(1.2);
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 1em;
        }

        td,
        th {
            padding: 0;
            padding-left: 1em;
        }

        td:first-child,
        th:first-child {
            padding-left: 0;
            text-align: right;
        }

        td:last-child,
        th:last-child {
            text-align: right;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        p {
            margin: 0;
            line-height: 1.5em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
            padding: 0;
            -webkit-appearance: none;
            -webkit-font-smoothing: inherit;
            border: none;
            background: transparent;
            line-height: normal;
        }

        button:focus,
        input:focus {
            outline: none;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .radio-wrapper,
        .checkbox-wrapper {
            display: table;
            box-sizing: border-box;
            width: 100%;
            zoom: 1;
        }

        .radio-wrapper:after,
        .radio-wrapper:before,
        .checkbox-wrapper:after,
        .checkbox-wrapper:before {
            content: "";
            display: table;
        }

        .radio-wrapper .radio-input,
        .checkbox-wrapper .checkbox-input {
            display: table-cell;
            padding-right: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper .payment-method-checkbox {
            display: flex;
            align-self: center;
        }

        .radio-wrapper .radio-input .input-radio,
        .checkbox-wrapper .checkbox-input .input-checkbox {
            width: 18px;
            height: 18px;
            box-shadow: 0 0 0 0 #8a8f6a inset;
            transition: all 0.2s ease-in-out;
            position: relative;
            cursor: pointer;
            vertical-align: -4px;
            outline: 0;
            border: solid 1px #d9d9d9;
        }

        .radio-wrapper .radio-input .input-radio:hover,
        .checkbox-wrapper .checkbox-input .input-checkbox:hover {
            border-color: #cccccc;
        }

        .radio-wrapper .radio-input .input-radio {
            border-radius: 50%;
        }

        .radio-wrapper .radio-content-input {
            display: flex;
            align-items: center;
        }

        .radio-content-input .content-wrapper {
            display: grid
        }

        .radio-wrapper .radio-content-input .main-img {
            margin-right: 10px;
            display: flex;
            align-self: center;
            width: 40px;
            height: 40px;
        }

        .radio-wrapper .radio-content-input .child-img {
            max-height: 30px
        }

        .radio-wrapper .radio-content-input .quick-tagline {
            color: #8a8f6a;
            display: flex;
            align-items: center;
            margin-top: 2px;
        }

        .radio-wrapper .radio-content-input .quick-tagline svg {
            fill: #8a8f6a;
            margin-left: 10px;
        }

        .radio-wrapper .radio-input .input-radio:checked:focus,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:focus {
            border-color: #286f94;
        }

        .radio-wrapper .radio-input .input-radio:checked:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:after {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .radio-wrapper .radio-input .input-radio:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: scale(0.2);
            transform: scale(0.2);
            transition: all 0.2s ease-in-out 0.1s;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
        }

        .radio-wrapper .radio-input .input-radio:after {
            width: 4px;
            height: 4px;
            margin-left: -2px;
            margin-top: -2px;
            background-color: #fff;
            border-radius: 50%;
        }

        .radio-wrapper .radio-label,
        .checkbox-wrapper .checkbox-label {
            display: flex !important;
            cursor: pointer !important;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .two-page,
        .checkbox-wrapper .checkbox-label {
            display: flex;
            cursor: pointer;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .radio-label .radio-label-primary,
        .checkbox-wrapper .checkbox-label .checkbox-label-primary {
            display: table-cell;
            width: 100%;
        }

        .radio-wrapper .radio-accessory,
        .checkbox-wrapper .checkbox-accessory {
            display: table-cell;
            padding-left: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper.no-box,
        .checkbox-wrapper.no-box {
            display: block;
        }

        .radio-wrapper.no-box .radio-input,
        .checkbox-wrapper.no-box .checkbox-input {
            display: inline-block;
        }

        .radio-wrapper.no-box .radio-label,
        .checkbox-wrapper.no-box .checkbox-label {
            display: inline-block;
            width: inherit;
        }

        ::selection {
            background: #8a8f6a;
            color: white;
        }


        .btn:not(.btn-disabled):hover {
            /* background: #286f94; */
            color: white;
            filter: brightness(1.2);
        }



        .fieldset {
            margin: -0.45em;
            zoom: 1;
        }

        .fieldset:after,
        .fieldset:before {
            content: "";
            display: table;
        }

        .fieldset:after {
            clear: both;
        }

        .fieldset .field {
            width: 100%;
            float: left;
            padding: 0.45em;
            box-sizing: border-box;
        }

        .fieldset .field .field-input-btn-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-btn {
            width: auto;
            margin-left: 0.9em;
            white-space: nowrap;
            padding-top: 0;
            padding-bottom: 0;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-wrapper {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .fieldset .field .field-input-wrapper {
            position: relative;
        }

        .fieldset .field .field-input-wrapper .field-label {
            font-size: 0.85714em;
            font-weight: normal;
            position: absolute;
            top: 0;
            width: 100%;
            padding: 0 0.93333em;
            z-index: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transform: translateY(3px);
            transform: translateY(3px);
            pointer-events: none;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-sizing: border-box;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
            color: #999999;
            transition: all 0.2s ease-out;
            margin: 0.5em 0;
            margin-top: 0.3em;
            display: block;
        }




        .fieldset .field .field-input-wrapper .field-description {
            display: block;
            margin-left: 25px;
            margin-top: 2px;
        }

        .fieldset .field .field-input-wrapper.field-input-wrapper-select {}

        .fieldset .field .field-input-wrapper.field-input-wrapper-select::before {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMSIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDIxIDE5Ij48dGl0bGU+QXJ0Ym9hcmQgMTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjMDAwIj48Zz48cGF0aCBkPSJNMCAwaDF2MTlIMFYweiIgaWQ9IlNoYXBlIiBmaWxsLW9wYWNpdHk9Ii4xNSIvPjxwYXRoIGQ9Ik0xMSA4aDEwbC01IDUtNS01eiIgZmlsbC1vcGFjaXR5PSIuNSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='), none;
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 50px;
            background-position: center center;
            background-repeat: no-repeat;
            pointer-events: none;
        }

        .fieldset .field .field-message {
            font-size: 0.85714em;
        }

        .fieldset .field .field-message.field-message-error {
            margin: 0;
            display: none;
            margin: 0.75em 0 0.25em;
            transition: all 0.3s ease-out;
            line-height: 1.3em;
            color: #ff6d6d
        }

        .fieldset .field.field-active {}

        .fieldset .field.field-active .field-input-wrapper .field-label {
            color: #737373;
        }

        .fieldset .field.field-show-floating-label {}

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-label {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input {
            padding-top: 1.5em;
            padding-bottom: 0.38em;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-webkit-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-ms-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-error {}

        .fieldset .field.field-error .field-input-wrapper {}

        .fieldset .field.field-error .field-message.field-message-error {
            display: block;
        }

        .wrap {
            margin: 0 auto;
            max-width: 40em;
            zoom: 1;
        }

        .wrap:after {
            clear: both;
        }

        .wrap:after,
        .wrap:before {
            content: "";
            display: table;
        }

        @media (min-width: 1300px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 1000px) {
            .wrap {
                padding: 0 5%;
                width: 90%;
                max-width: 78.57143em;
            }

            .order-summary-toggle {
                display: none;
            }

            .flexbox .content .wrap {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .main {
                width: 52%;
                width: 52%;
                padding-right: 6%;
                /* float: left;*/
            }

            .main .main-header {
                padding-bottom: 1em;
            }

            .main .main-header .logo {
                display: block;
            }

            .main .main-header .breadcrumb {
                margin-top: 1em;
            }

            .sidebar {
                width: 38%;
                padding-left: 4%;
                background-position: left top;
                /* float: right; */
            }

            .sidebar:after {
                left: 0;
                background-position: left top;
                box-shadow: 1px 0 0 #e1e1e1 inset;
            }

            .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
                padding-top: 0;
            }
        }

        @media (max-width: 999px) {
            .content {}

            .content.content-second {
                display: block;
            }

            .wrap {
                width: 100%;
                box-sizing: border-box;
                padding: 0 1em;
            }

            .banner {
                display: block;
            }

            .banner.error {
                padding-bottom: 100px;
            }

            #checkout_order_information_changed_error_message {
                position: absolute;
                top: 60px;
                left: 15px;
                width: calc(100% - 30px);
                margin-bottom: 0 !important;
            }

            .main .main-header .breadcrumb {
                display: none;
            }

            .sidebar .sidebar-content .order-summary.order-summary-is-collapsed {
                height: 0;
                overflow: hidden;
            }
        }

        @media (max-width: 999px) and (min-width: 750px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 750px) {
            h1 {
                font-size: 2em;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 4em;
            }

            .step-footer {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                margin-top: 1.5em;
            }

            .step-footer .step-footer-continue-btn {
                -webkit-flex: 0 0 auto;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                float: right;
            }

            .step-footer .step-footer-previous-link {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
                display: block;
            }

            .step-footer .step-footer-info {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
            }

            .section {
                padding-top: 3em;
            }

            .section.thank-you-checkout-info {
                padding-top: 1.5em;
            }

            .section .section-header {
                margin-bottom: 1.5em;
            }

            .field-half {
                width: 50% !important;
            }

            .field-two-thirds {
                width: 66.66667% !important;
            }

            .field-third {
                width: 33.33333% !important;
            }

            .os-header {
                margin: 0 0 -0.5em !important;
            }

            .icon {}

        }

        @media (min-width: 1000px) {

            .main,
            .sidebar {
                padding-top: 4em;
            }
        }

        .text-center {
            text-align: center;
        }

        @media (max-width: 749px) {
            .modal-container {
                display: block;
            }

            .tool-tip__info,
            .tool-tip {
                display: none !important;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 1.5em;
            }

            .section-header {
                margin-bottom: 1em;
            }

            .text-center {
                text-align: left;
            }

            .btn {
                width: 100%;
                padding-top: 1.75em;
                padding-bottom: 1.75em;
            }

            .step-footer {}

            .step-footer .step-footer-previous-link {
                padding-top: 1.5em;
                text-align: center;
            }

            .step-footer .step-footer-info {
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 1.5em;
                text-align: center;
            }
        }

        .blank-slate {
            white-space: pre-line;
            padding: 1.5em;
            text-align: center;
        }

        .paylater {
            padding: .8em;
            white-space: normal;
        }

        .paylater--ul {
            list-style-type: disc;
            padding: 0 2em;
            padding-right: 1em;
            word-break: break-word;
        }

        .paylater--ul li {
            margin: 5px;
            text-align: justify;
        }

        .blank-slate .blank-slate-icon {
            margin-bottom: 1em;
        }

        .dp-none {
            display: none;
        }

        .dp-inline-block {
            display: inline-block;
        }

        .visually-hidden {
            border: 0;
            clip: rect(0, 0, 0, 0);
            clip: rect(0 0 0 0);
            width: 2px;
            height: 2px;
            margin: -2px;
            overflow: hidden;
            padding: 0;
            position: absolute;
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        .group:after {
            content: "";
            display: table;
            clear: both;
        }

        .pt0 {
            padding-top: 0px !important;
        }

        .mt0 {
            margin-top: 0px !important;
        }

        .mb5 {
            margin-bottom: 5px;
        }

        .hidden {
            display: none !important;
        }

        form#form_update_shipping_method {
            position: relative;
        }

        .step-sections {
            position: relative;
            z-index: 3;
        }

        @media (max-width: 767px) {
            .order-checkout__loading--box {
                position: fixed;
            }

            .order-checkout__loading--box.show:after {
                display: none;
            }
        }

        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .section .section-content #form_update_shipping_method.default .content-box .content-box-row.content-box-row-secondary {
            padding: 0;
            background: transparent;
            border: none !important;
            margin: 0;
            width: 100%;
            display: block;
            box-shadow: unset !important;
        }

        form#form_update_shipping_method.default {
            padding: 0;
        }

        #form_update_shipping_method.default .content-box {
            box-shadow: unset;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

    </style>
    <script src="/public/js/vietnamlocalselector.min.js"></script>
    <script>
        var localpicker = new LocalPicker({
                province: "province",
                district: "district",
                ward: "ward"
            });
        var ls = document.querySelectorAll('select.field-input');
        Array.from(ls).forEach(val => {
            val.onchange = function() {
                // console.log(this.name, this.options[this.selectedIndex].text);
                $(`input[name="customer_${this.name}"`).val(this.options[this.selectedIndex].text)
            }
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
        $("form").submit(function(e) {

            e.preventDefault();
        
            var form = $(this);
            var actionUrl = form.attr('action');
            
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function(data) {
                    location.reload();
                //   alert(data);
                },
                error: function(e) {
                    alert('Đã xẩy ra sự cố!')
                }
            });
            
        });
    </script>
</div>
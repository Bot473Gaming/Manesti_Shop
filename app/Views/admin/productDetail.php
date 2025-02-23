<a href="/admin/products" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt"><?= esc($product->name) ?></h6>
    </div>
    <div class="card-body px-3">
        <div class="h3">Ảnh</div>
        <div id="image" class="d-flex flex-wrap">
            <?php foreach ($product->types as $ix => $pd) : ?>
                <div class="d-flex flex-column ml-4">
                    <label class="add-img" for="input-<?= esc($ix) ?>">
                        <div class="center-block text-center input-2">
                            <input id="input-<?= esc($ix) ?>" name="input[]" type="file" style="display:none" accept="image/*" multiple>
                            <img src="/public/image/<?= esc($pd->image) ?>" id="img-<?= esc($ix) ?>">
                        </div>

                    </label>
                    <a class="text-center del">Xóa</a>
                </div>
            <?php endforeach ?>
            <?php for ($i = count($product->types); $i < 12; $i++) : ?>
                <div class="d-flex flex-column ml-4">
                    <label class="add-img" for="input-<?= esc($i) ?>">
                        <div class="text-center input-2">
                            <input id="input-<?= esc($i) ?>" name="input[]" type="file" style="display:none" accept="image/*" multiple>
                            <img src="" id="img-<?= esc($i) ?>">
                        </div>
                    </label>
                    <a class="text-center del">Xóa</a>
                </div>
            <?php endfor ?>
        </div>
        <!---->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Tên sản phẩm</span>
            </div>
            <input type="text" class="form-control" id="name-val" value="<?= esc($product->name) ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Mã sản phẩm</span>
            </div>
            <input type="text" class="form-control" id="code-val" value="<?= esc($product->code) ?>">
        </div>
        
        <div class="h3">
            Mô tả khái quát
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="10" id="sub-desc-val"><?= esc($product->sub_desc)?></textarea>
        </div>

        <div class="h3">
            Mô tả sản phẩm
        </div>
        <div class="form-group">
            <div class="form-control" rows="10" id="desc-val"><?php echo $product->description; ?></div>
        </div>
            
        <div class="h3 mt-3">
            Danh mục
        </div>
        <select id="tag-val" class="custom-select">
          <option value="-1" <?php if (-1 == $product->tag) {echo "selected";}?>>-- Chọn danh mục --</option>
          <?php foreach($category as $index=>$tag):?>
          <option value="<?=esc($index)?>" <?php if ($index == $product->tag) {echo "selected";}?> ><?=esc($tag->name)?></option>
          <?php endforeach?>
        </select>
        <div class="h3 mt-3">
            Thông tin chi tiết
        </div>
        <table id="tb-detail" class="table table-sm table-bordered tb-hv h5 mt-4">
            <thead>
            <tr>
                <th style="width:30%">Tên thuộc tính</th>
                <th style="width:60%">Thuộc tính</th>
                <th class="text-center"><span id="add-detail" title="Thêm"><i class="fa-solid fa-plus"></i></span></th>
            </tr>
            </thead>
            <tbody class="text-center">
                <!---->
                <?php foreach(json_decode($product->desc_detail) as $dt):?>
                        <tr>
                            <td class="input-group-sm"style="width:30%"><input type="text" class="form-control " value="<?=esc($dt->name)?>" placeholder="Vui lòng nhập"></td>
                            <td class="input-group-sm"style="width:60%"><input type="text" class="form-control " value="<?=esc($dt->ppt)?>" placeholder="Vui lòng nhập"></td>
                            <td style="width:10%"><span class="mr-3 moving-icon"><i class="fa-solid fa-arrows-up-down"></i></span><span class="remove-icon" onclick="rm_detail(this)"><i class="fa-solid fa-trash"></i></span></td>
                        </tr>
                <?php endforeach?>
                <!---->
            </tbody>
        </table>
        <div class="h3 mt-3">
            Màu sắc
        </div>
        <div class="form-check form-check-inline" style="width: 100%;">
            <!---->
            <div style="display: block;width: 100%;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link <?=esc((!!$product->colorMode)?"":"active")?>" id="colorIcon-tab" data-toggle="tab" href="#colorIcon" role="tab" aria-controls="colorIcon" aria-selected="<?=esc(($product->colorMode)?"false":"true")?>">Icon</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=esc((!$product->colorMode)?"":"active")?>" id="colorText-tab" data-toggle="tab" href="#colorText" role="tab" aria-controls="colorText" aria-selected="<?=esc((!$product->colorMode)?"false":"true")?>">Tên màu</a>
                  </li>
                </ul>
                <div class="tab-content" id="colorMode" style="padding: 1rem;">
                  <div class="tab-pane fade <?=esc((!!$product->colorMode)?"":"show active")?>" id="colorIcon" role="tabpanel" aria-labelledby="colorIcon-tab" data-mode="0">
                      <ul style="display: inline-block;padding: 0;">
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="black" id="Filter-color-1" <?php if (in_array('black', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-1" style="background-color: black; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="blue" id="Filter-color-2" <?php if (in_array('blue', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-2" style="background-color: blue; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="gold" id="Filter-color-3" <?php if (in_array('gold', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-3" style="background-color: gold; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="silver" id="Filter-color-silver" <?php if (in_array('silver', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-silver" style="background-color: silver; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="gray" id="Filter-color-4" <?php if (in_array('gray', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-4" style="background-color: gray; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="green" id="Filter-color-5" <?php if (in_array('green', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-5" style="background-color: green; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="magenta" id="Filter-color-6" <?php if (in_array('magenta', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-6" style="background-color: magenta; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="orange" id="Filter-color-9" <?php if (in_array('orange', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-9" style="background-color: orange; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="pink" id="Filter-color-10" <?php if (in_array('pink', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-10" style="background-color: pink; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="purple" id="Filter-color-11" <?php if (in_array('purple', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-11" style="background-color: purple; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="red" id="Filter-color-12" <?php if (in_array('red', $product->color)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                            <label for="Filter-color-12" style="background-color: red; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="violet" id="Filter-color-13" <?php if (in_array('violet', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-13" style="background-color: violet; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color white">
                            <input type="checkbox" name="color[]" value="white" id="Filter-color-14" <?php if (in_array('white', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-14" style="background-color: white; "></label>
                        </li>
                        <li class="form-check form-check-inline swatch-element color">
                            <input type="checkbox" name="color[]" value="yellow" id="Filter-color-15" <?php if (in_array('yellow', $product->color)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label for="Filter-color-15" style="background-color: yellow; "></label>
                        </li>
                    </ul>
                  </div>
                  <!-- Tab Color Text-->
                  <div class="tab-pane fade <?=esc((!$product->colorMode)?"":"show active")?>" id="colorText" role="tabpanel" aria-labelledby="colorText-tab" data-mode="1">
                      <table id="tb-color" class="table table-sm table-bordered tb-hv h5 ml-4" style="width: 50%;">
                          <caption><button id="change" type="button" class="btn btn-primary">OK</button></caption>
                        <thead>
                        <tr>
                            <th class="p-2">Tên màu</th>
                            <th class="text-center" style="width: 86px;"><span id="add-color" title="Thêm"><i class="fa-solid fa-plus"></i></span></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                            <!---->
                                <?php if (!!$product->colorMode):?>
                                <?php foreach($product->color as $cl):?>
                                    <tr>
                                        <td class="input-group-sm"><input type="text" name="color[]" class="form-control " value="<?=esc($cl)?>" placeholder="Vui lòng nhập"></td>
                                        <td><span class="mr-3 moving-icon"><i class="fa-solid fa-arrows-up-down"></i></span><span class="remove-icon" onclick="rm_detail(this)"><i class="fa-solid fa-trash"></i></span></td>
                                    </tr>
                                <?php endforeach?>
                                <?php endif?>
                            <!---->
                        </tbody>
                    </table>
                  </div>
                </div>    
            </div>
            
            <!---->
            
            
        </div>
        <div class="h3">
            Size
        </div>
        <div class="form-check form-check-inline">
            <ul>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="s" id="Filter-size-1" <?php if (in_array('s', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-1">s</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="m" id="Filter-size-2" <?php if (in_array('m', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-2">m</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="l" id="Filter-size-3" <?php if (in_array('l', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-3">l</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="xl" id="Filter-size-4" <?php if (in_array('xl', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-4">xl</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="xxl" id="Filter-size-5" <?php if (in_array('xxl', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-5">xxl</label>
                </li>
                
                <!---->
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="35" id="Filter-size-35" <?php if (in_array('35', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-35">35</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="36" id="Filter-size-36" <?php if (in_array('36', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-36">36</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="37" id="Filter-size-37" <?php if (in_array('37', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-37">37</label>
                </li>
                
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="38" id="Filter-size-38" <?php if (in_array('38', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-38">38</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="39" id="Filter-size-39" <?php if (in_array('39', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-39">39</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="40" id="Filter-size-40" <?php if (in_array('40', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-40">40</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="41" id="Filter-size-41" <?php if (in_array('41', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-41">41</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="42" id="Filter-size-42" <?php if (in_array('42', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-42">42</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="43" id="Filter-size-43" <?php if (in_array('43', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-43">43</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="44" id="Filter-size-44" <?php if (in_array('44', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-44">44</label>
                </li>
                <li class="form-check form-check-inline swatch-element size">
                    <input type="checkbox" name="size[]" value="45" id="Filter-size-45" <?php if (in_array('45', $product->size)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                    <label for="Filter-size-45">45</label>
                </li>
            </ul>
        </div>
        <!--  -->
        <div class="h3 my-3">
            Danh sách phân loại
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Áp dụng cho tất cả</span>
          </div>
          <input type="number" class="form-control" id="qty-for-all" placeholder="Kho" min="0">
          <input type="text" class="form-control" id="sku-for-all" placeholder="SKU phân loại">
          <div class="input-group-append">
            <button class="btn btn-primary" id="btn-for-all">Áp dụng</button>
          </div>
        </div>
        <table id="tb-classify" class="table table-sm table-bordered h5 mt-4">
            <thead>
            <tr>
                <th>Size</th>
                <th>Màu</th>
                <th>Kho hàng</th>
                <th>SKU phân loại</th>
            </tr>
            </thead>
            <tbody class="text-center">
                <!---->
                <?php 
                    if (empty($product->classify)) {
                        $colors = $product->color;
                        $size = $product->size;
                        if (!count($colors)) {
                            $colors = ['non'];
                        }
                        if (!count($size)) {
                            $size = ['non'];
                        }
                        $tcl = [];
                        foreach($colors as $_cl) {
                            $tcl[$_cl] = ["qty" => 0, "sku" => ''];
                        }
                        $product->classify = [];
                        foreach($size as $_sz) {
                            $product->classify[$_sz] = $tcl;
                        }
                    } else {
                        $size = array_keys($product->classify);
                        $colors = array_keys($product->classify[$size[0]]);
                    }
                    $cntCl = count($colors);
                ?>
                <?php foreach($product->classify as $sz=>$cls):?>
                    <tr>
                        <th rowspan="<?=esc($cntCl + 1)?>" class="size"><?=esc(($sz != 'non')?$sz:'(Trống)')?></td>
                    </tr>
                    <?php foreach($cls as $cl=>$val):?>
                        <tr class="<?=esc($sz)?>" data-classify="<?=esc($sz)?>-<?=esc($cl)?>">
                            <td>
                                <?php if ($product->colorMode==1):?>
                                    <?=esc($cl)?>
                                <?php elseif ($cl != 'non'):?>
                                    <div class="row justify-content-center swatch-element color <?=esc($cl)?>">
                                        <label style="background-color: <?=esc($cl)?>; "></label>
                                    </div>  
                                    <?php else:?>
                                        (Trống)
                                <?php endif?>
                            </td>
                            <td class="input-group-sm"><input type="number" class="form-control cl-qty" value="<?=esc($val['qty'])?>" min="0" max="10000"></td>
                            <td class="input-group-sm"><input type="text" class="form-control cl-sku" value="<?=esc($val['sku'])?>" maxlength="15"></td>
                        </tr>
                    <?php endforeach?>
                <?php endforeach?>
                <!---->
            </tbody>
        </table>
        
        <div class="h5 mt-3">
            Màu sắc (ảnh)
        </div>
        <input hidden type="text" class="form-control" id="type-val" value="<?php
                                                                            foreach ($product->types as $ix => $type) {
                                                                                if ($type->cl != null) {
                                                                                    echo "$ix-$type->cl|";
                                                                                }
                                                                            }
                                                                            ?>">
        <div class="row" id="classify">
            <div class="input-group m-3" style="height:0px;width:0px">
            </div>
            <div class="d-flex align-items-center ml-4" style="line-height:100px;width:100px">
                <button class="btn btn-outline-primary rounded-circle" type="button" style="height:50px;width:50px" id="add-classify">+</button>
            </div>
        </div>

        <div class="h3 mt-3">
            Giá
        </div>
        <div class="d-flex mb-3">
            <div class="input-group mr-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Giá gốc</span>
                </div>
                <input type="text" class="form-control" placeholder="0" id="df-money" value="<?= esc($product->price) ?>">
                <div class="input-group-append">
                    <span class="input-group-text">₫</span>
                </div>
            </div>
            <div class="input-group mr-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Sale</span>
                </div>
                <input type="number" class="form-control" placeholder="0" id="sale-money" value="<?= esc($product->sale) ?>" min="0" max="100">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Giá bán</span>
                </div>
                <input type="text" class="form-control" placeholder="0" id="real-money" value="<?= esc($product->sale_price) ?>">
                <div class="input-group-append">
                    <span class="input-group-text">₫</span>
                </div>
            </div>
            
        </div>
        
        <div hidden class="h3 mt-3">
            Kho hàng
        </div>
        <div hidden class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Số lượng</span>
            </div>
            <input type="number" class="form-control" placeholder="0" id="qty-val" value="<?= esc($product->qty) ?>" min="0" max="1000">
        </div>
        <!--  -->
        <div class="h3 mt-3">
            Size Chart
        </div>
        <div class="d-flex flex-wrap">
            <div class="d-flex flex-column  ml-3">
                <label class="add-img" for="input-size-chart">
                    <div class="center-block text-center input-2">
                        <input id="input-size-chart" name="sizeChart" type="file" style="display:none" accept="image/*">
                        <img src="<?=esc($product->size_chart)?>" alt="" style="width:100px;height:100px" id="img-size-chart">
                    </div>
                </label>
                <a class="text-center del">Xóa</a>
            </div>
        </div>
        <!---->
        <div class="input-group-append mt-4">
            <button type="submit" class="btn btn-primary">
                <?php if ($new) {
                    echo "Thêm";
                } else {
                    echo "Cập nhật";
                }
                ?>
            </button>
        </div>
    </div>


    <style>
        .input-2 {
            color: #0075FF;
            font-size: 24px;
            font-weight: 200;
            /*width: 100px;*/
            /*line-height: 100px;*/
            border: 2px dashed #0075FF;
        }

        .swatch-element.color>label {
            background: #666666 none repeat scroll 0 0;
            border: medium none;
            display: block;
            float: left;
            height: 20px;
            /*margin-right: 13px;*/
            /*margin-top: -4px;*/
            padding: 2px;
            position: relative;
            width: 20px;
            border: 1px solid #fff;
        }

        .swatch-element.color.white>label {
            border: 1px solid #999;
        }

        .swatch-element>input {
            display: none;
        }

        .swatch-element.size>label {
            padding: 0 6px;
            text-transform: uppercase;
        }

        input:checked+label {
            outline: 2px solid #666;
        }
        .add-img div{
            min-width:100px;
            min-height:100px;
            background: url(https://manesti.vn/public/image/add.png);
            background-repeat: no-repeat;
            background-size: 100px 100px;
        }
        .add-img img[src=''] {
            display:none;
        }
        .add-img {
            cursor: pointer;
        }
        .add-img img {
            cursor: move;
            width:100px;
            height:100px;
        }
        .top {z-index: 2; position: relative}
        .bottom {z-index: 1; position: relative}
        table input {
            border: none;
            text-align: center;
        }
        table th, table td {
            vertical-align: middle !important;
        }
        label {
            margin: 0 !important;
        }
        .size {
            text-transform: uppercase;
        }
        table input {
            border:none !important;
        }
        a {
            cursor: pointer;
        }
        .form-check label {
            cursor: pointer;
        }
        .tb-hv tr span:hover{
            filter: brightness(0.5);
        }
        .moving-icon {
            cursor: n-resize;
        }
        .ui-sortable-helper {
            display: table;
        }
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
        
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/super-build/ckeditor.js"></script>
    <script>
        var editor;
        CKEDITOR.ClassicEditor
            .create(document.getElementById("desc-val"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    }, {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    }, {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    }, {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    }, {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    }, {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    }, {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }]
                },
                placeholder: 'Nhập mô tả ...',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType'
                ]
            })
            .then( newEditor => {
                editor = newEditor;
            } )
    </script>
    <script>
        // Call the productTables jQuery plugin
        function rm_detail(tg) {
            $(tg).closest('tr').remove()
        } 
        document.addEventListener("DOMContentLoaded", () => {
            $( "#tb-detail tbody" ).sortable({ handle: '.moving-icon', axis: 'y'});
            $( "#tb-color tbody" ).sortable({ handle: '.moving-icon', axis: 'y'});
            $('#add-detail').click(e => {
                $('#tb-detail tbody').append(`<tr>
                            <td class="input-group-sm"style="width:30%"><input type="text" class="form-control " value="" placeholder="Vui lòng nhập"></td>
                            <td class="input-group-sm"style="width:60%"><input type="text" class="form-control " value="" placeholder="Vui lòng nhập"></td>
                            <td style="width:10%"><span class="mr-3 moving-icon"><i class="fa-solid fa-arrows-up-down"></i></span><span class="remove-icon" onclick="rm_detail(this)"><i class="fa-solid fa-trash"></i></span></td>
                        </tr>`)
            });
            $('#add-color').click(e => {
                $('#tb-color tbody').append(`<tr>
                            <td class="input-group-sm"><input type="text" name="color[]" class="form-control " value="" placeholder="Vui lòng nhập"></td>
                            <td><span class="mr-3 moving-icon"><i class="fa-solid fa-arrows-up-down"></i></span><span class="remove-icon" onclick="rm_detail(this)"><i class="fa-solid fa-trash"></i></span></td>
                        </tr>`)
            });
            $('a.del').click(e => {
                e.preventDefault();
                (e.target.parentElement).querySelector('img').setAttribute('src', '');
                (e.target.parentElement).querySelector('input').value = null;
            })
            function readAndReader(fl, id) {
                const render = new FileReader();  

                render.readAsDataURL(fl);
                render.onload = function(e) {
                    $('#img-' + id).attr('src', e.target.result);
                }
            }
            $('input[type="file"]').change(e => {
                var fileInput = e.target.files;
                // console.log(fileInput);
                var id = e.target.id.replace('input-', '');
                var td = fileInput.length - 1;
                if (fileInput) {
                    if (id == 'size-chart') {
                        readAndReader(fileInput[0], id);
                    } else {
                        for (let i = +id, j = 0;i<12, j <= td;i++, j++) {
                            while(i < 10 && !!$($('#input-' + i).closest('div').children('img')).attr('src')) {
                                i++;
                            }
                            if (i>=12) {
                                return;
                            }
                            var fl = fileInput[j]
                            readAndReader(fl, i);
                            let tm = new DataTransfer();
                            tm.items.add(fl); 
                            // console.log(tm);
                            $('#input-' + i).prop('files', tm.files);
                        }
                    }
                }

            })
            $('input[type=file]').click(e => {
                var img = $(e.currentTarget).closest('div').children('img')
                if (!!(img.attr('src'))) {
                    e.preventDefault();
                }
            })
            // Classify
            $('input[type="checkbox"], #change').click(e => {
                var colorMode = +$("#colorMode>.active").attr("data-mode");
                var sizes  = Array.from($('input[name="size[]"]:checked')).map(e => $(e).val());
                var colors = Array.from($('input[name="color[]"]:checked')).map(e => $(e).val());
                if (colorMode) {
                    colors=Array.from($('#colorText input[name="color[]"]')).map((e)=> $(e).val());
                    $('#colorIcon input[name="color[]"]:checked').each((i,e) => $(e).attr('checked', false ))
                }
                var html = '';
                if (!colors.length || !colors[0]) {
                    colors = ['non'];                        
                }
                if (!sizes.length) {
                    sizes = ['non'];                        
                }
                for(let sz of sizes) {
                    html +=`<tr>
                        <th rowspan="${colors.length + 1}" class="size">${(sz != 'non')?sz:'(Trống)'}</td>
                    </tr>`;
                    for(let cl of colors) {
                        html += `<tr class="${sz}" data-classify="${sz}-${cl}">
                                <td>
                                    ${(colorMode)?cl: `${(cl != 'non')?`<div class="row justify-content-center swatch-element color ${cl}">
                                        <label style="background-color: ${cl}; "></label>
                                    </div>`:'(Trống)'}`
                                    }
                                    
                                </td>
                                <td class="input-group-sm"><input type="number" class="form-control cl-qty" value="0" min="0" max="10000"></td>
                                <td class="input-group-sm"><input type="text" class="form-control cl-sku" value="" maxlength="15"></td>
                            </tr>`;   
                    }
                }
                $('#tb-classify tbody').html(html);
            });
            
            $('#btn-for-all').click(e => {
                var qty = $('#qty-for-all').val();
                var sku = $('#sku-for-all').val();
                // console.log([qty, sku])
                if (!!qty || qty === 0) {
                    $('.cl-qty').val(qty);
                }
                if (!!sku) {
                    $('.cl-sku').val(sku);
                }
            })
            // Money
            $('#df-money').val(Intl.NumberFormat('vi-VN').format($('#df-money').val()));
            $('#real-money').val(Intl.NumberFormat('vi-VN').format($('#real-money').val()));
            $('#df-money, #real-money').on('input, change', e => {
                var val = e.target.value.replaceAll(' ', '').replaceAll('.', '');
                e.target.value = Intl.NumberFormat('vi-VN').format(val.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'))
            })
            $('#df-money').on('input', function(e) {
                var old = $('#df-money')
                    .change()
                    .val().replaceAll('.', '')
                var sale = $('#sale-money').val();
                var np = old - (+old * +sale) / 100;
                $('#real-money')
                    .val(np)
                    .change();
            })
            $('#sale-money').on('input', e => {
                var old = $('#df-money').val().replaceAll('.', '');
                var sale = $('#sale-money').val();
                if (+sale < 0 || sale == 'NaN') {
                    sale = 0;
                } else if (+sale > 100) {
                    sale = 100;
                }
                $('#sale-money').val(sale);
                var np = old - (+old * +sale) / 100;
                $('#real-money')
                    .val(np)
                    .change();
            });
            $('#real-money').on('input', e => {
                var old = $('#df-money').val().replaceAll('.', '');
                var real = $('#real-money')
                    .change()
                    .val().replaceAll('.', '')
                if (+real < 0 || real == 'NaN') {
                    real = 0;
                } else if (+real > +old) {
                    real = old;
                }
                $('#real-money')
                    .val(real)
                    .change()
                var sale = 100 - parseInt((+real/+old)*100);
                $('#sale-money').val(sale);
            });
            
            $('#add-classify').click(e => {
                $('#classify div.input-group').last().after(`<div class="input-group ml-4" style="height:100px;width:100px">
                <button type="button" class="close pull-right" aria-label="Close"  onclick="f(this)">
                    <span aria-hidden="true">&times;</span>
                </button>
                <select class="input-group" name="color-link" id="">
                </select>

                <select class="input-group" name="image-link" id="">
                </select>
            </div>`);
                ff();
            })
            var types = $('#type-val').val();
            types = types.split('|');
            types.pop();
            types.forEach(e => {
                e = e.split('-');
                let cl = e.pop();
                let im = e.pop();
                $('#classify div.input-group').last().after(`<div class="input-group ml-4" style="height:100px;width:100px">
                <button type="button" class="close pull-right" aria-label="Close"  onclick="f(this)">
                    <span aria-hidden="true">&times;</span>
                </button>
                <select class="input-group" name="color-link" id="" val="${cl}">
                </select>

                <select class="input-group" name="image-link" id="" val="${im}">
                </select>
            </div>`);
                ff();
            })

            // $('#classify').on('DOMSubtreeModified', function(e){
            // console.log(e);
            // });
            ff();

            function ff() {
                let img = [];
                let color;
                let colorMode = +$("#colorMode>.active").attr("data-mode");
                if (colorMode) {
                    color = Array.from($('#colorText input[name="color[]"]')).map(e => (`<option value="${e.value}" ${($('select[name="color-link"]').last().attr('val') == e.value)?'selected':''}>${e.value}</option>`)).join('\n');
                } else
                    color = Array.from($('input[name="color[]"]:checked')).map(e => (`<option value="${e.value}" style="background-color: ${e.value}"${($('select[name="color-link"]').last().attr('val') == e.value)?'selected':''}>${e.value}</option>`)).join('\n');
                Array.from($('#image img')).forEach((e, i) => {
                    if ($(e).attr('src') != '') {
                        img.push((`<option value="${i}" ${($('select[name="image-link"]').last().attr('val') == i)?'selected':''}>-Ảnh ${i+1}-</option>`))
                    }
                });
                $('select[name="color-link"]').last().html(color);
                $('select[name="image-link"]').last().html(img.join('\n'));
            }
            function ChangeToSlug(slug) {
                slug = slug.toLowerCase();
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                slug = slug.replace(/\s+/g, "-");
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                return slug;
            }
            function itemInSpot(drag_item, spot) {
                var item = $(spot).children('img');
                var file = $(spot).children('input');
                var file_move = $(drag_item).closest('div').children('input');
                var sr = $(item).attr('src');
                item.attr('src', drag_item.attr('src')).attr('class', drag_item.attr('class'))
                $(drag_item).removeAttr('style');
                $(drag_item).css("position", "relative");
                $(drag_item).attr('src', sr);
                let temp = $(file_move).prop('files');
                $(file_move).prop('files', $(file).prop('files'));
                $(file).prop('files', temp);
            }
            
            $(document).ready(function() {
                var a = 3;
                $("#image img").draggable({
                    start: function(event, ui) { $(this).css("z-index", a++); },
                    revert: 'invalid'
                });
                $('.add-img div').droppable();
                $('.add-img div').bind('drop', function(ev, ui) {
                    itemInSpot(ui.draggable, this);
                });
                $('#image img').click(function() {
                    $(this).addClass('top').removeClass('bottom');
                    $(this).siblings().removeClass('top').addClass('bottom');
                    $(this).css("z-index", a++);
            
                });
            });
            $('button[type="submit"]').click(e => {
                e.preventDefault();
                var formData = new FormData();
                var sku, name, tag, price, sale, sale_price, types, colorMode, color, size, desc, sub_desc, size_chart, link, qty, slug, imgs;
                imgs = JSON.stringify(Array.from($('#image img')).map(e => e.src.includes('/public/image/')?e.src.split('/').pop(): false));
                link = JSON.stringify(Array.from($('select[name="color-link"]')).map((e, i) => (`${$('select[name="image-link"]')[i].value}-${e.value}`)));
                var ok = {};
                let isOK = 0;
                colorMode = +$("#colorMode>.active").attr("data-mode");
                
                Array.from($('.card-body #image img')).forEach((e, i) => {
                    ok[i] = !!($(e).attr('src'))
                    isOK += !!(ok[i]);
                });
                formData.append('ok-img', JSON.stringify(ok));
                code     = $('#code-val').val();
                name    = $('#name-val').val();
                tag     = $("#tag-val").val();
                slug    = ChangeToSlug(name);
                price   = $('#df-money').val().replaceAll('.', '');
                sale    = $('#sale-money').val();
                sale_price = $('#real-money').val().replaceAll('.', '');
                color   = JSON.stringify((colorMode)?Array.from($('#colorText input[name="color[]"]')).map((e)=> e.value):Array.from($('input[name="color[]"]:checked')).map(e => (e.value)));
                size    = JSON.stringify(Array.from($('input[name="size[]"]:checked')).map(e => (e.value)));
                desc    = editor.getData();
                sub_desc = $('#sub-desc-val').val();
                size_chart= ($('#img-size-chart').attr('src') != '')?$('#img-size-chart').attr('src'):'';
                qty  = $('#qty-val').val();
                Array.from($('input[name="input[]"]')).forEach((e, i) => {
                    if (!!$(e).prop('files')[0]) {
                        formData.append('file-' + i, $(e).prop('files')[0])
                    }
                })
                if (!isOK) {
                    alert('Sản phẩm phải có tối thiểu 1 ảnh');
                    return;
                }
                if (!slug) {
                    alert('Sản phẩm phải có tên');
                    return;
                }
                var sizes = $('input[name="size[]"]:checked');
                var colors = (colorMode)?Array.from($('#colorText input[name="color[]"]')).map(e => ({value:e.value})):$('input[name="color[]"]:checked');
                if (!colors.length) {
                    colors = [{value:['non']}];                        
                }
                if (!sizes.length) {
                    sizes = [{value:['non']}];                        
                }
                var desc_detail = Array.from($('#tb-detail tbody tr')).map(e => {
                    var val = $(e).find('input');
                    if (!!val.eq(0).val().trim() && !!val.eq(1).val().trim()) {
                        return {name:val.eq(0).val().trim(), ppt:val.eq(1).val().trim()};   
                    }
                }).filter(e => !!e);
                
                var classify = {};
                var nosku = true;
                Array.from(sizes).forEach(i => {
                    classify[i.value] = {}; 
                    Array.from(colors).forEach(j => {
                        var inp = $("tr[data-classify=\"" + i.value + "-" + j.value + "\"] input");
                        var qty  = +inp.eq(0).val();
                        var sku  = inp.eq(1).val();
                         // console.log(qty, sku);
                        if (!sku) {
                            nosku = false;
                            return;
                        }
                         classify[i.value][j.value] = {
                            qty,
                            sku,
                        }   
                     })
                })
                if (!nosku) {
                    alert('Không được bỏ trống phần SKU phân loại');
                    return;        
                }
                // console.log(JSON.stringify(classify))
                formData.append('code', code);
                formData.append('name', name);
                formData.append('slug', slug);
                formData.append('tag', tag);
                formData.append('price', price);
                formData.append('sale', sale);
                formData.append('sale_price', sale_price);
                formData.append('qty', qty);
                formData.append('colorMode', colorMode);
                formData.append('color', color);
                formData.append('size', size);
                formData.append('classify', JSON.stringify(classify));
                formData.append('description', desc);
                formData.append('sub_desc', sub_desc);
                formData.append('desc_detail', JSON.stringify(desc_detail));
                formData.append('size_chart', size_chart);
                formData.append('link', link);
                formData.append('imgs', imgs);

                $.ajax({
                    url: location.href + '/update',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        // alert('Cập nhật sản phẩm thành công')
                        
                        // console.log(res);
                         <?php if ($new) {
                            echo "location.href = location.protocol + '//' + location.host + '/admin/products';";
                        }
                        ?>
                        
                    },
                    error: function(res) {
                        console.log(res);
                        // $('#msg').html(response);
                    }
                });

            })
        });

        function f(e) {
            e.parentElement.remove();

        }
    </script>

</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="btn-toolbar">
                <select id="action" class="custom-select mr-2" aria-label="Default select example" style="width:248px">
                    <option value selected>-- Hành Động --</option>
                    <option value="delete">Xóa</option>
                </select>
                <button type="submit" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#xacnhan" disabled>Apply</button>
                <a href="products/new" class="btn btn-primary mb-3 ml-auto">Thêm sản phẩm</a>
            </div>
            <table class="table table-bordered hover" id="productTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="center-block text-center"><input type="checkbox" value="" id="checkboxall"></th>
                        <th hidden></th>
                        <th style="width:70px">Ảnh bìa</th>
                        <th>MSP</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Sale</th>
                        <th>Màu sắc</th>
                        <th>Size</th>
                        <th>Đã bán</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th hidden></th>
                        <th style="width:70px">Ảnh bìa</th>
                        <th>MSP</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Sale</th>
                        <th>Màu sắc</th>
                        <th>Size</th>
                        <th>Đã bán</th>
                        <th>Chi tiết</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($products as $pd) : ?>
                        <tr>
                            <th class="center-block text-center"><input type="checkbox" value="" name="ckbox[]"></th>
                            <td hidden><?= esc($pd->_id) ?></td>
                            <td class="center-block text-center"><img src="/public/image/<?= esc(json_decode($pd->types)[0]->image) ?>" alt="" style="width:70px;height:70px"></td>
                            <td><?= esc($pd->code) ?></td>
                            <td><?= esc($pd->name) ?></td>
                            <td><?= esc($category[$pd->tag]->name) ?></td>
                            <td><?php
                                if ($pd->sale > 0) {
                                    echo '<span class="old-price"> <span class="money">' . $pd->price . '</span></span>';
                                    echo '<span class="new-price"> <span class="money">' . $pd->sale_price . '</span></span>';
                                } else {
                                    echo '<span class="new-price"> <span class="money">' . $pd->price . '</span></span>';
                                }
                                ?></td>
                            <td><?= esc($pd->sale) ?>%</td>
                            <td class="color"><?php
                                                foreach (json_decode($pd->color) as $cl) {
                                                    if (!!$pd->colorMode)
                                                        echo "$cl, ";
                                                    else
                                                        echo '<span class="color-d" style="background-color: '.$cl.';"></span>';
                                                }
                                                ?></td>
                            <td><?php
                                foreach (json_decode($pd->size) as $sz) {
                                    echo "$sz, ";
                                }
                                ?></td>
                            <td><?= esc($pd->sold) ?></td>
                            <td class="center-block text-center"><a href="products/<?= esc($pd->_id) ?>" class="btn btn-primary">Chi tiết</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="modal fade" id="xacnhan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận hành động</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    Xác nhận hành động!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .old-price {
            text-decoration: line-through;
            font-size: 14px;
            margin-right: 4px;
        }
        .color-d {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 10rem;
            margin-right: 4px;
            border: 1px solid;
        }
    </style>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script>
        // Call the productTables jQuery plugin
        document.addEventListener("DOMContentLoaded", () => {
            $('input[name="ckbox[]"]').click(e => {
                var val = $('input[name="ckbox[]"]:checked').length === $('input[name="ckbox[]"]').length;
                $('#checkboxall').prop('checked', val);
                if (!!$('#action').val() && $('input[name="ckbox[]"]:checked').length > 0) {
                    $('button[type="submit"]').removeAttr('disabled');
                } else {
                    $('button[type="submit"]').attr('disabled', 'disabled');
                }
            })
            $('#checkboxall').click(e => {
                var val = e.currentTarget.checked;
                $('input[name="ckbox[]"]').prop('checked', val);
                if (!!$('#action').val() && $('input[name="ckbox[]"]:checked').length > 0) {
                    $('button[type="submit"]').removeAttr('disabled');
                } else {
                    $('button[type="submit"]').attr('disabled', 'disabled');
                }
            })
            $('#action').on('change', e => {
                if (!!e.target.value && $('input[name="ckbox[]"]:checked').length > 0) {
                    $('button[type="submit"]').removeAttr('disabled');
                } else {
                    $('button[type="submit"]').attr('disabled', 'disabled');
                }
            })
            $('#productTable').DataTable({
                "columns": [
                    {
                        "orderable": false,
                        "searchable": false,
                    },
                    {
                        "orderable": false,
                        "searchable": false,
                    },
                    {
                        "orderable": false,
                        "searchable": false,
                    },
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    {
                        "orderable": false,
                        "searchable": false,
                    },
                ],
                "order": [
                        // [1, 'asc']
                    ],
            });
            $("#btn-submit").click(e => {
                e.preventDefault();
                var cb = Array.from($('input[name="ckbox[]"]:checked').parent().parent());
                cb     = cb.map(val => val.cells[1].innerText);
                // console.log(act)
                
                $.ajax({
                    type: 'POST',
                    url: '/admin/products/delete',
                    data: {
                        pd_id: JSON.stringify(cb),
                    },
                    cache: false,
                    success: function(data) {
                        // alert(data)
                        // console.log(data)
                        location.reload();
                    },
                    error: function(err) {
                        // console.log(err)
                        // location.reload();
                    }
                })
            })
        });
    </script>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold h5 text-primary stt"><strong><?= esc($tab) ?></strong></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="btn-toolbar">
                <select class="custom-select mr-2" id="action" style="width:248px">
                    <option value="" selected>-- Hành Động --</option>
                    <option value="nextStep">Bước tiếp theo</option>
                    <option value="cancel">Hủy</option>
                    <option value="delete">Xóa</option>
                </select>
                <button type="submit" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#xacnhan" disabled>Apply</button>
            </div>
            <table class="table table-bordered hover" id="orderTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="center-block text-center cbs"><input type="checkbox" value="" id="checkboxall"></th>
                        <th>ID</th>
                        <th>Sản phẩm</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ nhận</th>
                        <th>Tổng tiền</th>
                        <th>Tạo lúc</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Sản phẩm</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ nhận</th>
                        <th>Tổng tiền</th>
                        <th>Tạo lúc</th>
                        <th>Trạng thái</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($orders as $od) : ?>
                        <tr>
                            <td class="center-block text-center cbs"><input type="checkbox" value="" name="ckbox[]"></th>
                            <td class="_id" value="<?= esc($od->_id) ?>"><?= esc('#'.str_pad($od->_id, 6, '0', STR_PAD_LEFT)) ?></td>
                            <td class="pds">
                            <div class="pds-detail">
                            <?php
                            $pds = json_decode($od->pds);
                            $len = count($pds) - 1;
                            foreach ($pds as $index=>$pd):?>
                                <div class="d-flex">
                                    <img src="/public/image/<?=esc($pd->image)?>" alt="" style="width:70px;height:70px">
                                    <div class="col">
                                        <p style="margin-bottom: 0;"><?= esc($pd->name)?> - <span>SKU: <?= esc($pd->sku)?></span> </p>
                                        <small><?= esc($pd->size)?> / <?= esc($pd->color)?></small>
                                        <p style="margin-bottom: 0;"><strong>x<?= esc($pd->qty)?></strong></p>
                                    </div>
                                </div>
                                <?php if ($index < $len):?>
                                <hr>
                                <?php endif?>
                            <?php endforeach?>
                            </div>
                            <div class="overview show-pd">
                            <?php foreach ($pds as $index=>$pd):?>
                                <div style="margin-bottom: 0;">[<strong>x<?= esc($pd->qty)?></strong>] <?= esc($pd->name)?> - <span>SKU: <?= esc($pd->sku)?></span>, <small><?= esc($pd->size)?> / <?= esc($pd->color)?></small></div>
                            <?php endforeach?>
                            </div>
                            </td>
                            <td><?= esc($od->customer_name) ?></td>
                            <td type="string">&nbsp;<?= esc($od->customer_phone) ?></td>
                            <td><?= esc($od->customer_email) ?></td>
                            <td><?= esc($od->customer_address) ?></td>
                            <td type="string" class="money">&nbsp;<?= esc($od->grossAmount) ?></td>
                            <td><?= esc($od->createAt) ?></td>
                            <td class="stt"><strong> <?= esc($od->status) ?></strong></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <button class="btn btn-success" id="btn-exp">Xuất File Excel</button>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pds {
            cursor: pointer;
        }
        .show-pd {
            display:block !important;
        }
        .overview, .pds-detail {
            display:none;
        }
    </style>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <!-- <script src="/vendor/js/jquery.table2excel.min.js"></script> -->
    <script>
        // all, waiting, shipping, delivered, cancel
        document.addEventListener("DOMContentLoaded", () => {
            $('.overview, .pds-detail').click((e, ix) => {
                var val = $(e.currentTarget);
                $(val.parent()).children('div').not('.show-pd').addClass('show-pd');
                val.removeClass('show-pd');
            });
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
                $('input[name="ckbox[]"]').prop('checked', val);;
                if (!!$('#action').val() && $('input[name="ckbox[]"]:checked').length > 0) {
                    $('button[type="submit"]').removeAttr('disabled');
                } else {
                    $('button[type="submit"]').attr('disabled', 'disabled');
                }
            })
            $('#orderTable').DataTable({
                "columns": [{
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
                    [1, 'asc']
                ],
            });
            var arr = {
                "all": "Tất cả",
                "waiting": "Chờ xác nhận",
                "processed": "Chờ lấy hàng",
                "shipping": "Đang giao",
                "delivered": "Đã giao",
                "cancel": "Hủy",
            }
            Array.from($('.stt strong')).forEach(e => {
                var val = e.innerText.toLocaleLowerCase().trim();
                var res = arr[val];
                e.innerText = res;
            })
            $('#action').on('change', e => {
                if (!!e.target.value && $('input[name="ckbox[]"]:checked').length > 0) {
                    $('button[type="submit"]').removeAttr('disabled');
                } else {
                    $('button[type="submit"]').attr('disabled', 'disabled');
                }
            })
            $("#btn-submit").click(e => {
                e.preventDefault();
                var cb = Array.from($('input[name="ckbox[]"]:checked').parent().parent());
                cb = cb.map(val => $(val.cells[1]).attr('value'));
                var act = $('#action').val();
                // console.log(act)

                $.ajax({
                    type: 'POST',
                    url: '/admin/order/handle',
                    data: {
                        orders_id: JSON.stringify(cb),
                        act,
                    },
                    cache: false,
                    success: function(data) {
                        // alert(data)
                        location.reload();
                    },
                    error: function(err) {
                        alert('Đã xẩy ra sự cố')
                        console.log(err)
                        // location.reload();
                    }
                })
            })
            $(function() {
                $('#btn-exp').click(function() {
                    var copyTable = $("#orderTable").clone(false).attr('id', '_copy_orderTable');
                    copyTable.insertAfter($("#orderTable"))
                    copyTable.find('.pds-detail, .cbs, tfoot').remove()
                
                      copyTable.table2excel({
                        name: "Đơn hàng - " + String(new Date()),
                        filename: "Đơn Hàng - " + String(new Date()) + ".xls",
                        fileext: ".xls",
                        preserveColors: false
                    })
                    copyTable.remove();
                    
                })
            })


        })
    </script>
</div>
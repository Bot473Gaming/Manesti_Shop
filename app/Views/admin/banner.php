<a href="/admin" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Banner</h6>
    </div>
    <div class="card-body">
        <div class="h3">Banner</div>
        <div class="d-flex flex-wrap">
            <?php foreach ($banner as $ix => $bn) : ?>
                <div class="d-flex flex-column">
                    <label for="input-<?= esc($ix) ?>">
                        <div class="text-center ml-3 input-2">
                            <input id="input-<?= esc($ix) ?>" name="image[]" type="file" style="display:none">
                            <img src="/public/image/<?= esc($bn->image) ?>" alt="" style="width:200px;height:100px" id="img-<?= esc($ix) ?>">
                        </div>

                    </label>
                    <a class="text-center del">Xóa</a>
                </div>
            <?php endforeach ?>
            <?php for ($i = count($banner); $i < 6; $i++) : ?>
                <div class="d-flex flex-column">
                    <label for="input-<?= esc($i) ?>">
                        <div class="text-center ml-3 input-2">
                            <input id="input-<?= esc($i) ?>" name="image[]" type="file" style="display:none">
                            <img src="/public/image/add.png" alt="" style="width:200px;height:100px" id="img-<?= esc($i) ?>">
                        </div>
                    </label>
                    <a class="text-center del">Xóa</a>
                </div>
            <?php endfor ?>
        </div>

        <div class="input-group mt-4">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
    <style>
        .input-2 {
            color: #0075FF;
            font-size: 24px;
            font-weight: 200;
            /*width: 200px;*/
            /*line-height: 100px;*/
            border: 2px dashed #0075FF;
        }

        .swatch-element.color>label {
            background: #666666 none repeat scroll 0 0;
            border: medium none;
            display: block;
            float: left;
            height: 20px;
            margin-right: 13px;
            margin-top: -4px;
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
        }

        input:checked+label {
            outline: 2px solid #666;
        }
    </style>
    <script>
        // Call the productTables jQuery plugin
        document.addEventListener("DOMContentLoaded", () => {
            $('a.del').click(e => {
                e.preventDefault();
                (e.target.parentElement).querySelector('img').setAttribute('src', '/public/image/add.png');
            })
            $('input[type="file"]').change(e => {
                var fileInput = e.target.files;
                console.log([e.target])
                var id = e.target.id.replace('input-', '');
                if (fileInput && fileInput[0]) {
                    var render = new FileReader();
                    render.readAsDataURL(fileInput[0]);

                    render.onload = function(e) {
                        $('#img-' + id).attr('src', e.target.result);
                    }
                }

            })
            $('button[type="submit"]').click(e => {
                e.preventDefault();
                var formData = new FormData();
                var ok = {};
                Array.from($('.card-body img')).forEach((e, i) => {
                    ok[i] = !(String(e.src.split(location.host).pop()).startsWith('/public/image/add'))
                });
                formData.append('ok-img', JSON.stringify(ok));
                Array.from($('input[name="image[]"]')).forEach((e, i) => {
                    if (!!$(e).prop('files')[0]) {
                        formData.append('file-' + i, $(e).prop('files')[0])
                    }
                })
                $.ajax({
                    url: '/admin/banner/update',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        // alert('Cập nhật Banner thành công')
                        // location.reload();
                        console.log(res);
                        // $('#msg').html(response);
                    },
                    error: function(res) {
                        console.log(res);

                        // $('#msg').html(response);
                    }
                });

            })
        });
    </script>

</div>
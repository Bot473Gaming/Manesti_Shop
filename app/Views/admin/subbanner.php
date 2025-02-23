<a href="/admin" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Banner phụ</h6>
    </div>
    <div class="card-body">
        <div class="h3">Banner phụ (3)</div>
        <div class="d-flex flex-wrap">
            <?php foreach ($subbanner as $ix => $bn) : ?>
                <div class="d-flex flex-column mr-3">
                    <label for="input-<?= esc($ix) ?>">
                        <div class="text-center input-2">
                            <input id="input-<?= esc($ix) ?>" name="image[]" type="file" style="display:none">
                            <?php if ($bn->image != ''):?> 
                            <img src="/public/image/<?= esc($bn->image) ?>" alt="" style="max-width:280px;height:120px" id="img-<?= esc($ix) ?>">
                            <?php else:?>
                                <img src="/public/image/add.png" alt="" style="width:200px;height:100px" id="img-<?= esc($ix) ?>">
                            <?php endif?>
                        </div>
                    </label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">manesti.vn/</span>
                        </div>
                        <input type="text" class="form-control url" value="<?= esc($bn->url) ?>">
                    </div>
                    <a class="text-center del">Xóa</a>
                </div>
                <?php if ($ix == 2):?> 
        </div>
        <div class="h3">Banner phụ (2)</div>
        <div class="d-flex flex-wrap">
                <?php endif?>
            <?php endforeach ?>
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

        .swatch-element>input {
            display: none;
        }
    </style>
    <script>
        // Call the productTables jQuery plugin
        document.addEventListener("DOMContentLoaded", () => {
            $('a.del').click(e => {
                e.preventDefault();
                (e.target.parentElement).querySelector('input').value = '';
                (e.target.parentElement).querySelector('img').setAttribute('src', '/public/image/add.png');
                (e.target.parentElement).querySelector('.url').value = '';
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
                var ok = {}, url;
                Array.from($('.card-body img')).forEach((e, i) => {
                    ok[i] = !(String(e.src.split(location.host).pop()).startsWith('/public/image/add'))
                });
                formData.append('ok-img', JSON.stringify(ok));
                Array.from($('input[name="image[]"]')).forEach((e, i) => {
                    if (!!$(e).prop('files')[0]) {
                        formData.append('file-' + i, $(e).prop('files')[0])
                    }
                })
                url = $('.url').map((index, e) => $(e).val()).get();
                formData.append('url', JSON.stringify(url));
                $.ajax({
                    url: '/admin/subbanner/update',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        // alert('Cập nhật Sub Banner thành công')
                        // location.reload();
                        console.log(res);
                        // $('#msg').html(response);
                    },
                    error: function(res, a, b) {
                        console.log(res,a,b);

                        // $('#msg').html(response);
                    }
                });

            })
        });
    </script>

</div>
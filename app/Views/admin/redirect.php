<a href="/admin" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Chuyển hướng</h6>
    </div>
    <div class="card-body">
        <div id="redirect-box">
            <?php foreach($redirect as $rd):?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><a href="/redirect/<?= esc($rd->url) ?>" target="_blank"><i class="fas fa-fw fa-external-link"></i></a></span>
                        <span class="input-group-text">manesti.vn/redirect/ </span>
                    </div>
                    <input type="text" class="form-control url-val" placeholder="Url" value="<?= esc($rd->url) ?>">
                    <input type="text" class="form-control redirect-val" placeholder="Trang đích" value="<?= esc($rd->redirect) ?>">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" onclick="del(this)">Xóa</button>
                    </div>
                </div>
            <?php endforeach?>
        </div>    
        <button id="btn-add" class="btn btn-outline-secondary" type="button">Thêm</button>        
        <div class="input-group mt-4">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
    <script>
        // Call the productTables jQuery plugin
        function del(elm) {
            $(elm).closest('.input-group').remove();
        }
        document.addEventListener("DOMContentLoaded", () => {
            $('#btn-add').click(e => {
                $('#redirect-box').append(`
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">manesti.vn/redirect/ </span>
                    </div>
                    <input type="text" class="form-control url-val" placeholder="Url" value="">
                    <input type="text" class="form-control redirect-val" placeholder="Trang đích" value="">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" onclick="del(this)">Xóa</button>
                    </div
                    </div>
                </div>
                `);  
            });
            
            $('button[type="submit"]').click(e => {
                e.preventDefault();
                var formData = new FormData();
                var val = Array.from($('#redirect-box').find('.input-group')).map((e) => {
                    var tg = $(e).find('input');
                    return {
                        'url': tg[0].value,
                        'redirect': tg[1].value
                    }
                }).filter(e => !!e.url && !!e.redirect);
                
                formData.append('val', JSON.stringify(val));
                
                $.ajax({
                    url: '/admin/redirect',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        // alert('Cập nhật trang chuyển hướng thành công');
                        $('#redirect-box .input-group').each((i, e) => {
                        var isOk = !!($(e).children('.input-group-prepend').find('a').length);
                        if (!isOk) {
                            var url = $(e).children('.url-val').val();
                            var rd  = $(e).children('.redirect-val').val();
                            if (!!url && !!rd) {
                                $(e).children('.input-group-prepend').prepend(`<span class="input-group-text"><a href="/redirect/${url}" target="_blank"><i class="fas fa-fw fa-external-link"></i></a></span>`);   
                            }
                        }
})
                        // console.log(res);
                    },
                    error: function(res, a, b) {
                        // alert('Cập nhật trang chuyển hướng không thành công');
                        console.log(res,a,b);

                        // $('#msg').html(response);
                    }
                });

            })
        });
    </script>
</div>
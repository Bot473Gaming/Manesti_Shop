<a href="/admin" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Kiot Việt API(test)</h6>
    </div>
    <div class="card-body">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Client ID</span>
            </div>
            <input type="text" class="form-control" placeholder="Client ID" id="clientID-val" value="<?= esc($admin->clientID) ?>">
            <div class="input-group-append">
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Mã bảo mật</span>
            </div>
            <input type="text" class="form-control" placeholder="Mã bảo mật" id="pass-val" value="<?= esc($admin->password) ?>">
            <div class="input-group-append">
            </div>
        </div>

        <div class="input-group mt-4">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
    <script>
        // Call the productTables jQuery plugin
        document.addEventListener("DOMContentLoaded", () => {
            $('button[type="submit"]').click(e => {
                e.preventDefault();
                var formData = new FormData();
                var clid = $('#clientID-val').val();
                var pass = $('#pass-val').val();
                formData.append('cl', clid);
                formData.append('pass', pass);
                
                $.ajax({
                    url: '/admin/kiotviet/update',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        alert('Cập nhật kết nối API Kiot Việt thành công');
                        // location.reload();
                        console.log(res);
                        // $('#msg').html(response);
                    },
                    error: function(res, a, b) {
                        alert('Cập nhật kết nối API Kiot Việt không thành công');
                        console.log(res,a,b);

                        // $('#msg').html(response);
                    }
                });

            })
        });
    </script>

</div>
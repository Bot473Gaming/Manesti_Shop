<a href="/admin" class="btn btn-outline-primary mb-4">Quay lại</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary stt">Danh mục</h6>
    </div>
    <div class="card-body">
        <!---->
        <ul id="tags" class="row">
            <?php foreach($category as $tag):?>
            <li class="tag h4 mr-3"><span class="badge badge-pill badge-primary"><?= esc($tag->name)?> <span class="badge badge-pill badge-danger btn-del" onclick="$(this).closest('li.tag').remove();">x</span></span></li>
            <?php endforeach?>
        </ul>
        <div class="input-group mt-3 mb-3" bis_skin_checked="1">
            <div class="input-group-prepend" bis_skin_checked="1">
                <button id="btn-add" class="btn btn-outline-secondary" type="button">Thêm mới</button>
            </div>
            <input type="text" class="form-control" placeholder="VD: Quần, Áo, Túi sách,..." id="category-val" value="">
        </div>
        <!---->
        <div class="input-group mt-4">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
    <style>
        .btn-del:hover {
            opacity: 0.7;
        }
        #tags li {
            list-style:none;
        }
    </style>
    <script>
        // Call the productTables jQuery plugin
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
        document.addEventListener("DOMContentLoaded", () => {
            $('#btn-add').click(e => {
                var val = $('#category-val').val();
                if (!val) {
                    return;
                }
                $('#tags').append(`<li class="tag h4 mr-3"><span class="badge badge-pill badge-primary">${val} <span class="badge badge-pill badge-danger btn-del" onclick="$(this).closest('li.tag').remove();">x</span></span></li>`);
                $('#category-val').val('');
            });
            $('#category-val').on('keypress',function(e) {
                if(e.which == 13) {
                    $('#btn-add').click();
                }
            });
            $('.btn-del').click(e => {
                $(e.currentTarget).closest('li.tag').remove();
            });
            $('button[type="submit"]').click(e => {
                e.preventDefault();
                var formData = new FormData();
                // var clid = $('#clientID-val').val();
                // var pass = $('#pass-val').val();
                var category = JSON.stringify(Array.from($('li.tag')).map(tag => {
                    var obj = {
                        name : $(tag).text().replace(' x', ''),
                        slug : ChangeToSlug($(tag).text().replace(' x', '')),
                    }
                    return obj;
                }));
                formData.append('category', category);
                
                $.ajax({
                    url: '/admin/category/update',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(res) {
                        // alert('Cập nhật danh mục thành công');
                        // location.reload();
                        console.log(res);
                        // $('#msg').html(response);
                    },
                    error: function(res, a, b) {
                        // alert('Cập nhật danh mục không thành công');
                        console.log(res,a,b);

                        // $('#msg').html(response);
                    }
                });

            })
        });
    </script>

</div>
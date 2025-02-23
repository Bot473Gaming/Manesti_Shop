<div class="my-4" bis_skin_checked="1">
    <div class="customer-page" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div id="box" class="mx-auto text-center" bis_skin_checked="1">
                <?php if (!$redirect):?>
                <div class="heading mb-4"><h3>Đường dẫn không có sẵn</h3></div>
                <?php else:?>
                <div class="heading mb-4"><h3>Đang kiểm tra đường dẫn ...</h3></div>
                <div class="counter-box mx-auto mb-4">
                    <div class="counter">3</div>
                    <div>Giây</div>
                </div>
                <a href="javascript:void(0)" class="redirect-button disabled-link">Truy cập đường dẫn</a>
                <?php endif?>
            </div>
        </div>
    </div>
    <style>
        #box {
            /*border*/
            padding:100px 0;
            min-height:400px;
            width:100%;
            background: #F5F5F5;
        }
        .counter-box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid rgba(0,0,0,0.4);
            color: rgba(0,0,0,0.5);
            font-weight:300;
        }
        .counter-box div {
            /*color:rgba(0,0,0,.09);*/
            font-size:24px;
        }
        .redirect-button {
            background: #8a8f6a;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            height: 40px;
            line-height: 40px;
            padding: 0 30px;
            text-transform: uppercase;
        }
        .redirect-button:hover {
            background: #333;
            color:#fff;
        }
        .disabled-link {
            pointer-events: none;
            opacity: .7;
        }
        #frame {
            display:none;
            border: none;
        }
        #frame.show {
            display:block;
        }
    </style>
    <script>
    	$( document ).ready(function() {
    	    var ul = `<?=esc($redirect->redirect)?>`;
    	    if (!ul.includes('http')) {
    	        ul = '//' + ul;
    	    }
    	    var x = setInterval(() => {
    	        var now = $('.counter').text() - 1;
                $('.counter').text(now);
                if (!now) {
                    clearInterval(x);
                    $('#box a').removeClass('disabled-link');
                    $('#box a').click(() => {
                        document.title = 'Manesti.vn'
                        $('body').html(`<iframe src="${ul}" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
                                        Your browser doesn't support iframes
                                    </iframe>`)
                    })
                }
    	    }, 1000);
	    });
    </script>
</div>
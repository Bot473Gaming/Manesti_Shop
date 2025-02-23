    <div class="" bis_skin_checked="1">
        <div class="customer-page theme-default-margin" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2" bis_skin_checked="1">
                        <div class="login" bis_skin_checked="1">
                            <div id="CustomerLoginForm" bis_skin_checked="1">
                                <form method="post" action="/account/signin" id="customer_login" accept-charset="UTF-8">
                                    <div class="login-form-container" bis_skin_checked="1">
                                        <div class="login-text" bis_skin_checked="1">
                                            <h2>Đăng nhập</h2>
                                        </div>
                                        <?php if (session()->getFlashdata('msg')) : ?>
                                            <div class="alert alert-warning">
                                                <?= session()->getFlashdata('msg') ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="login-form" bis_skin_checked="1">
                                            <input type="email" name="email" id="email" class="input-full" placeholder="Email" autocorrect="on" autocapitalize="on" autofocus="on" value="<?= set_value('email') ?>">

                                            <input type="password" value="" name="password" id="password" class="input-full" placeholder="Mật khẩu">

                                            <div class="login-toggle-btn" bis_skin_checked="1">
                                                <div class="form-action-button" bis_skin_checked="1">
                                                    <button type="submit" class="theme-default-button">Đăng nhập</button>

                                                    <a href="#" id="">Quên mật khẩu?</a>
                                                    <!--RecoverPassword-->

                                                </div>
                                                <div class="account-optional-action" bis_skin_checked="1">
                                                    <a href="/account/signup" id="customer_register_link">Đăng kí</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
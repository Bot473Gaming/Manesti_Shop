<div class="" bis_skin_checked="1">
    <div class="customer-page theme-default-margin" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2" bis_skin_checked="1">
                    <div class="login" bis_skin_checked="1">
                        <div class="login-form-container" bis_skin_checked="1">
                            <div class="login-text" bis_skin_checked="1">
                                <h2>Đăng kí</h2>
                            </div>
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-warning">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif; ?>
                            <div class="register-form" bis_skin_checked="1">
                                <form method="post" action="" id="" accept-charset="UTF-8">
                                    <!--<input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">-->
                                    <label for="FirstName" class="hidden-label">Họ và Tên</label>
                                    <input type="text" name="fullName" id="FirstName" class="input-full" placeholder="Họ và Tên" autocapitalize="words" autofocus="true" value="<?= set_value('fullName') ?>" maxlength="50">

                                    <label for="Email" class="hidden-label">Email</label>
                                    <input type="email" name="email" id="Email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" value="<?= set_value('email') ?>">

                                    <label for="CreatePassword" class="hidden-label">Mật khẩu</label>
                                    <input type="password" name="password" id="CreatePassword" class="input-full" placeholder="Mật khẩu">

                                    <label for="CreatePassword" class="hidden-label">Xác nhận mật khẩu</label>
                                    <input type="password" name="confirmpassword" id="CreatePassword" class="input-full" placeholder="Xác nhận mật khẩu">

                                    <div class="form-action-button" bis_skin_checked="1">
                                        <button type="submit" class="theme-default-button">Tạo</button>
                                    </div>
                                </form>

                                <div class="account-optional-action" bis_skin_checked="1">
                                    <a href="/">Trang chủ</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
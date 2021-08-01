<div class="content">
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login To New Shop</h3>
                <form action="#" method="post">
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" value="" name="Mobile" 
                            placeholder="Mobile" id="login_user_mobile" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="" name="Password"
                            placeholder="Password" id="login_user_password" required="">
                        <div class="clearfix"></div>
                    </div>
                    <button type="button" class="btn btn-success" id="btn_submit_login_user">Login</button>
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password</a>
                <a href="<?= base_url(); ?>registration" class="forg-right">Register</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--login-->
</div>
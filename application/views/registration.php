<div class="content">
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Register</h3>
                <form action="#" method="post">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" value="" name="Username" 
                           placeholder="Username" id="reg_user_name" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" value="" name="Mobile" 
                            placeholder="Mobile" id="reg_user_mobile" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="" name="Password"
                            placeholder="Password" id="reg_user_password" required="">
                        <div class="clearfix"></div>
                    </div>
                    
                    <button type="button" class="btn btn-success" id="btn_submit_reg_user">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
echo date('Y-m-d h:i:s');
?>
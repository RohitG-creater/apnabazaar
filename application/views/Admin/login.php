<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Admin Signin form</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="<?= base_url('public/admin/css/style.css'); ?>" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html"><span>Admin</span> Sign In</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="<?= base_url('public/admin/images/2.png'); ?>" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                            <h2>Where to?</h2>
                            <form action="#" class="signin-form" method="post">
								<div class="one-frm">

									<label>Email</label>
									<input type="email" name="email"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="Password"  placeholder="" required="">
								</div>
                                
                                <button class="btn btn-style mt-3">Sign In </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
   
    </section>
    <!-- //form section start -->

</body>

</html>
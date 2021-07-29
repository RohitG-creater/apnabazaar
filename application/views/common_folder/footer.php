 <!---footer--->
 <div class="footer-w3l">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid">
                    <h4>About </h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="social-icon">
                        <a href="#"><i class="icon"></i></a>
                        <a href="#"><i class="icon1"></i></a>
                        <a href="#"><i class="icon2"></i></a>
                        <a href="#"><i class="icon3"></i></a>
                    </div>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="registered.html"> Create Account </a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="codes.html">Short Codes</a></li>
                        <li><a href="mail.html">Mail Us</a></li>
                        <li><a href="products1.html">products1</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid foot">
                    <h4>Contacts</h4>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd,
                                Westby, USA</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1
                                599-033-5036</a></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                href="mailto:example@mail.com"> example@mail.com</a></li>

                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!---footer--->
    <!--copy-->
    <div class="copy-section">
        <div class="container">
            <div class="copy-left">
                <p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
                </p>
            </div>
            <div class="copy-right">
                <img src="<?= base_url().'public/images/card.png' ?>" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--copy-->
<script src="<?= base_url().'public/js/jquery.min.js' ?>"></script>

<script type="text/javascript" src="<?= base_url().'public/js/bootstrap-3.1.1.min.js' ?>"></script>
<!-- cart -->
<script src="<?= base_url().'public/js/simpleCart.min.js' ?>"></script>
<script src="<?= base_url().'public/js/coreSlider.js' ?>"></script>
<script>
$('#example1').coreSlider({
    pauseOnHover: false,
    interval: 3000,
    controlNavEnabled: true
});
</script>
<!--quantity-->
<script>
$('.value-plus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});
</script>
<!--quantity-->
<!--quantity-->
<script>
$('.value-plus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});
</script>
<!--quantity-->
<!--quantity-->
<script>
$('.value-plus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});
</script>
<!--quantity-->
<!--quantity-->
<script>
$('.value-plus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus1').on('click', function() {
    var divUpd = $(this).parent().find('.value1'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});
</script>
<!--quantity-->
<script type="text/javascript">
    jQuery(function() {
        jQuery('.starbox').each(function() {
            var starbox = jQuery(this);
            starbox.starbox({
                average: starbox.attr('data-start-value'),
                changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                    'clickonce') ? 'once' : true,
                ghosting: starbox.hasClass('ghosting'),
                autoUpdateAverage: starbox.hasClass('autoupdate'),
                buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                    'data-button-count') || 5,
                stars: starbox.attr('data-star-count') || 5
            }).bind('starbox-value-changed', function(event, value) {
                if (starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' ' + val);
                    return val;
                }
            })
        });
    });
    </script>
    <script src="<?= base_url().'public/js/main.js' ?>"></script>
    <!--search jQuery-->
    <script src="<?= base_url().'public/js/responsiveslides.min.js' ?>"></script>
    <script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
    </script>
    <!--mycart-->

    <!-- cart -->
    <!--start-rate-->
    <script src="<?= base_url().'public/js/jstarbox.js' ?>"></script>
    <script src="<?= base_url().'public/custom_js/form_validation.js' ?>"></script>
    </body>

</html>

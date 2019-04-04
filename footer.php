       <section class="subscribe-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                <form class="text-center subscribe-form" action="/">
                    <div class="subscribe-title">اولین نفر باشید که از شفافیت مطلع می‌شوید</div>
                    <div class="input-group mb3"><input class="form-control" type="email" name="email"
                            placeholder="ایمیل خود را وارد کنید">
                        <div class="input-group-append"><button class="btn btn-info" type="submit">اشتراک</button></div>
                    </div><small class="form-text text-muted mt-2">برای ایمیل شما اسپم نفرستاده و برای حریم خصوصی شما
                        احترام قائلیم.</small>
                </form>
            </div>
        </div>
    </div>
</section>
       <footer>
            <div class="footer-about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4 col-md-2"><a class="footer-logo" href="<?php echo get_site_url(); ?>" title="شفافیت برای ایران"><i class="icon icon-logo"></i></a></div>
                        <div class="col-6 offset-2 col-md-3 offset-md-0">
                            <div class="footer-social-links">
                            <?php  global $redux_tp4; ?>
                                <a href="<?php echo $redux_tp4['url-insta']; ?>" title="instagram"><i class="icon icon-instagram"></i></a>
                                <a href="<?php echo $redux_tp4['url-bale']; ?>" title="bale"><i class="icon icon-bale"></i></a>
                                <a href="<?php echo $redux_tp4['url-telegram']; ?>" title="telegram"><i class="icon icon-telegram"></i></a>
                                <a href="<?php echo $redux_tp4['url-sorush']; ?>" title="soroush"><i class="icon icon-soroush"></i></a>
                                <a href="<?php echo $redux_tp4['url-twitter']; ?>" title="twitter"><i class="icon icon-twitter"></i></a>
                                <a href="<?php echo $redux_tp4['url-aparat']; ?>" title="aparat"><i class="icon icon-aparat"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="footer-desc mt-4 mt-md-0"><?php echo $redux_tp4['footer-desc']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-menu">
                <div class="container">
                    <ul>
     <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>

                    </ul>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container d-flex flex-wrap">
                    <div><i class="icon icon-cc ml-2"></i><i class="icon icon-nc ml-2"></i><i class="icon icon-by ml-3"></i><span><?php echo $redux_tp4['footer-copy-right']; ?></span></div>
                    <div class="mr-auto"><span>با افتخار طراحی شده توسط<a href="http://pixeler.ir" title="پیکسلر"> پیکسلر</a> در ایران</span><i class="icon icon-map text-info mr-2"></i></div>
                </div>
            </div>
        </footer>

        <!-- vendor include: jquery, bootstrap-->
        <script src=" <?php echo get_stylesheet_directory_uri(). '/assets/js/vendor.js?ver=0.1.0' ?>" ></script>
        <script src=" <?php echo get_stylesheet_directory_uri(). '/assets/js/main.js?ver=0.1.0' ?>"></script>
        <script src=" <?php echo get_stylesheet_directory_uri(). '/assets/js/isotope.pkgd.min.js?ver=0.1.0' ?>"></script>
        <script src=" <?php echo get_stylesheet_directory_uri(). '/assets/js/app.js?ver=0.1.0' ?>"></script>
    </body>

</html>

<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


 get_header();?>

     <!-- content-->
        <div class="main-content">
        <?php get_template_part('template-parts/main/home', 'intro');?>   
        <?php get_template_part('template-parts/main/home', 'latestPost');?>
   
            <section class="working-wrapper mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon working-header">
                                <div class="card-cover"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/images/logo.svg.' ?>" alt="شفافیت برای ایران"></div>
                                <div class="card-content">
                                    <div class="card-title">حوزه فعالیت‌ها</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon">
                                <div class="card-cover"><i class="icon icon-lab"></i></div>
                                <div class="card-content">
                                    <div class="card-title">رصد و پژوهش</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                    <div class="card-details"><a class="text-secondary font-weight-bold" href="#">بیشتر بدانید...</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon">
                                <div class="card-cover"><i class="icon icon-solar"></i></div>
                                <div class="card-content">
                                    <div class="card-title">طراحی و توسعه سامانه</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                    <div class="card-details"><a class="text-secondary font-weight-bold" href="#">بیشتر بدانید...</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon">
                                <div class="card-cover"><i class="icon icon-network"></i></div>
                                <div class="card-content">
                                    <div class="card-title">ترویج و شبکه‌سازی</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                    <div class="card-details"><a class="text-secondary font-weight-bold" href="#">بیشتر بدانید...</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon">
                                <div class="card-cover"><i class="icon icon-academy"></i></div>
                                <div class="card-content">
                                    <div class="card-title">آموزش و توانمندسازی</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                    <div class="card-details"><a class="text-secondary font-weight-bold" href="#">بیشتر بدانید...</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-horiz-icon">
                                <div class="card-cover"><i class="icon icon-blog"></i></div>
                                <div class="card-content">
                                    <div class="card-title">تدوین و ارزیابی متون قانونی</div>
                                    <div class="card-desc">این یک متن الکی است و طراحان برای پر کردن جاهای خالی در طراحی از آن استفاده می‌کنند و ارزشی ندارد.</div>
                                    <div class="card-details"><a class="text-secondary font-weight-bold" href="#">بیشتر بدانید...</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="container mt-2 py-5">
                <div class="legend">
                    <div class="legend-title">سامانه‌ها</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="banner-overlay banner-overlay-dark mb-3"><img src="./demo-images/banner-5.jpg" alt="banner"><a href="#" title="title">شفافیت قراردادها</a></div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="banner-overlay banner-overlay-dark mb-3"><img src="./demo-images/banner-4.jpg" alt="banner"><a href="#" title="title">جمع نویسی</a></div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="banner-overlay banner-overlay-dark mb-3"><img src="./demo-images/banner-1.jpg" alt="banner"><a href="#" title="title">سامانه رصد تکلیف قانونی</a></div>
                    </div>
                </div><a class="btn btn-primary rounded-pill btn-icon-left mt-3" href="#" title="دیدن همه سامانه‌ها"><span>دیدن همه سامانه‌ها</span><i class="icon icon-left"></i></a>
            </section> -->
            <!-- <section class="mt-2 py-5 bg-gray-100">
                <div class="container">
                    <div class="legend">
                        <div class="legend-title">پروژه‌ها</div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 d-flex">
                            <div class="card-horiz-project mb-3"><a href="#">
                                    <div class="card-cover"><img src="./demo-images/project-thumb-1.png" alt="project-1"></div>
                                    <div class="card-title">پروژه مطالعه تعارض منافع در وزارت رفاه</div>
                                </a></div>
                        </div>
                        <div class="col-12 col-md-4 d-flex">
                            <div class="card-horiz-project mb-3"><a href="#">
                                    <div class="card-cover"><img src="./demo-images/project-thumb-2.png" alt="project-2"></div>
                                    <div class="card-title">پروژه تدوین سیاست داده باز برای شهرداری تهران</div>
                                </a></div>
                        </div>
                        <div class="col-12 col-md-4 d-flex">
                            <div class="card-horiz-project mb-3"><a href="#">
                                    <div class="card-cover"><img src="./demo-images/project-thumb-3.png" alt="project-3"></div>
                                    <div class="card-title">پروژه نحوه سنجش شفافیت در نهاهای زیرمجموعه رهبری</div>
                                </a></div>
                        </div>
                    </div><a class="btn btn-primary rounded-pill btn-icon-left mt-3" href="#" title="دیدن همه پروژه‌ها"><span>دیدن همه پروژه‌ها</span><i class="icon icon-left"></i></a>
                </div>
            </section> -->
            <section class="container py-5 mt-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="banner-overlay banner-overlay-btn mb-3"><img src="<?php echo get_stylesheet_directory_uri(). '/demo-images/banner-2.jpg' ?>" alt="banner"><a href="#" title="title"><span>نقشه شفافیت</span></a></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="banner-overlay banner-overlay-btn mb-3"><img src="<?php echo get_stylesheet_directory_uri(). '/demo-images/banner-3.jpg' ?>" alt="banner"><a href="#" title="title"><span>انجمن شفافیت</span></a></div>
                    </div>
                </div>
            </section>
        </div>

<?php get_footer();?>
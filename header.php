<!DOCTYPE html>
<html lang="fa">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title><?php bloginfo("name"); wp_title(); ?></title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">

	<meta name='apple-mobile-web-app-capable' content='yes' >
	<meta name='viewport' content='width=device-width;initial-scale=1.0'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	 <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/theme.min.css">
	 <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/fonts/IRANSans/IRANSansWeb(FaNum).woff">
	
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
	<!-- Page loading styles-->
  
	<!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
function Respons() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

    </script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>



    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/nouislider/dist/nouislider.min.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
  </head>
  <!-- Body-->

  <body dir="rtl">
    <!-- Demo switcher (offcanvas)-->
   <!--  <button class="btn btn-icon btn-light rounded-circle shadow position-fixed top-50 start-0 translate-middle-y ms-3" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="تغییر دمو" style="z-index: 1035;">
      <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 rounded-circle" data-bs-toggle="offcanvas" data-bs-target="#demo-switcher"><i class="fi-layers"></i></div>
    </button>-->
    <div class="offcanvas offcanvas-end" id="demo-switcher">
      <div class="offcanvas-header d-block border-bottom">
        <div class="d-flex align-items-center justify-content-between mb-4">
          
          <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="d-flex"><a class="btn btn-outline-secondary btn-sm w-100 me-2" href="index.html">
		<i class="fi-home me-2"></i>خانه</a><a class="btn btn-outline-secondary btn-sm w-100" href="components/typography.html">
		<i class="fi-file me-2"></i>ابزارهای بوت استرپ</a></div>
      </div>
      <div class="offcanvas-body">
        <div class="card card-hover shadow-sm mb-4">
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/intro/demos/offcanvas/car-finder.jpg" alt="Car Finder Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center">
			<a class="nav-link stretched-link" href="car-finder-home.html">دمو ماشین</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4">
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/intro/demos/offcanvas/real-estate.jpg" alt="Real Estate Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center">
			<a class="nav-link stretched-link" href="real-estate-home-v1.html">دمو املاک</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4">
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/intro/demos/offcanvas/job-board.jpg" alt="Job Board Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center">
			<a class="nav-link stretched-link" href="job-board-home-v1.html">دمو کاریابی</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4">
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/intro/demos/offcanvas/city-guide.jpg" alt="City Guide Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center">
			<a class="nav-link stretched-link" href="city-guide-home-v1.html">دمو راهنمای سفر</a></h3>
          </div>
        </div>
      </div>
      <div class="offcanvas-footer border-top">
	  <a class="btn btn-primary btn-lg w-100" href="https://themes.getbootstrap.com/product/finder-directory-listings-template-ui-kit/" target="_blank" rel="noopener">
	  <i class="fi-cart fs-lg me-2"></i>مشاهده و خرید نسخه LTR</a></div>
    </div>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>لطفا منتظر باشید</span>
      </div>
    </div>

    <main class="page-wrapper">
      <!-- Sign In Modal-->

      <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md p-4 p-sm-5">
                  <h2 class="h3 mb-4 mb-sm-5">سلام!<br>به سایت ما خوش آمدید.</h2><img class="d-block mx-auto rotate-img" src="<?php echo get_template_directory_uri(); ?>/img/signin-modal/signin.svg" width="344" alt="Illustartion">
                  <div class="mt-4 mt-sm-5">هنوز ثبت نام نکرده اید؟ <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ثبت نام</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg ms-1"></i>ورود با اکانت گوگل</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg ms-1"></i>ورود با اکانت فیسبوک</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="w-100">
                    <div class="px-3">یـا</div>
                    <hr class="w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label mb-2" for="signin-email">پست الکترونیکی</label>
                      <input class="form-control" type="email" id="signin-email" placeholder="ایمیل خود را وارد کنید" required>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label mb-0" for="signin-password">رمز عبور</label><a class="fs-sm" href="#">رمز عبور را فراموش کرده اید؟</a>
                      </div>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="signin-password" placeholder="پسوورد خود را وارد کنید" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">ورود به حساب کاربری</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sign Up Modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md p-4 p-sm-5">
                  <h2 class="h3 mb-4 mb-sm-5">در سایت ما با اطمینان ثبت نام کنید.</h2>
                  <ul class="list-unstyled mb-4 mb-sm-5">
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>افزودن و ارتقا آگهی</span></li>
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>مدیریت لیست علاقه مندی ها</span></li>
                    <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>ثبت نظر</span></li>
                  </ul><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/signin-modal/signup.svg" width="344" alt="Illustartion">
                  <div class="mt-sm-4 pt-md-3">ثبت نام کرده اید؟ <a href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ورود به حساب کاربری</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg ms-1"></i>ورود با اکانت گوگل</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg ms-1"></i>ورود با اکانت فیسبوک</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="w-100">
                    <div class="px-3">یـا</div>
                    <hr class="w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label" for="signup-name">نام و نام خانوادگی</label>
                      <input class="form-control" type="text" id="signup-name" placeholder="نام و نام خانوادگی خود را وارد کنید" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-email">پست الکترونیکی</label>
                      <input class="form-control" type="email" id="signup-email" placeholder="ایمیل خود را وارد کنید" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-password">رمز عبور <span class='fs-sm text-muted'>حداقل 8 کاراکتر</span></label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="signup-password" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="signup-password-confirm">تایید رمز عبور</label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="signup-password-confirm" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms"> با ثبت نام در این سایت <a href='#'> شرایط</a> و <a href='#'>قوانین </a> سایت را قبول دارم.</label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">ثبت نام</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Navbar-->
<?php
// Elementor `header` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	 include("part/navbar.php");
}


      
<?php 
/* Template Name: فراموشی رمز عبور */ 

?>
 

<?php if (!(current_user_can('level_0'))): ?>


<!DOCTYPE html>
<html lang="fa">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <title>قالب Finder | قالب چند منظوره فایندر املاک</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
	<!-- Page loading styles-->
   <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #1f1b2d;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #fff;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #9691a4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

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
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/nouislider/dist/nouislider.min.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/theme.min.css">
  </head>
  <!-- Body-->
  <body class="bg-secondary" dir="rtl">
    <!-- Demo switcher (offcanvas)-->
    
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>لطفا منتظر باشید</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Page content-->
      <div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
        <div class="card card-body" style="max-width: 940px"><a class="position-absolute top-0 end-0 nav-link fs-sm py-1 px-2 mt-3 me-3" href="#" onclick="window.history.go(-1); return false;"><i class="fi-arrow-long-right fs-base me-2"></i>برگشت</a>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md p-4 p-sm-5">
                  <h2 class="h3 mb-4 mb-sm-5">سلام!<br>به سایت <?php bloginfo("name");  ?> خوش آمدید.</h2><img class="d-block mx-auto rotate-img" src="<?php echo get_template_directory_uri(); ?>/img/signin-modal/signin.svg" width="344" alt="Illustartion">
                  <div class="mt-4 mt-sm-5">هنوز ثبت نام نکرده اید؟ <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ثبت نام</a></div>
                </div>
               <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                  <div class="d-flex align-items-center py-3 mb-3">
                   
                    
                  </div>

					
					<form class="needs-validation" action="<?php echo wp_lostpassword_url(); ?>" method="post">
					<div class="mb-4">
   					<input	class="form-control" type="email" name="log" id="log" size="20" placeholder="ایمیل خود را وارد نمایید" />
					   </div>
					

					

   					<input class="btn btn-primary btn-lg w-100" type="submit" name="submit" value="ارسال بازنشانی ایمیل"  value="<?php _e( 'Reset Password', 'personalize-login' ); ?>" />

   					
</form>
<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">
بازیابی رمز عبور</a>




                </div>
              </div>
      
        </div>
      </div>
    </main>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/theme.min.js"></script>
  </body>
</html>


<?php endif;?>
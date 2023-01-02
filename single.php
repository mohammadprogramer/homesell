<?php get_header();?>
<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {?>
	
<!-- Page content-->
      <!-- Page container-->
      <div class="container mt-5 mb-md-4 py-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
		<?php the_breadcrumb(); ?>
        
        </nav>
        <!-- Post title + meta-->
        <h1 class="h2 mb-4 font-vazir"><?php the_title();?></h1>
     
        <!-- Post content-->
        <div class="mb-4 pb-md-3">

	
<?php if(has_post_thumbnail()){
	 the_post_thumbnail( 'post-thumbnails'); 

} else { ?>
<img src="<?php bloginfo('template_url');?>/images/thumb.jpg" width="600" height="600" alt="تصویر پیدا نشد" title="تصویر پیدا نشد">
<?php } ?>

		
		</div>
        <div class="row">
          <div class="col-lg-2 col-md-1 mb-md-0 mb-4 mt-md-n5">
            <!-- Sharing-->
            <div class="sticky-top py-md-5 mt-md-5">
              <div class="d-flex flex-md-column align-items-center my-2 mt-md-4 pt-md-5">
                <div class="d-md-none fw-bold text-nowrap me-2 pe-1">اشتراک گذاری</div><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with Facebook"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with Twitter"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with LinkedIn"><i class="fi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-10">
            <!-- Author-->
            <div class="mb-4 pb-md-3"><a class="d-flex align-items-center text-body text-decoration-none" href="#"><img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/avatars/32.jpg" width="80" alt="Kristin Watson">
                <div class="pe-3">
                  <h2 class="h6 mb-1">هر چی که باشه</h2><span class="fs-sm">نماینده گروه امپراتوری املاک</span>
                </div></a></div>
            <!-- Post content-->
            <?php the_content();?>
            <div class="d-flex align-items-center my-md-5 my-4 py-md-4 py-3 border-top">
              <div class="fw-bold text-nowrap mb-2 me-2 pe-1">برچسب: </div>

              <div class="d-flex flex-wrap"><a class="btn btn-xs btn-outline-secondary rounded-pill fs-sm fw-normal me-2 mb-2" href="#">آموزشی</a><a class="btn btn-xs btn-outline-secondary rounded-pill fs-sm fw-normal me-2 mb-2" href="#">شغل</a><a class="btn btn-xs btn-outline-secondary rounded-pill fs-sm fw-normal mb-2" href="#">کسب و کار</a></div>
            </div>
            <!-- Comments-->
            
        <!-- Comment form-->
	
     <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            ?>
	
      </div>
    </main>


<?php
}
?>

      
    <?php get_footer();?>
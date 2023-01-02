    <section class="container mb-5 pb-md-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h2 class="h3 mb-0 ">خانه های ویژه ما</h2><a class="btn btn-link fw-normal p-0" href="real-estate-catalog-rent.html">مشاهده همه <i class="fi-arrow-long-left ms-2"></i></a>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2" dir="ltr">
          <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
           
	
	
	
	<?php


	$has_cat=has_category("ourhome");



if ($has_cat){

$the_query = new WP_Query( array("category_name"=>"ourhome" ,"posts_per_page"=>10) );

if ( $the_query->have_posts() ) {
	
	while ( $the_query->have_posts() ) {
		
		
		
		$the_query->the_post();
		?>
		
		<div class="col">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 pe-3"><span class="d-table badge bg-success mb-1">تایید</span><span class="d-table badge bg-info">جدید</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 ps-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="<?php echo get_template_directory_uri(); ?>/img/real-estate/catalog/01.jpg" alt="Image">
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-sm fw-normal text-uppercase text-primary">اجاره</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href='<?php the_permalink();?>' ><?php the_title(); ?></a></h3>
                  <p class="mb-2 fs-sm text-muted">آپارتمان مدرن استخردار</p>
                  <div><i class="fi-cash mt-n1 ms-2 lead align-middle opacity-70"></i> 250000 ت</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">3<i class="fi-bed me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-bath me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car me-1 mt-n1 fs-lg text-muted"></i></span></div>
              </div>
            </div>
		
		
		
		  
		  
	<?php	  
	}
} 





}else{

$new_caty=wp_create_category("ourhome");
echo $new_caty;

}


// The Query


?>
	  
	  
	  



		   
		   
		   
		   
		   
            
			
			
			
			
          
          </div>
        </div>
      </section>
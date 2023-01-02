<?php get_header();?>
      <!-- Page content-->
      <!-- Review modal-->
      <div class="modal fade" id="modal-review" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header d-block position-relative border-0 pb-0 px-sm-5 px-4">
              <h4 class="modal-title mt-4 text-center font-vazir">ثبت نظر برای ملک</h4>
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 px-4">
              <form class="needs-validation" novalidate>
                <div class="mb-3">
                  <label class="form-label" for="review-name">نام <span class='text-danger'>*</span></label>
                  <input class="form-control" type="text" id="review-name" placeholder="نام و نام خانوادگی" required>
                  <div class="invalid-feedback">لطفا نام خود را وارد کنید</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="review-email">پست الکترونیکی <span class='text-danger'>*</span></label>
                  <input class="form-control" type="email" id="review-email" placeholder="ایمیل" required>
                  <div class="invalid-feedback">لطفا یک ایمیل معتبر وارد کنید</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="review-rating">امتیازدهی <span class='text-danger'>*</span></label>
                  <select class="form-control form-select" id="review-rating" required>
                    <option value="" selected disabled hidden>امتیاز</option>
                    <option value="5 stars">5 ستاره</option>
                    <option value="4 stars">4 ستاره</option>
                    <option value="3 stars">3 ستاره</option>
                    <option value="2 stars">2 ستاره</option>
                    <option value="1 star">1 ستاره</option>
                  </select>
                  <div class="invalid-feedback">لطفاً به ملک امتیاز دهید.</div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="review-text">ثبت نظر <span class='text-danger'>*</span></label>
                  <textarea class="form-control" id="review-text" rows="5" placeholder="توضیحات" required></textarea>
                  <div class="invalid-feedback">نظر خود را ثبت کنید</div>
                </div>
                <button class="btn btn-primary d-block w-100 mb-4" type="submit">ثبت نظر</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Page header-->



















	  
	  
	  <?php if (have_posts()):while (have_posts()) : the_post(); ?>
      <section class="container pt-5 mt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
          <?php the_breadcrumb(); ?>
          </ol>
        </nav>
        <h1 class="h2 mb-2 font-vazir"><?php the_title(); ?></h1>
        <p class="mb-2 pb-1 fs-md">ایران، تهران، میدان آزادی</p>
        <!-- Features + Sharing-->
        <div class="d-flex justify-content-between align-items-center">
          <ul class="d-flex mb-4 list-unstyled">
            <li class="me-3 ps-3 border-end"><b class="ms-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
            <li class="me-3 ps-3 border-end"><b class="ms-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
            <li class="me-3 ps-3 border-end"><b class="ms-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
            <li><b>200 </b> مترمربع</li>
          </ul>
          <div class="text-nowrap">
            <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="tooltip" title="نشان کردن"><i class="fi-heart"></i></button>
            <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="اشتراک گذاری">
              <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="dropdown"><i class="fi-share"></i></button>
              <div class="dropdown-menu dropdown-menu-end my-1">
                <button class="dropdown-item" type="button"><i class="fi-facebook fs-base opacity-75 me-2"></i> فیسبوک</button>
                <button class="dropdown-item" type="button"><i class="fi-twitter fs-base opacity-75 me-2"></i>توییتر</button>
                <button class="dropdown-item" type="button"><i class="fi-instagram fs-base opacity-75 me-2"></i>اینستاگرام</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery-->
      <section class="container overflow-auto mb-4 pb-3" data-simplebar>



<div class="row g-2 g-md-3 gallery" data-thumbnails="true" style="min-width: 30rem;">


      

		


		<?php if(has_post_thumbnail()){
the_post_thumbnail('post-thumbnails',array( 'class'=>'rounded-3', 'alt'=>''.get_the_title(),'title'=>''.get_the_title().''));
} else { ?>
<img src="<?php bloginfo('template_url');?>/images/thumb.jpg" width="60" height="60" alt="تصویر پیدا نشد" title="تصویر پیدا نشد">
<?php } ?>


		 </div>
</div>
<hr>



	<?php

// Attachment IDs
$images = get_post_meta( get_the_ID(), '_igmb_image_gallery_id', true );

// Display attachments
if ( $images ) {
   ?>
   <h3 class="h5" style="margin-top:20px;" > تصاویر بیشتر </h3>
  
 
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2" dir="ltr">
          <div class="tns-carousel-inner row gx-4 mx-0 py-md-4 py-3" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
		
		<?php
        foreach( $images as $image ) {

            // Get attachment details
            $attachment = wp_prepare_attachment_for_js( $image );
            
            ?>
				<a href="<?php echo $attachment['sizes']['large']['url']; ?>">
				<div class="col">
			
                <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span>
				
			  <img class="gallery-amlak" src="<?php echo $attachment['sizes']['medium']['url']; ?>" alt="<?php echo $attachment['alt']; ?>" />
				
         </div>
      </div>
	  </a>
      <?php
        }?>
		</div>
		</div>
		
		<?php
		}
        ?>



 </section>


		





   
   

  

        
     


      <!-- Post content-->
      <section class="container mb-5 pb-1">
        <div class="row">
          <div class="col-md-7 mb-md-0 mb-4"><span class="badge bg-success me-2 mb-3">تایید</span><span class="badge bg-info me-2 mb-3">جدید</span>
            <h2 class="h4 mb-4 pb-4 border-bottom"><?php $price=get_post_meta( $post->ID, '_wporg_meta_key2', true ); echo $price;?> تومان:<span class="d-inline-block ms-1 fs-base fw-normal text-body"></span></h2>
            <!-- Overview-->
            <div class="mb-4 pb-md-3">
              <h3 class="h5">توضیحات</h3>
              <p class="mb-1 line-h18"><?php  the_content(""); ?></p>
              <div class="collapse" id="seeMoreOverview">
                
              </div><a class="collapse-label collapsed" href="#seeMoreOverview" data-bs-toggle="collapse" data-bs-label-collapsed="مشاهده بیشتر" data-bs-label-expanded="بستن" role="button" aria-expanded="false" aria-controls="seeMoreOverview"></a>
            </div>
            <!-- Property Details-->
            <div class="mb-4 pb-md-3">
              <h3 class="h5">مشخصات</h3>
              <ul class="list-unstyled mb-0">
                <li> 
				نوع ملک:
					<?php 
				if(get_post_meta( $post->ID, '_wporg_meta_key', true )=="aparteman")
				{echo "آپارتمان";}
				elseif(get_post_meta( $post->ID, '_wporg_meta_key', true )=="sooet")
				{echo"سوییت";}
				elseif(get_post_meta( $post->ID, '_wporg_meta_key', true )=="edari")
				{echo"اداری";}
				elseif(get_post_meta( $post->ID, '_wporg_meta_key', true )=="tejari")
				{echo"تجاری";}
				elseif(get_post_meta( $post->ID, '_wporg_meta_key', true )=="zaminmaskoni")
				{echo"زمین مسکونی";}
				elseif(get_post_meta( $post->ID, '_wporg_meta_key', true )=="zaminkeshavarzi")
				{echo"زمین کشاورزی";}
				else {echo "هیچ نتیجه ای یافت نشد";}
				?>

				</li>
                <li>متراژ:
				<?php $value=get_post_meta( $post->ID, '_wporg_meta_key1', true ); echo $value; ?>
				
				</li>
				
                <li>سال ساخت:
				<?php $value=get_post_meta( $post->ID, '_wporg_meta_key0', true ); echo $value; ?>
				</li>
                <li>تعداد اتاق:
				<?php $value=get_post_meta( $post->ID, '_wporg_meta_key9', true ); echo $value; ?>
				</li>
               
                <li>
				پارکینگ :
				 	<?php
						if(get_post_meta($post->ID, 'parking', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
			
			 ?>
				</li>
                
              </ul>
            </div>
            <!-- Amenities-->
                    <div class="mb-sm-3">
                      <h3 class="h5">امکانات رفاهی</h3>
                      <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
					  
					  
		
                        <li class="col"><i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>
						
						وای فای:
						<?php
						if(get_post_meta($post->ID, 'wifi', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						</li>
                        <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>سیستم گرمایشی</li>
                        <li class="col"><i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>
						استخر:
						<?php
						if(get_post_meta($post->ID, 'swi', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>

						
						</li>
                        <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>
						پارکینگ:
						<?php
						if(get_post_meta($post->ID, 'parking', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						
						</li>
                        <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>
						تهویه هوا:
						<?php
						if(get_post_meta($post->ID, 'air', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						</li>
                        <li class="col"><i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>
						گاز رومیزی:
						<?php
						if(get_post_meta($post->ID, 'hot', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						</li>
                        <li class="col"><i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>تلویزیون
						<?php
						if(get_post_meta($post->ID, 'tel', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						</li>
                        <li class="col"><i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>ماشین لباسشویی:
					
						</li>
                        <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>دوربین مداربسته:
						<?php
						if(get_post_meta($post->ID, 'cam', true) == 'yes') {
									echo "دارد";
								}else
								{
									echo"ندارد";
								}
						?>
						
						</li>
                      </ul>
                      <div class="collapse" id="seeMoreAmenities">
                        <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                          
                          
                         
                        </ul>
              </div><a class="collapse-label collapsed" href="#seeMoreAmenities" data-bs-toggle="collapse" data-bs-label-collapsed="مشاهده بیشتر" data-bs-label-expanded="بستن" role="button" aria-expanded="false" aria-controls="seeMoreAmenities"></a>
            </div>
            <!-- Post meta-->
            <div class="mb-lg-5 mb-md-4 pb-lg-2 py-4 border-top">
              <ul class="d-flex mb-4 list-unstyled fs-sm">
                <li class="me-3 ps-3 border-end">تاریخ انتشار: <b> 26 بهمن , 1399</b></li>
                <li class="me-3 ps-3 border-end">شماره آگهی: <b>681013232</b></li>
                <li class="me-3 ps-3">بازدید: <b>48 نفر</b></li>
              </ul>
            </div>
			<?php endwhile; endif;?>
            <!-- Reviews-->
            <div class="mb-4 pb-4 border-bottom">
              <h3 class="h5 pb-3 font-vazir"><i class="fi-star-filled mt-n1 me-2 lead align-middle text-warning"></i>4,9 (32 نظر ثبت شده)</h3>
              <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between"><a class="btn btn-outline-primary mb-sm-0 mb-3" href="#modal-review" data-bs-toggle="modal"><i class="fi-edit ms-1"></i>ثبت نظر </a>
                <div class="d-flex align-items-center ms-sm-4">
                  <label class="me-2 pe-1 text-nowrap" for="reviews-sorting"><i class="fi-arrows-sort text-muted mt-n1 me-2"></i>مرتب سازی براساس : </label>
                  <select class="form-select" id="reviews-sorting">
                    <option>جدیدترین</option>
                    <option>قدیمی ترین</option>
                    <option>پربازدید</option>
                    <option>امتیاز بالا</option>
                    <option>امتیاز پایین</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Review-->
            <div class="mb-4 pb-4 border-bottom">
              <div class="d-flex justify-content-between mb-3">
                <div class="d-flex align-items-center pe-2"><img class="rounded-circle ms-1" src="<?php echo get_template_directory_uri(); ?>/img/avatars/03.jpg" width="48" alt="Avatar">
                  <div class="pe-2">
                    <h6 class="fs-base mb-0">آنت بلک</h6><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                  </div>
                </div><span class="text-muted fs-sm">14 شهریور , 1400</span>
              </div>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
              <div class="d-flex align-items-center">
                <button class="btn-like" type="button"><i class="fi-like"></i><span>(3)</span></button>
                <div class="border-end me-1">&nbsp;</div>
                <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(0)</span></button>
              </div>
            </div>
            <!-- Review-->
            <div class="mb-4 pb-4 border-bottom">
              <div class="d-flex justify-content-between mb-3">
                <div class="d-flex align-items-center pe-2"><img class="rounded-circle ms-1" src="<?php echo get_template_directory_uri(); ?>/img/avatars/13.png" width="48" alt="Avatar">
                  <div class="pe-2">
                    <h6 class="fs-base mb-0">دارل استیوارد</h6><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i></span>
                  </div>
                </div><span class="text-muted fs-sm">14 شهریور , 1400</span>
              </div>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
              <div class="d-flex align-items-center">
                <button class="btn-like" type="button"><i class="fi-like"></i><span>(0)</span></button>
                <div class="border-end me-1">&nbsp;</div>
                <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(1)</span></button>
              </div>
            </div>
            <!-- Review-->
            <div class="mb-4 pb-4 border-bottom">
              <div class="d-flex justify-content-between mb-3">
                <div class="d-flex align-items-center pe-2"><img class="rounded-circle ms-1" src="<?php echo get_template_directory_uri(); ?>/img/avatars/05.jpg" width="48" alt="Avatar">
                  <div class="pe-2">
                    <h6 class="fs-base mb-0">فلوید مایلز</h6><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                  </div>
                </div><span class="text-muted fs-sm">14 شهریور , 1399</span>
              </div>
              <p>رکتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد</p>
              <div class="d-flex align-items-center">
                <button class="btn-like" type="button"><i class="fi-like"></i><span>(2)</span></button>
                <div class="border-end me-1">&nbsp;</div>
                <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(1)</span></button>
              </div>
            </div>
            <!-- Review-->
            <div class="mb-4 pb-4 border-bottom">
              <div class="d-flex justify-content-between mb-3">
                <div class="d-flex align-items-center pe-2"><img class="rounded-circle ms-1" src="<?php echo get_template_directory_uri(); ?>/img/avatars/04.jpg" width="48" alt="Avatar">
                  <div class="pe-2">
                    <h6 class="fs-base mb-0">رالف ادواردز</h6><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i></span>
                  </div>
                </div><span class="text-muted fs-sm">14 شهریور , 1398</span>
              </div>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
              <div class="d-flex align-items-center">
                <button class="btn-like" type="button"><i class="fi-like"></i><span>(0)</span></button>
                <div class="border-end me-1">&nbsp;</div>
                <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(0)</span></button>
              </div>
            </div>
            <!-- Pagination-->
            <nav class="mt-2 mb-4" aria-label="Reviews pagination">
              <ul class="pagination">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">صفحه جاری</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block">...</li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
              </ul>
            </nav>
          </div>
          <!-- Sidebar-->
          <aside class="col-lg-4 col-md-5 ms-lg-auto pb-1">
            <!-- Contact card-->
            <div class="card shadow-sm mb-4">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between"><a class="text-decoration-none" href="real-estate-vendor-properties.html"><img class="rounded-circle mb-2" src="<?php echo get_template_directory_uri(); ?>/img/avatars/22.jpg" width="60" alt="Avatar">
                    <h5 class="mb-1">فلوید مایلز</h5>
                    <div class="mb-1"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span><span class="me-1 fs-sm text-muted">(45 نظر ثبت شده)</span>
                    </div>
                    <p class="text-body">نماینده گروه امپراتوری املاک</p></a>
                  <div class="me-4 flex-shrink-0"><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                </div>
                <ul class="list-unstyled border-bottom mb-4 pb-4">
                  <li><a class="nav-link fw-normal p-0" href="tel:3025550107"><i class="fi-phone mt-n1 me-2 align-middle opacity-60"></i>(302) 555-0107</a></li>
                  <li><a class="nav-link fw-normal p-0" href="mailto:floyd_miles@email.com"><i class="fi-mail mt-n1 me-2 align-middle opacity-60"></i>floyd_miles@email.com</a></li>
                </ul>
                <!-- Contact form-->
           <?php include("contact-page.php");?>
              </div>
            </div>
            <!-- Location (Map)-->
            <div class="pt-2">
              <div class="position-relative mb-2"><img class="rounded-3" src="<?php echo get_template_directory_uri(); ?>/img/real-estate/single/map.jpg" alt="Map">
                <div class="d-flex w-100 h-100 align-items-center justify-content-center position-absolute top-0 start-0"><a class="btn btn-primary stretched-link" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6145424811048!2d-73.93999278406218!3d40.74850644331743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592979d4827f%3A0x3a5d8b3cf779f3b6!2s28%20Jackson%20Ave%2C%20Long%20Island%20City%2C%20NY%2011101%2C%20USA!5e0!3m2!1sen!2sua!4v1618074552281!5m2!1sen!2sua" data-iframe="true" data-bs-toggle="lightbox"><i class="fi-route me-2"></i>مسیریابی </a></div>
              </div>
              <p class="mb-0 fs-sm text-center">ایران، تهران میدان آزادی</p>
            </div>
          </aside>
        </div>
      </section>
      <!-- Recently viewed-->
     <?php include("recently-viewed.php");?>
    </main>
   <?php get_footer();?>

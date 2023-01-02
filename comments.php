

<?php if ( have_comments() ) : ?>
	

      <ul class="commentlist">
        <?php wp_list_comments( array(
            'style'      => 'ul',
            'short_ping' => true,
              'callback' => 'myCustomCommentsList'
        ) ); ?>
      </ul>
 
<?php endif; ?>



<div class="mb-4 mb-md-5" id="comments">


<h3 class="mb-4 pb-2 font-vazir">نظرات ثبت شده</h3>
              <!-- Comment-->

			
           <?php function myCustomCommentsList($comment, $args, $depth){ ?>

		   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

              <div class="border-bottom pb-4 mb-4">

               
				<?php comment_text(); ?>
				

                <div class="d-flex justify-content-between align-items-center">

                  <div class="d-flex align-items-center pe-2">
				   <?php
            $default_avt = '';
            echo get_avatar($comment,$size='60',$default= $default_avt );
            ?>

                    <div class="pe-2">

                      <h6 class="fs-base mb-0"><?php echo get_comment_author(); ?></h6><span class="text-muted fs-sm"> <?php printf(esc_html__('%1$s at %2$s' , 'original-key'), get_comment_date(),  get_comment_time()) ?></span>

                    </div>
                  </div>

                  <button class="btn btn-link btn-sm" type="button"><i class="fi-reply fs-lg me-2"></i><span class="fw-normal"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span></button>
                </div>


         
              
                  
              
          
       

		</li>
<?php
 
}
?>








<!--
comment form -->


<?php
$commenter  = wp_get_current_commenter();
 
$fields =  array(
  'author' =>
  '<div class="col-sm-6">
    <label class="form-label" for="comment-name"> نام و نام خانوادگی</label>
         <input type="text" placeholder="نام ونام خانوادگی" class="form-control form-control-lg" value="'. esc_attr( $commenter['comment_author'] ) .'" >
    </div>',
 
  'email' =>
  '<div class="col-sm-6">
  <label class="form-label" for="comment-email">پست الکترونیکی</label>
       <input type="email" placeholder="پست الکترونیکی" class="form-control form-control-lg" value="' . esc_attr(  $commenter['comment_author_email'] ) .'">
   </div>',
);
 
$comment_form = array(
  'title_reply'         => 'ثبت نظر شما',
  'title_reply_to'      => esc_html__( 'Leave a Reply to %s :', 'woocommerce' ),
  'cancel_reply_link' => '<span class="btn btn-outline-light btn-sm text-primary">(لغو پاسخ)</span>',
  'label_submit'      => 'ارسال دیدگاه',
  'class_form'      => 'needs-validation row gy-md-4 gy-3',
  'comment_notes_before' => '<p class="comment-notes col-12 mb-3"></p>',
  'submit_button'=> '<button class="btn btn-lg btn-primary"  comment-btn">ارسال دیدگاه</button>',
  'comment_field' =>'<div class="col-12">
                <label class="form-label" for="comment-text">پیام</label>
				<textarea id="comment" name="comment" aria-required="true" rows="4" placeholder="متن خود را تایپ نمایید..."
  class="form-control form-control-lg"></textarea>
  </div>',
  'fields' => $fields,
 
);

?>
<div class="card py-md-4 py-3 shadow-sm">
          <div class="card-body col-lg-8 col-md-10 mx-auto px-md-0 px-4">
           
			<?php
 
comment_form(  $comment_form  );
?>
</div>
</div>
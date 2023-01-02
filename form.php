<?php 

<?php 
if(get_post_meta($post->ID, 'wifi', true) == 'yes')
	{
		echo "دارد";
		}

?>


if(get_post_meta($post->ID, 'ui-ux-design', true) == 'yes') {
  //show relevant content
}


?>

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
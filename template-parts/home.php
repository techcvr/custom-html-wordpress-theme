<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<section class="slider">
  <div class="slide">
      <div class="slide-left">
        <div class="testimonial-carousel owl-carousel owl-theme">
            <?php
				$products = array("post_type" => "banner", "post_status" => "publish", "order_by" => "date", 'order' => 'ASC', 'posts_per_page' => -1 );

				$loop = new WP_Query( $products );
				while ( $loop->have_posts() ) : $loop->the_post();                    
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			?>	
                  <!-- Service Block -->
                <div class="slider-block">
                  <div class="inner-box">
                    <div class="slidersection">
                          <img src="<?=$thumb_url_array[0];?>" class="img-responsive" alt="<?=the_title(); ?>">
                    </div>
                    
                  </div>
                </div>
             
           <?php endwhile; ?>
		  <?php wp_reset_postdata();?>
        </div>

  </div>
     
  </div>
</section>
<section class="ftco-intro">
	<div class="container-fluid">
		<div class="no-gutters heading my-5 py-5">
			<h1><?=the_field('about_title'); ?></h1>
			
              <?=the_field('about_content'); ?>
		</div>
	</div>
</section>
 <?php
    
	$products = array("post_type" => "works", "post_status" => "publish", 
	'meta_key'			=> 'featured_order',
	'orderby'			=> 'meta_value',
	'order'				=> 'ASC',
	'posts_per_page' => '-1' );
    
	$loop = new WP_Query( $products );
	while ( $loop->have_posts() ) : $loop->the_post();                    
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
// 	echo $featured_order = get_field('featured_order');
	$featured = get_field('featured_product');	   
    if($featured == Yes){
    ?>
    <section class="mb-3 container-fluid">
      <div class="parallax wow fadeInUp">
         <a href="<?=the_field('page_link');?>"> <img class="img-fluid" src="<?=$thumb_url_array[0];?>" alt="">
          <div class="home-product-wrap">
                <div class="content">
                    <h2><?=the_title();?></h2><p><?=the_field('subtitle');?></p>
                </div>
          </div>
        </a> 
      </div>
    </section>
    <?Php } ?>
   <?php endwhile; ?>
<?php wp_reset_postdata();?> 
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="banner_section">
        <div class="container-fluid">
            <div class="row">
                <div class="banner_box">
                   <?php $dustersmk_home_banner_image = get_theme_value('dustersmk_home_banner_image'); ?>
                    <div class="banner_imagebox"><img src="<?php echo $dustersmk_home_banner_image; ?>" alt=""></div>
                   <div class="banner_infobox">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                 <?php $dustersmk_home_top_text = get_theme_value('dustersmk_home_top_text'); ?>
                                    <h1><?php if(!empty($dustersmk_home_top_text)){echo $dustersmk_home_top_text;}
                                    else{?>WE KEEP YOUR WORLD FRESH AND SPARKLING CLEAN.<?php } ?></h1>
                                    <?php $dustersmk_home_button_text = get_theme_value('dustersmk_home_button_text'); ?>
                                    <?php $dustersmk_home_button_link = get_theme_value('dustersmk_home_button_link'); ?>
                                    <a class="red_button" href="<?php echo $dustersmk_home_button_link; ?>">
                                       <?php if(!empty($dustersmk_home_button_text)){echo $dustersmk_home_button_text;}else{?>Learn More<?php } ?></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<main>
   <section class="common_block about_section">
      <div class="container">
         <div class="row">
            <div class="col-md-6 left_col">
               <div class="titlebox">
                  <?php $dustersmk_about_icon = get_theme_value('dustersmk_about_icon'); ?>
                  <span class="icon"><img src="<?php echo $dustersmk_about_icon; ?>" alt=""></span>
                  <?php $dustersmk_home_about_title = get_theme_value('dustersmk_home_about_title'); ?>
                  <h2><?php if(!empty($dustersmk_home_about_title)){echo $dustersmk_home_about_title;}
                     else { ?>Dustermk About Us<?php } ?></h2>
               </div>
               <?php $dustersmk_home_about_content = get_theme_value('dustersmk_home_about_content'); ?>
               <?php if(!empty($dustersmk_home_about_content)){echo $dustersmk_home_about_content;}else{?>
               <h3>Relax</h3>
               <h4>in your clean home</h4>
               <h5>Vivamus hendrerit nulla vel feugiat iaculis. Sed maximus ex metus, nec imperdiet leo condimentum nec. Quisque sed sem vel ligula facilisis eleifend.</h5>
               <p>Quisque sed sem vel ligula facilisis eleifend. Phasellus consectetur porta ipsum, eget interdum quam scelerisque fermentum. Proin quam sem, tincidunt sit amet venenatis quis, fermentum nec tortor. Donec eleifend vehicula ultrices. Etiam nec sapien in nulla faucibus tincidunt. Sed at tincidunt orci. Etiam ut nunc dui. Cras eget ex rhoncus, ornare nulla at, posuere ex.</p>
               <?php } ?>
               <?php $dustersmk_home_about_button_link = get_theme_value('dustersmk_home_about_button_link'); ?>
               <?php $dustersmk_home_about_button_text = get_theme_value('dustersmk_home_about_button_text'); ?>
               <a class="dark_button" href="<?php echo $dustersmk_home_about_button_link; ?>">
               <?php if(!empty($dustersmk_home_about_button_text))
                  {echo $dustersmk_home_about_button_text;}else{?>Learn More<?php } ?></a>
            </div>
            <div class="col-md-6 right_col">
               <div class="imagebox">
                  <?php $dustersmk_about_right_image = get_theme_value('dustersmk_about_right_image'); ?>
                  <figure><img src="<?php echo $dustersmk_about_right_image; ?>" alt=""></figure>
                  <div class="callbox">
                     <?php $dustersmk_about_phone_chris = get_theme_value('dustersmk_about_phone_chris'); ?>
                     <?php $dustersmk_about_phone_dee = get_theme_value('dustersmk_about_phone_dee'); ?>
                     
                     <h4>Chris :<?php if (!empty($dustersmk_about_phone_chris))
                     {echo $dustersmk_about_phone_chris; } 
                     else{?> 07445359252 <?php } ?></h4>
                   
                     <h4>Dee :<?php if(!empty($dustersmk_about_phone_dee))
                     {echo $dustersmk_about_phone_dee;}
                     else{?> 07961485168<?php } ?></h4>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="common_block grey_block cleaning_feature_section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlebox">
                  <?php $dustersmk_cleaning_icon = get_theme_value('dustersmk_cleaning_icon'); ?>
                  <span class="icon"><img src="<?php  echo $dustersmk_cleaning_icon;?>"></span>
                  <?php $dustersmk_Cleaning_first_title = get_theme_value('dustersmk_Cleaning_first_title'); ?>
                  <h2><?php if(!empty($dustersmk_Cleaning_first_title)){echo $dustersmk_Cleaning_first_title;}else{?>Home Cleaning Maid Easy!<?php } ?></h2>
               </div>
               <?php $dustersmk_Cleaning_second_title = get_theme_value('dustersmk_Cleaning_second_title'); ?>
               <h2><?php if(!empty($dustersmk_Cleaning_second_title)){echo $dustersmk_Cleaning_second_title;}else{?>Home Cleaning Maid Easy!<?php } ?></h2>
            </div>
         </div>
         <div class="cleaning_slider">
            <div class="owl-carousel">
            <?php 
               $postarray = array('post_type' => 'cleaning','posts_per_page' => 3,'order'=>'DESC');
               $loop = new WP_Query( $postarray );
               if($loop ->have_posts()): while($loop->have_posts()): $loop->the_post();
               $post_img=wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
               $title = get_post_meta($loop->post->ID,'title',true);
               $content = get_post_meta($loop->post->ID,'content',true);
             ?> 
            <div class="slide_item">
               <!-- <a href="<?php //echo get_permalink( $post->ID ); ?>"> -->
                  <figure class="imagebox"><img src="<?php echo $post_img[0]; ?>" alt="" /></figure>
                  <div class="infobox">
                     <div class="innerbox">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                     </div>
                  </div>
               <!-- </a> -->
            </div>
            <?php endwhile; endif;?>
         </div>
         </div>
      </div>
   </section>
   <section class="common_block whoweare_section">
      <div class="container">
         <div class="row">
            <?php 
               $id=27; 
               $post = get_post($id); 
               $title = apply_filters('title', $post->post_title); 
               $content = apply_filters('the_content', $post->post_content); 
               $who_we_are_image = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'full' );
               ?>
            <div class="col-md-4">
               <figure class="imagebox"><img src="<?php echo $who_we_are_image[0]; ?>" alt="" /></figure>
            </div>
            <div class="col-md-8">
               <div class="titlebox">
                  <?php $dustersmk_who_we_are_icon = get_theme_value('dustersmk_who_we_are_icon'); ?>
                  <span class="icon"><img src="<?php echo $dustersmk_who_we_are_icon; ?>" alt=""></span>
                  <h2><?php if(!empty($title)){echo $title;} else{ ?>Who We Are<?php } ?></h2>
               </div>
               <?php if(!empty($content)){echo $content;}else{?>
               <h2>We are the best Team cleaing!</h2>
               <p>Quisque sed sem vel ligula facilisis eleifend. Phasellus consectetur porta ipsum, eget interdum quam scelerisque fermentum. Proin quam sem, tincidunt sit amet venenatis quis, fermentum nec tortor. Donec eleifend vehicula ultrices. Etiam.</p>
               <?php } ?>
               <div class="cleaning_options">
                  <div class="row">
           <div class="col-sm-6 item">
                        <?php 
                           $id=38; 
                           $post = get_post($id); 
                           $sub_page_title_3 = apply_filters('title', $post->post_title); 
                           $sub_page_content_3 = apply_filters('the_content', $post->post_content); 
                           $sub_page_image_3 = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'full' );
                           ?>
                        <figure class="thumb">
                           <img src="<?php echo $sub_page_image_3 [0]; ?>" alt="">
                        </figure>
                        <div class="infobox">
                           <h3><?php if(!empty($sub_page_title_3)){echo $sub_page_title_3;}else{?>Carpet Cleaning<?php } ?></h3>
                           <p><?php if(!empty($sub_page_content_3)){echo $sub_page_content_3;}else{?>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<?php } ?></p>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  <?php 
                        $id=40; 
                        $post = get_post($id); 
                        $sub_page_title_2 = apply_filters('title', $post->post_title); 
                        $sub_page_content_2 = apply_filters('the_content', $post->post_content); 
                        $sub_page_image_2 = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'full' );
                        ?>
                     <div class="col-sm-6 item">
                        <figure class="thumb">
                           <img src="<?php echo $sub_page_image_2 [0]; ?>" alt="">
                        </figure>
                        <div class="infobox">
                           <h3><?php if(!empty($sub_page_title_2)){echo $sub_page_title_2;}else{?>Carpet Cleaning<?php } ?></h3>
                           <p><?php if(!empty($sub_page_content_2)){echo $sub_page_content_2;}else{?>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<?php } ?></p>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
<!--                   <div class="row">
                     <div class="col-sm-6 item">
                        <?php 
                           $id=38; 
                           $post = get_post($id); 
                           $sub_page_title_3 = apply_filters('title', $post->post_title); 
                           $sub_page_content_3 = apply_filters('the_content', $post->post_content); 
                           $sub_page_image_3 = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'full' );
                           ?>
                        <figure class="thumb">
                           <img src="<?php echo $sub_page_image_3 [0]; ?>" alt="">
                        </figure>
                        <div class="infobox">
                           <h3><?php if(!empty($sub_page_title_3)){echo $sub_page_title_3;}else{?>Carpet Cleaning<?php } ?></h3>
                           <p><?php if(!empty($sub_page_content_3)){echo $sub_page_content_3;}else{?>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<?php } ?></p>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-sm-6 item">
                        <?php 
                           $id=36; 
                           $post = get_post($id); 
                           $sub_page_title_4 = apply_filters('title', $post->post_title); 
                           $sub_page_content_4 = apply_filters('the_content', $post->post_content); 
                           $sub_page_image_4 = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'full' );
                           ?>
                        <figure class="thumb">
                           <img src="<?php echo $sub_page_image_4 [0]; ?>" alt="">
                        </figure>
                        <div class="infobox">
                           <h3><?php if(!empty($sub_page_title_4)){echo $sub_page_title_4;}else{?>Office Cleaning<?php } ?></h3>
                           <p><?php if(!empty($sub_page_content_4)){echo $sub_page_content_4;}else{?>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.<?php } ?></p>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="zipcode_section">
      <div class="container">
         
      </div>
   </section>

   <section class="common_block lowerinfo_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="innerblock">
                  <?php $dustersmk_footer_top_image = get_theme_value('dustersmk_footer_top_image'); ?>
                  <figure class="imagebox"><img src="<?php echo $dustersmk_footer_top_image; ?>"></figure>
                  <div class="infobox">
                     <?php $dustersmk_footer_top_title = get_theme_value('dustersmk_footer_top_title'); ?>
                     <h2><?php if(!empty($dustersmk_footer_top_title)){echo $dustersmk_footer_top_title;}else{?>Homes, Offices, Schools, Industrial Buildings<?php } ?></h2>
                     <?php $dustersmk_footer_top_short_description = get_theme_value('dustersmk_footer_top_short_description'); ?>
                     <p><?php if(!empty($dustersmk_footer_top_short_description)){echo $dustersmk_footer_top_short_description;}else{?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim.…<?php } ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php get_footer(); ?>
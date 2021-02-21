<?php
/*  
	Template Name: Главная страница
*/
$id = get_the_ID();
?>


<?php get_header() ; ?>
	<!-- intro section
   ================================================== -->
   <section id="intro">

   	<div class="shadow-overlay"></div>

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<div class='video-link'>
	   				<a href="#video-popup"><img src="<?php echo wp_get_attachment_url( carbon_get_post_meta($id, 'fb_big_btn')); ?>" alt=""></a>
	   			</div>

	   			<h5><?php echo carbon_get_post_meta($id, 'fb_first_title' ); ?></h5>
	   			<h1><?php echo carbon_get_post_meta($id, 'fb_description' ); ?></h1>

	   			<a class="button stroke smoothscroll" href="#process" title=""><?php echo carbon_get_post_meta($id, 'fb_btn_text'); ?></a>
                   <style>
                        .intro-content .button{
                            border-color: <?php echo carbon_get_post_meta($id, 'fb_btn_border_color'); ?>;
                            color: <?php echo carbon_get_post_meta($id, 'fb_btn_text_color'); ?>;
                        }

                        .intro-content .button:hover, .intro-content .button:focus {
                            color: <?php echo carbon_get_post_meta($id, 'fb_btn_text_color_act'); ?>;
                            border-color: <?php echo carbon_get_post_meta($id, 'fb_btn_border_act');?> 
                        }
                   </style>

	   		</div>  
   			
   		</div>   		 		
   	</div> 

   	<!-- Modal Popup
	   ========================================================= -->

      <div id="video-popup" class="popup-modal mfp-hide">

		   <div class="fluid-video-wrapper">
            <iframe src="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=faec09" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
         </div>		     

         <a class="close-popup">Close</a>         

	   </div> <!-- /video-popup -->  	 	

   </section> <!-- /intro -->


   <!-- Process Section
   ================================================== -->
   <section id="process">  

   	<div class="row section-intro">
	   
   		<div class="col-twelve with-bottom-line">

   			<h5><?php echo carbon_get_post_meta($id, 'sc_first_little_title' ); ?> </h5>
   			<h1><?php echo carbon_get_post_meta($id, 'sc_title' ); ?></h1>

   			<div class="lead"><?php echo carbon_get_post_meta($id, 'sc_description' ); ?></div>

   		</div>   		
   	</div>

   	<div class="row process-content">

   		<div class="left-side">
           <?php  if(carbon_get_post_meta($id, 'sc_repeater_hiw_left')): ?>
            <?php $data_hiw = carbon_get_post_meta($id, 'sc_repeater_hiw_left');
                foreach($data_hiw as $one_hiw): ?>

   			<div class="item" data-item="<?php echo $one_hiw['sc_rep_num_l']; ?>">

   				<h5><?php echo $one_hiw['sc_rep_title_l']; ?></h5>

   				<div><?php echo $one_hiw['sc_rep_des_l']; ?></div>
   					
   			</div>
               <?php endforeach; ?>
               <?php endif; ?>

   				
   		</div> <!-- /left-side -->
   		
   		<div class="right-side">

   				<?php if(carbon_get_post_meta($id, 'sc_repeater_hiw_right')): ?>
                <?php $data_hiw = carbon_get_post_meta($id, 'sc_repeater_hiw_right'); ?>
                <?php foreach($data_hiw as $one_hiw): ?>

   			<div class="item" data-item="<?php echo $one_hiw['sc_rep_num_r']; ?>">
               
   				<h5><?php echo $one_hiw['sc_rep_title_r']; ?></h5>

   				<div><?php echo $one_hiw['sc_rep_des_r']; ?></div>
   					
   			</div>
               <?php endforeach; ?>
               <?php endif;?>

   		</div> <!-- /right-side -->  


   		<div class="image-part">
		   <style>
            .image-part{
                background-image: url("<?php echo wp_get_attachment_url( carbon_get_post_meta($id, 'sc_back_img')); ?>");
            }
           </style> 
		   
		   </div>
            			

   	</div> <!-- /process-content --> 

   </section> <!-- /process-->    


   <!-- features Section
   ================================================== -->
	<section id="features">

		<div class="row section-intro">

		<style>
			.process-content.image-part{
				background-image: url("<?php wp_get_attachment_url( carbon_get_post_meta($id, 'th_back_img')); ?>");
			}
	   </style>

   		<div class="col-twelve with-bottom-line">

   			<h5><?php echo carbon_get_post_meta($id, 'th_first_little_title' ); ?></h5>
   			<h1><?php echo carbon_get_post_meta($id, 'th_title' ); ?>.</h1>

   			<div class="lead"><?php echo carbon_get_post_meta($id, 'th_description' ); ?></div>

   		</div>   		
   	</div>

   	<div class="row features-content">

   		<div class="features-list block-1-3 block-s-1-2 block-tab-full group">

					<?php if(carbon_get_post_meta($id, "th_blocks" )): ?>
					<?php $data_blocks = carbon_get_post_meta($id, "th_blocks" ); ?>
					<?php foreach($data_blocks as $block): ?>

	      	<div class="bgrid feature">	
					
	      		<span class="icon"><i class="<?php echo $block['th_block_icon']; ?>"></i></span>            

	            <div class="service-content">	

	            	 <h3 class="h05"><?php echo $block['th_block_title']; ?></h3>

		            <div><?php echo $block['th_block_description']; ?></div>

	         		
	         	</div> 	
				
				
			</div>
			<?php endforeach; ?>         	 
			<?php endif; ?> 

	      </div> <!-- features-list -->
   		
   	</div> <!-- features-content -->
		
	</section> <!-- /features -->
	

	<!-- pricing
   ================================================== -->

   <section id="pricing">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5><?php echo carbon_get_post_meta($id, 'fr_first_little_title' ); ?></h5>
   			<h1><?php echo carbon_get_post_meta($id, 'fr_title' ); ?></h1>
   			<div class="lead"><?php echo carbon_get_post_meta($id, 'fr_description' ); ?></div>

   		</div>   		
   	</div>

   	<div class="row pricing-content">

         <div class="pricing-tables block-1-4 group"> 
				<?php if(carbon_get_post_meta($id, 'fr_blocks' )): ?>
					<?php $datas = carbon_get_post_meta($id, 'fr_blocks' ); ?>
					<?php foreach($datas as $data): ?>

            <div class="bgrid"> 

            	<div class="price-block <?php if($data["fr_block_rec"]): ?> primary <?php endif; ?>">

            		<div class="top-part" <?php if($data["fr_block_rec"]): ?>  data-info="recommended" <?php endif;?> >

	            		<h3 class="plan-title"><?php echo $data['fr_block_title'];  ?></h3>
		               	<div class="plan-price"><sup>$</sup><?php echo $data['fr_block_price'];  ?></div>
		               	<div class="price-month">Per month</div>
		               	<div class="price-meta"><?php echo $data['fr_block_des'];  ?></div>

	            	</div>                

	               <div class="bottom-part">

	            		<ul class="features">
		                  <li><strong><?php echo $data['fr_block_storage'];  ?>GB</strong> Storage</li>
		                  <li><strong><?php echo $data['fr_block_bandwidth'];  ?>GB</strong> Bandwidth</li>		                  
		                  <li><strong><?php echo $data['fr_block_db'];  ?></strong> Databases</li>		                  
		                  <li><strong><?php echo $data['fr_block_emailacc'];  ?></strong> Email Accounts</li>
		               </ul>

		               <a class="button large" href="">Get Started</a>

	            	</div>

            	</div>           	
                        
			   </div>

			   <?php endforeach; ?>
			   <?php endif; ?>   

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> <!-- /pricing --> 


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="h01"><?php echo carbon_get_post_meta($id, 'ff_title' ); ?></h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
	  
	  	<?php if(carbon_get_post_meta($id, 'ff_blocks' )): ?>
		<?php $datas = carbon_get_post_meta($id, 'ff_blocks' ); ?>
		
    
         <div id="testimonial-slider" class="flexslider">
			
            <ul class="slides">
			<?php foreach($datas as $data): ?>
               <li>
			   

               	<div class="testimonial-author">
                    	<img src="<?php echo wp_get_attachment_image_url($data['ff_block_img']); ?>" alt="Author image">
                    	<div class="author-info">
                    		<?php echo $data['ff_block_name']; ?>
                    		<span class="position"><?php echo $data['ff_block_name_t']; ?></span>
                    	</div>
                  </div>

                  <div><?php echo $data['ff_block_text']; ?></div>  

             	</li> <!-- /slide -->
				<?php endforeach; ?>
            </ul> <!-- /slides -->
			<li></li>

			
         </div> <!-- /testimonial-slider -->      
		
	 	<?php endif; ?>   
        
      </div> <!-- /flex-container -->

	  
   </section> <!-- /testimonials -->


   <!-- faq
   ================================================== -->
   <section id="faq">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5><?php echo carbon_get_post_meta($id, 'sx_first_little_title'); ?></h5>
   			<h1><?php echo carbon_get_post_meta($id, 'sx_title'); ?></h1>

   			<div class="lead"><?php echo carbon_get_post_meta($id, 'sx_description'); ?></div>

   		</div>   		
   	</div>

   	<div class="row faq-content">

   		<div class="q-and-a block-1-2 block-tab-full group">
		   <?php if(carbon_get_post_meta($id, 'sx_blocks')): ?>
		   <?php $datas = carbon_get_post_meta($id, 'sx_blocks'); ?>
		   <?php foreach($datas as $data):  ?>

   			<div class="bgrid">

   				<h3><?php echo $data['sx_block_q']; ?></h3>

   				<div class="fq"><?php echo $data['sx_block_an']; ?></div>

   			</div>

			<?php endforeach; ?>
			<?php endif; ?>
   		</div> <!-- /q-and-a --> 
   		
   	</div> <!-- /faq-content --> 



   </section> <!-- /faq --> 

   <!-- cta
   ================================================== -->
   <section id="cta">

   	<div class="row cta-content">

   		<div class="col-twelve">

   			<h1 class="h01"><?php echo carbon_get_post_meta($id, 'sv_title' ); ?></h1>

   			<p class="lead"><?php echo carbon_get_post_meta($id, 'sv_description' ); ?></p>

   			<ul class="stores">
   				<li class="app-store">
   					<a href="<?php echo carbon_get_post_meta($id, 'sv_href1' ); ?>" class="button round large" title="">
   						<i class="icon ion-social-apple"></i>App Store
   					</a>
   				</li>
   				<li class="play-store">
   					<a href="<?php echo carbon_get_post_meta($id, 'sv_href2' ); ?>" class="button round large" title="">
   						<i class="icon ion-social-android"></i>Play Store</a>
   					</li>
   				<li class="windows-store">
   					<a href="<?php echo carbon_get_post_meta($id, 'sv_href3' ); ?>" class="button round large" title="">
   						<i class="icon ion-social-windows"></i>Win Store</a>
   					</li>
   			</ul>

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta -->

<?php get_footer(); ?>


   

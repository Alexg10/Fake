<?php
/*
Template Name: Fake Template
*/
?>

<?php get_header(); ?>

<div class="popin">
	
</div>

<?php

// check if the flexible content field has rows of data
if( have_rows('fake_theme') ):

     // loop through the rows of data
    while ( have_rows('fake_theme') ) : the_row();


        if( get_row_layout() == 'landing_full_width' ): ?>
        	<?php $main_cover =  get_sub_field('landing_background')['url'];
        	?>
			<div class="container_full_page">
	        	<div class="cover_full_width" style="background-image: url('<?php echo $main_cover; ?>')" >
	        	</div>
			</div>


        <?php elseif( get_row_layout() == 'presentation' ): ?>
        	<?php 
        		$presentation_img =  get_sub_field('presentation_image');
        	?>
    		<div class="container presentation_container">
        		<div class="presentation">
        			<div class="col-left">
						<img src="<?php echo $presentation_img['sizes']['large']; ?>">
        				
        			</div>
        			<div class="col-right">
        				<p>
        					<?php the_sub_field('presentation_description'); ?>
        				</p>
        			</div>
        		</div>        			
    		</div>

        <?php elseif( get_row_layout() == 'video_full_width' ): ?>
        	<?php 
        		$video_cover =  get_sub_field('video_cover');
        	?>
        		<div class="video_container">
	        		<div class="container">
		        		<div class="video">
		        			<iframe  class="video_iframe" width="1170" height="658" src="<?php echo the_sub_field('video_link'); ?>" frameborder="0" allowfullscreen></iframe>
		        			<div class="cover_container">
		        				<div class="video_hover"></div>
								<img src="<?php echo $video_cover['sizes']['large']; ?>">
		        				
		        			</div>
		        		</div>        			
	        		</div>
        		</div>
	        <?php elseif( get_row_layout() == 'dates_display' ): ?>
	        	<?php 
	        		$dates_img =  get_sub_field('dates_background')['url'];
	        	?>
	        	<div class="dates_container" style="background-image: url('<?php echo $dates_img; ?>')">
		    		<div class="container">
		    			<h2><?php the_sub_field('dates_title');?></h2>
		        		<div class="presentation">
		        		
				        	<?php 
						     $dates_display = get_sub_field('dates_list');			        	
				        	foreach( $dates_display as $date ): ?>	
				        	<ul>
								<li><?php echo $date['date_day']; ?></li>
								<li><?php echo $date['date_place']; ?></li>
								<li><?php echo $date['date_event']; ?></li>
								<li><?php echo $date['date_link']; ?></li>
							</ul>
	    			        	<?php 
	        			        	$image = $gallery_picture;
	        			        	$image = $image['sizes']['gallery_size'];
				        	  
				        	endforeach; ?>
		        		
		        		</div>        			
		    		</div>
	        	</div>

    	        <?php elseif( get_row_layout() == 'band_presentation' ): ?>
    	        	<?php 
    	        		$dates_img =  get_sub_field('dates_background')['url'];
    	        	?>
    	        	<div class="band_presentation_container" style="background-image: url('<?php echo $dates_img; ?>')">
    		    		<div class="container">
    		        		<div class="band">
    		        		
    				        	<?php 
    						     $band_presentation = get_sub_field('band_member');			        	
    				        	foreach( $band_presentation as $member ): ?>	
    				        		<div class="member">    				        			
    				        			<div class="member_infos">
    				        				<div>
    				        					<div><?php echo $member['member_name']; ?></div>
    				        					<div><?php echo $member['member_instru']; ?></div>
    				        				</div>
    				        			
    				        			</div>
    				        			<div class="member_picture"><img src="<?php echo $member['member_picture']['sizes']['medium']; ?>"></div>
    				        		</div>

    	    			        	<?php 
    	        			        	$image = $gallery_picture;
    	        			        	$image = $image['sizes']['gallery_size'];
    				        	  
    				        	endforeach; ?>
    		        		
    		        		</div>     

    		        		<div class="slider_member data-flickity">
        		        	<?php 
        				     $band_presentation = get_sub_field('band_member');	
					        	foreach( $band_presentation as $member ): ?>	
					        		<div class="member">  
					        			<div class="member_picture"><img src="<?php echo $member['member_picture']['sizes']['medium_large']; ?>"></div>  				        			
					        			<div class="member_infos">
					        				<div>
					        					<div><?php echo $member['member_name']; ?></div>
					        					<div><?php echo $member['member_instru']; ?></div>
					        					<div><?php echo $member['member_description']; ?></div>

					        				</div>
					        			
					        			</div>

					        		</div>

		    			        	<?php 
		        			        	$image = $gallery_picture;
		        			        	$image = $image['sizes']['gallery_size'];
					        	  
					        	endforeach; ?>
    		        		</div>   			
    		    		</div>
    	        	</div>

        	        <?php elseif( get_row_layout() == 'album_display' ): ?>
        	        	<div class="album_display_container" style="background-image: url('<?php echo $dates_img; ?>')">
        		    		<div class="container">
        		        		<div class="albums">
        		        		
        				        	<?php 
        						     $album_presentation = get_sub_field('album_container');			        	
        				        	foreach( $album_presentation as $album ): ?>	
        				        		<div class="single_album">    				        		<div class="album_picture">
        				        				<img src="<?php echo $album['album_cover']['sizes']['medium_large']; ?>">
        				        			</div>
        				        			<div class="album_infos">
        				        				<div>
        				        					<div><h3 class="album_title"><?php echo $album['album_title']; ?></h3></div>
        				        					<div class="album_description"><?php echo $album['album_description']; ?></div>
        				        					<button class="album_btn btn">
        				        						<a href="<?php echo $album['album_link']; ?>"><?php echo $album['album_link_txt']; ?>
        				        						</a>
        				        					</button>
        				        					<div>
        				        					<iframe class="extract_album" width="100%" height="150" scrolling="no" frameborder="no" src="<?php echo $album['album_song']; ?>"></iframe></div>
        				        				</div>
        				        			</div>
        				        		
        				        		</div>

        	    			        <?php endforeach; ?>
        		        		
        		        		</div>   
        		        	</div>  
        		        </div>

	                <?php elseif( get_row_layout() == 'gallerie_display' ): ?>

	                	<div class="gallery_display_container">
	        	    		<div class="container">
	        	        		<div class="gallery">
	        	        		
	        			        	<?php 
	        					     $gallery_photo = get_sub_field('gallerie_photo_display');
	        					     $i=0;
	        			        	foreach( $gallery_photo as $gallery ): ?>
	        			        		<?php $i++ ?>	
	        			        	<div>

	        			        		<div class="single_gallery gallery_<?php echo $i; ?>">  
	        			        			<div class="gallery_content">
	        			        				<h4 class="gallery_title"><?php echo $gallery['gallerie_name']; ?></h4>

	        			        				<img src="<?php echo $gallery['gallerie_cover']['sizes']['medium_large']; ?>">
	        			        			</div>  
	        	
	        			        			
								        	<?php 
								        	$pictures = get_sub_field('gallerie_photo');
								        	if (($pictures) !=null ):	?>
									        	<div class="column_picture">
									        		<?php 		        	
									        		foreach( $pictures as $picture ): ?>	        		   
									        		        <img src="<?php echo $picture['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									        		<?php endforeach; ?>
									        	</div>
									        <?php endif; ?>
	        			        		</div>
	            			        <?php endforeach; ?>

	            			        <div class="rsx_scx_block">
	            			        	<p class="rsx_scx_title"><?php echo "Suivez-nous"; ?></p>
            			        		<div class="rsx_scx_container">

            			        			<div class="scx_link">
            			        				<a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a>
    <!--         			        				<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instagram"></i></a> -->
            			        				<a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a>
            			        				<a href="<?php echo the_field('soundcloud_link', 'option'); ?>" target="_blank"><i class="icon-soundcloud"></i></a>
            			        				<a href="<?php echo the_field('youtube_link', 'option'); ?>" target="_blank"><i class="icon-youtube"></i></a>

            			        			</div>
	            			
	            			        		
	            			        	</div>
	            			        </div>
	        	        		
	        	        			</div>   
		        	        	</div>  
		        	        </div>
						</div>


        <?php endif;

    endwhile;

else :

    echo "no";

endif;

?>



<?php get_footer(); ?>
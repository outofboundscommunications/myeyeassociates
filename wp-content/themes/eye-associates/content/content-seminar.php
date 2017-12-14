<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div style="background-color:#F9F7F7;" class="content-container">
			<div class="container seminarcls">
				<div class="row">
					<div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="bordercls">
                                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()."/images/logo1.jpg" ?>" />
                                </div>                                
                            </div>
                            <div class="col-sm-6">
                                <div class="bordercls">
                                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()."/images/logo2222.jpg" ?>" />
                                </div>                                
                            </div>
                        </div>                        
						<h2>Current Seminar Dates and Locations</h2>
						<h4>Date, Time, Location</h4>
						<?php /* list of seminar dates */ 
							$posts = get_posts( 'post_type=seminars&numberposts=-1&post_status=publish' );
							if(!empty($posts)){
								?>
								<ul>
									<?php foreach($posts as $post) { ?>
									<li>
									<?php echo get_field('date_and_time',$post->ID); ?> - <?php echo $post->post_title; ?>
									</li>
									<?php } ?>
								</ul>
								<?php
							}
						?>
					</div>
					<div class="col-sm-6">
						<p>Fill out the form below and select a seminar date you would like to attend. You will receive a confirmation email. Thank you!</p>
						<?php echo do_shortcode('[gravityform id="2"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->		
</article><!-- #post -->
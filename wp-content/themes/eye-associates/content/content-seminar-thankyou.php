<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div style="background-color:#F9F7F7;" class="content-container">
			<div class="container ">
				<div class="row">
					<div class="col-sm-4">
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
					</div>
					<div class="col-sm-8">
						<?php
							if(isset($_GET['eid'])){
								$eid=$_GET['eid'];
								?>
								<p>Thank you [Name] for signing up for the LASIK seminar with Eye Associates and LASIKPlus.</p>
								<p>We look forward to seeing you on:</p>
								<ul>
									<li>[date]</li>
									<li>[time]</li>
									<li>[address]</li>
								</ul>
								<p>If you have any questions, please don't hasitate to call us at: 913-339-9090 or email us.</p>
								<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->		
</article><!-- #post -->
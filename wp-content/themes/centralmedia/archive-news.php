<?php get_header(); ?>
	
	<div class="row content">
		<div class="col l8 s12 m6 news-block ">
			<div class="news-sign center">НОВИНИ</div>
			<?php 
				 $args = array(
	                'post_type' => 'news',
	                'posts_per_page' => 10,
	                'publish' => true,
	                'orderby' => 'date',
	                'order' => 'DESC'
	            );
	            $myposts = get_posts( $args );
	            if ( $myposts ) {
		            foreach( $myposts as $post ){
		            	the_post($post);
	        ?>
							<div class="article"> 
								<div class="article-title">
									<a href="<?php the_permalink(); ?>" class="hover-link"><em>фото</em><?php the_title(); ?></a>
								</div>
							</div>
			<?php
	    			} //end foreach
				wp_reset_postdata();
					the_posts_pagination( $pagination_args );
				} //end if
				else {
					// If no content, include the "No posts found" template.
					echo '<div> Публікацій не знайдено </div>';
				}
			?>
			<div class="article"> 
				<div class="article-title">
					<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
						Путін заявив, що Росія сильніша за будь-якого агресора
					</a>
				</div>
			</div>
		</div>
	
		<!--state-->
		<div class="col l4 s12 m6 center state-block">
			<div class="state-list">
				<div class="state-sign center">Актуальне</div>
				<div class="blogs">
					<?php 
						$args = array(
			                'post_type' => 'articles',
			                'numberposts' => 3,
			                'publish' => true,
			                'orderby' => 'date',
			                'order' => 'DESC',
			                'paged' => get_query_var('paged')
			            );
			            $myposts = get_posts( $args );
						foreach( $myposts as $post ){
							setup_postdata($post);
					?>
							<div class="row other-state">
								<div class="col s12 m12 l12">
									<img src="<?php the_post_thumbnail_url(); ?>" width="40%" alt="" class="state-other-float">
									<a href="<?php the_permalink(); ?>" class="hover-link">
										<div class="state-other-name"><?php the_title(); ?></div>
									</a>
									<div class="state-other-text">
										<?php
											short_desc_article(120);
										?>
									</div>
								</div>
							</div>
					<?php
						} /* end foreach */
						wp_reset_postdata();
			        ?>		
				</div>
			</div>
		</div>
	</div>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>
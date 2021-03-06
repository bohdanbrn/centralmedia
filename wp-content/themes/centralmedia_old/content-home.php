<div class="row slider-section">
	<!--slider-->
	<div class="col l8 s12 m12">
		<?php
			$args = array(
				'post_type' => 'news',
				'numberposts' => 1,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC',
				'tag' => 'Сенсація'
			);
			$myposts = get_posts( $args );
			if ( $myposts ) {
				foreach( $myposts as $post ) {
					setup_postdata($post);
		?>
					<div style="text-align:center;">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url();?>" style="width:90%; max-height:350px; margin:0 auto;">
							<div style="text-align:center; font-size:2.5em;"> <?php the_title(); ?> </div>
						</a>
					</div>
		<?php
				}
			}
			else {
		?>
				<div class="carousel carousel-slider center" data-indicators="true">
		
					<div class="carousel-fixed-item center  hide-on-med-and-down">
						<a class="btn waves-effect slider-button white-text darken-text-2">Перейти</a>
					</div>
					<div class="carousel-item slide-1 white-text" href="#one!">
						<h2 class="slider-sign-main">ТОП-5 Новин</h2>
						<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					</div>
					<div class="carousel-item slide-2 white-text" href="#two!">
						<h2 class="slider-sign-main">ТОП-5 Новин</h2>
						<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					</div>
					<div class="carousel-item slide-1 white-text" href="#three!">
						<h2 class="slider-sign-main">ТОП-5 Новин</h2>
						<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					</div>
					<div class="carousel-item slide-2 white-text" href="#four!">
						<h2 class="slider-sign-main">ТОП-5 Новин</h2>
						<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					</div>	
				</div>
		<?php
			}
		?>
	</div>

	<!--Blogs-->
	<div class="col l4 s12 m12">
		<div class="blogs">
			<a class="black-text" href="<?php echo get_post_type_archive_link('blogs'); ?>">
				<span class="blog-sign"> БЛОГИ </span>
			</a>
			<?php 
			$args = array(
				'post_type' => 'blogs',
				'numberposts' => 3,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$myposts = get_posts( $args );

			foreach( $myposts as $post ) {
				setup_postdata( $post );
				$author_id = get_the_author_meta( 'ID' );
				//if ( has_wp_user_avatar($author_id) ) { //blog displayed in homepage only if blogger has avatar
				?>
				<div class="blog-block row">
					<div class="blogger-photo col l3 m2 s3 center" >
						<a href="<?php echo get_author_posts_url( $author_id ); ?>" >
							<img class="blogger-photo-min" src="<?php echo get_wp_user_avatar_src( $author_id ); ?>" alt="bloger_avatar">
						</a>
					</div> 
					<div class="blogger-article col l9 m10 s9">
						<a href="<?php echo get_author_posts_url( $author_id ); ?>" >
							<div class="blogger-name">
								<?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ); ?>
							</div>
						</a>
						<div class="blogger-speach">
							<a href="<?php the_permalink(); ?>" class="blog-short-desc" >
								<?php
									short_desc_post(100);	// display short content (100 symbols)
								?>
							</a>
						</div>
					</div>
				</div>
				<?php
				//} // end if
				} // end foreach
				wp_reset_postdata();
				?>
		</div>
	</div>
</div>

<!--news-->
<div class="row content">
	<div class="col l6 s12 m12 s12 news-block ">
		<div class="news-sign center"><a class="black-text" href="<?php echo get_post_type_archive_link('news'); ?>"> ОСТАННІ НОВИНИ </a></div>
		<?php 
		$args = array(
			'post_type' => 'news',
			'numberposts' => 10,
			'publish' => true,
			'orderby' => 'date',
			'order' => 'DESC'
		);
		$myposts = get_posts( $args );

		foreach( $myposts as $post ) {
			setup_postdata($post);
			?>
			<div class="article"> 
				<div class="article-title">
					<a href="<?php the_permalink(); ?>" class="hover-link">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						<?php the_time('G:i'); ?>
						<?php the_title(); ?>
					</a>
				</div>
			</div>
			<?php
		} /* end foreach */
		wp_reset_postdata();
		?>

		<!-- приклад виводу новин з іншими іконками
		<div class="article"> 
		<div class="article-title">
		<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
		Путін заявив, що Росія сильніша за будь-якого агресора
		</a>
		</div>
		</div>
		<div class="article"> 
		<div class="article-title">
		<a href="#" class="hover-link red-text "><em>фото</em>ДЕПУТАТ У ДНІПРІ ПОПАВСЯ НА ХАБАРІ</a>
		</div>
		</div>
		<div class="article"> 
		<div class="article-title">
		<a href="#" class="hover-link"><em>фото</em>В Росії цензура не пропустила три книги для Сущенка</a>
		</div>
		</div>
		-->
	</div>

	<!--Videos-->
	<div class="col l3 s12 m6 center video-block">
		<div class="news-sign-video center"><a class="black-text" href="<?php echo get_post_type_archive_link('video'); ?>"> ВІДЕО </a></div>
		<div class="video-list row">
			<a href="#" >
				<div class="youtube col l6 s6">
					<img width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon.png" alt="альтернативный текст" />
					<div class="center">Канал YouTube</div>
				</div>
			</a>
			<a href="#" >
				<div class="youtube col l6 s6">
					<img  width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon-stream.png" alt="альтернативный текст" />
					<div class="center">Онлайн трансляція</div>
				</div>
			</a>
		</div>
		<div class="top-video">Топ Відео</div>
		<?php 
		$args = array(
			'post_type' => 'video',
			'numberposts' => 5,
			'publish' => true,
			'orderby' => 'date',
			'order' => 'DESC'
			);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ){
			setup_postdata($post);
		?>
			<div class="row video-padding">
				<div class="youtube-top-video col l4 s6">
					<a href="#" >
					<img width="80%" src="<?php video_thumbnail(); ?>" alt="альтернативный текст" />
					</a>
				</div>
				<div class="video-text col l8 s6">
					<a href="<?php echo get_post_meta( $post->ID, 'video_url', true ); ?>" class="hover-link" target="_blank">
						<?php the_title(); ?>
					</a> 
				</div>
			</div>
			<?php
		} /* end foreach */
		wp_reset_postdata();
		?>
	</div>

	<!--state-->
	<div class="col l3 s12 m6 center state-block">
		<div class="state-list">
			<div class="state-sign center"><a class="black-text" href="<?php echo get_post_type_archive_link('articles'); ?>"> СТАТТІ </a></div>
			<div class="blogs">
				<?php 
				$args = array(
					'post_type' => 'articles',
					'numberposts' => 4,
					'publish' => true,
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$firstArticle = false;
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) {
					setup_postdata($post);
					if ($firstArticle == false) {
						?>
						<div class="row main-state">
							<div class="col s12 m12 l12">
								<a href="#" ><img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt=""></a>
								<a href="<?php the_permalink(); ?>" class="hover-link">
									<span class="state-first-name"><?php the_title(); ?></span>
								</a>
								<div>
									<?php short_desc_post(120);	// display short content (120 symbols)?>
								</div>
							</div>
						</div>
						<?php
					} /* end if */
					else {
						?>
						<div class="row other-state">
							<div class="col s12 m12 l12">
								<a href="#" ><img src="<?php the_post_thumbnail_url(); ?>" width="40%" alt="" class="state-other-float"></a>
								<a href="<?php the_permalink(); ?>" class="hover-link">
									<div class="state-other-name"><?php the_title(); ?></div>
								</a>
								<div class="state-other-text">
								<?php short_desc_post(120);	// display short content (120 symbols)?>
								</div>
							</div>
						</div>

						<?php
					} /* end else */
					$firstArticle = true;
				} /* end foreach */
				wp_reset_postdata();
				?>		
			</div>
		</div>
	</div>
</div>


<div class="row content" style="text-align:center;">
	<h3> Топ новин: </h3>
	<ul>
		<?php
			$month = date('m');
			$year = date('Y');

			$args = array(
				'post_type' => 'news',
				'numberposts' => 5,
				'publish' => true,
				'meta_key' => 'post_views_count',
				'year' => $year,
				'monthnum' => $month,
				'orderby' => 'meta_value_num'
				//'order' => 'DESC'
			);
			//$myposts = get_posts( 'post_type=news&numberposts=5&meta_key=post_views_count&orderby=meta_value_num&year=' . $year . '&monthnum=' . $month );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) {
				setup_postdata( $post );
		?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" class="hover-link">
						<?php the_title(); ?>
					</a>
				</li>
		<?php
			} //end foreach
			wp_reset_postdata();
		?>
	</ul>
</div>

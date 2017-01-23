<?php
add_theme_support( 'post-thumbnails' ); // adds capabilities to create thumbnails for posts

function register_styles() { // adds files with styles
	wp_enqueue_style( 'materialize.min', get_template_directory_uri() . '/css/materialize.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
wp_enqueue_style( 'google-icon-font', get_template_directory_uri() . '/css/google-icon-font.css' ); // Import Google Icon Font
}
add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_scripts() { // adds files with script
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery-2.1.1.min', get_template_directory_uri() . '/js/jquery-2.1.1.min.js');
	wp_enqueue_script( 'materialize.min', get_template_directory_uri() . '/js/materialize.min.js');
	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js');
	wp_enqueue_script( 'typed.min', get_template_directory_uri() . '/js/typed.min.js');
wp_enqueue_script( 'd97a6585c2', get_template_directory_uri() . '/js/d97a6585c2.js'); // https://use.fontawesome.com/d97a6585c2.js
// wp_enqueue_script( 'ajax-poll', get_template_directory_uri() . '/Ajax_Poll/ajax-poll.php'); - підключається в футері
}
add_action( 'wp_enqueue_scripts', 'register_scripts' );

register_nav_menu( 'menu', 'Меню сайту' ); // addition of the ability to create menus

register_sidebar();


function short_desc_post($charlength) {		// function for display short content for posts
	$excerpt = get_the_excerpt();
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength);
		echo $subex . '...';
	} else {
		echo $subex;
	}
}


//settings for display archive posts
	function my_pre_get_posts( $query ) {
		// if ( ! is_admin() && $query->is_main_query() ) {
			$queried_object = get_queried_object();
		if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'news' && $query->is_main_query() ) { // якщо запит виконується не в адмінці, на сторінці архівів, сторінка є ахівом новин та якщо запит є головним
			$query->set( 'posts_per_page', 10 );
		}
		else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'articles' && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 12 );
		}
		else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'blogs' && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 6 );
		}
		else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'video' && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 12 );
		}
		else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'partner-news' && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 15 );
		}
		else if ( !is_admin() && $query->is_search && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 10 );
		}
	}
	add_action( 'pre_get_posts', 'my_pre_get_posts' );
// end settings for display archive posts


// pagination settings
	// delete H2 from pagination template
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ) {
	/*
	Вид базового шаблону:
	<nav class="navigation %1$s" role="navigation">
	<h2 class="screen-reader-text">%2$s</h2>
	<div class="nav-links">%3$s</div>
	</nav>
	*/
	return '
	<nav class="%1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
	}
	$pagination_args = array(
		'prev_text' => __( '&#8249;' ),
		'next_text' => __( '&#8250;' ),
		);
// end pagination settings


// login form settings
	function author_log() {
		if ( !is_user_logged_in() ): ?>
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4 class="center ">Авторизація</h4>
				<a href="#!" class="modal-action modal-close waves-effect waves-red accent-4 btn-flat">
					<i class="material-icons">&#xE14C;</i>
				</a>
				<form class="login-form center" name="form" action="<?php $home_url = get_home_url(); echo wp_login_url( $home_url ); ?>" method="post">
					<div id="">
						<input type="text" name="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" id="login" placeholder="Логін" required/>
						<input type="password" name="pwd" id="password" placeholder="Пароль" required/>
						<button type="submit" id="submit" name="submit" class="waves-effect  waves-red btn-flat"><span class="enter-button-styles">Вхід</span></button>
						<a href="<?php bloginfo('url') ?>/registration.php" class="waves-effect center  waves-red btn-flat">Зареєструватися</a>
						<div>
							<a href="<?php bloginfo('url') ?>/wp-login.php?action=lostpassword" id="forgot" class="waves-effect waves-red btn-flat">Забули пароль?</a>
						</div>
					</div>
				</form>
				<div class="modal-fooedter "> </div>
			</div>
		</div>
	<? else: ?>
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4 class="center ">Ваш профіль</h4>
			<a href="#!" class="modal-action modal-close waves-effect waves-red accent-4 btn-flat">
				<i class="material-icons">&#xE14C;</i>
			</a>
			<div id="popup_name" class="popup_block">
				<div id="loginForm" action="" method="post">
					<div class="cont-side">
						<center>
							<?php
								global $current_user;  get_currentuserinfo(); echo get_avatar( $current_user->user_email, '96' ); 
								// $current_user = wp_get_current_user();
							?>
							<div class="login"><?php echo 'Логін: ' . $current_user->user_login; ?></div>
							<div class="name"><?php echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?></div>
							<?php
							global $user_ID;
							if( $user_ID ) :
								if( current_user_can('level_2') or current_user_can('level_10') ) : ?>
							<div> <a href="<?php bloginfo('url') ?>/wp-admin/index.php">Адміністрування</a> </div>
							<?php
							else :
								endif;
							endif;
							?>
							<a href="<?php bloginfo('url') ?>/wp-admin/profile.php" title="изменить">Редагувати</a>
						</center>
						<div class="submit" style="float:right; padding-bottom:10px;">
							<a href="<?php $home_url = get_home_url(); echo wp_logout_url( $home_url ); ?>" class="modal-action waves-effect waves-red accent-4 btn-flat">
								<i class="material-icons">Вийти</i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;
	}
// end login form settings


// registration form settings
	function registration_form( $username, $password, $email, $website, $first_name, $last_name, $bio ) {
		echo '
			<form class="contact_form" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
				<ul>
					<li>
						<h2 class="center">Реєстрація</h2>
					</li>
					<li>
						<label for="username">Логін <strong>*</strong></label>
						<input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '" required >
					</li>

					<li>
						<label for="password">Пароль <strong>*</strong></label>
						<input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
					</li>

					<li>
						<label for="email">Email <strong>*</strong></label>
						<input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '" required>
					</li>

					<li>
						<label for="website">Веб-сайт</label>
						<input type="text" name="website" value="' . ( isset( $_POST['website']) ? $website : null ) . '">
					</li>

					<li>
						<label for="firstname">Ім\'я</label>
						<input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
					</li>

					<li>
						<label for="website">Прізвище</label>
						<input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
					</li>

					<li>
						<label for="bio">Біографічна інформація</label>
						<textarea name="bio">' . ( isset( $_POST['bio']) ? $bio : null ) . '</textarea>
					</li>

					<li>
						<input type="submit" name="submit" value="Зареєструватися" class="submit btn-flat green waves-effect waves-red white-text"/>
					</li>
					<div class="registration-errors">';
						global $reg_errors;
						if ( is_wp_error( $reg_errors ) ) {
							foreach ( $reg_errors->get_error_messages() as $error ) {
								echo '<div class="registration-error"><strong>Помилка</strong>:' . $error . '<br/></div>';
							}
						}
					echo '</div>
				</ul>
			</form>
		';
	}

	function registration_validation( $username, $password, $email, $website, $first_name, $last_name, $bio )  {
		global $reg_errors;
		$reg_errors = new WP_Error;
		if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
			$reg_errors->add('field', 'Заповніть усі обов\'язкові поля');
		}
		if ( 4 > strlen( $username ) ) {
			$reg_errors->add( 'username_length', 'Ім\'я користувача повинно містити хоча б 4 символи' );
		}
		if ( username_exists( $username ) )
			$reg_errors->add('user_name', 'На жаль, це ім\'я користувача вже існує!');
		if ( !validate_username( $username ) ) {
			$reg_errors->add( 'username_invalid', 'На жаль, введене Вами ім\'я користувача введене неправильно' );
		}
		if ( 5 > strlen( $password ) ) {
			$reg_errors->add( 'password', 'Довжина пароля повинна бути більше 5 символів' );
		}
		if ( !is_email( $email ) ) {
			$reg_errors->add( 'email_invalid', 'Email введений неправильно' );
		}
		if ( email_exists( $email ) ) {
			$reg_errors->add( 'email', 'Email вже використовується' );
		}
		if ( !empty( $website ) ) {
			if ( !filter_var( $website, FILTER_VALIDATE_URL ) ) {
				$reg_errors->add( 'website', 'Введена неправильна адреса веб-сайту' );
			}
		}
	}

	function complete_registration() {
		global $reg_errors, $username, $password, $email, $website, $first_name, $last_name, $bio;
		if ( 1 > count( $reg_errors->get_error_messages() ) ) {
			$userdata = array(
				'user_login'    =>   $username,
				'user_email'    =>   $email,
				'user_pass'     =>   $password,
				'user_url'      =>   $website,
				'first_name'    =>   $first_name,
				'last_name'     =>   $last_name,
				'description'   =>   $bio,
				);
			$user = wp_insert_user( $userdata );
			echo '<div class="">Реєстрація завершена. Перейдіть на <a href="' . get_site_url() . '/wp-login.php">сторінку авторизації</a>.</div>';  
			exit;
		}
	}

	function custom_registration_function() {
		if ( isset($_POST['submit'] ) ) {
			registration_validation(
				$_POST['username'],
				$_POST['password'],
				$_POST['email'],
				$_POST['website'],
				$_POST['fname'],
				$_POST['lname'],
				$_POST['bio']
			);

			// sanitize user form input
			global $username, $password, $email, $website, $first_name, $last_name, $bio;
			$username   =   sanitize_user( $_POST['username'] );
			$password   =   esc_attr( $_POST['password'] );
			$email      =   sanitize_email( $_POST['email'] );
			$website    =   esc_url( $_POST['website'] );
			$first_name =   sanitize_text_field( $_POST['fname'] );
			$last_name  =   sanitize_text_field( $_POST['lname'] );
			$bio        =   esc_textarea( $_POST['bio'] );

			// call @function complete_registration to create the user
			// only when no WP_error is found
			complete_registration(
				$username,
				$password,
				$email,
				$website,
				$first_name,
				$last_name,
				$bio
			);
		}

		registration_form(
			$username,
			$password,
			$email,
			$website,
			$first_name,
			$last_name,
			$bio
		);
	}
// end registration form settings


// capabilityes
    require 'my-custom-posts.php';
// end capabilityes

//hide not used fields
	function remove_menus(){
		global $menu;
		$restricted = array(
			__('Dashboard'),
			__('Posts'),
		);
		end ($menu);
		while (prev($menu)){
			$value = explode(' ', $menu[key($menu)][0]);
			if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
				unset($menu[key($menu)]);
			}
		}
	}
	add_action('admin_menu', 'remove_menus');
//end hide not used fields
?>

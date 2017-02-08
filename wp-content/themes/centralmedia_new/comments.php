<?php
/**
 * Шаблон комментариев (comments.php)
 * Выводит список комментариев и форму добавления
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div id="comments"> <?php // див с этим id нужен для якорьных ссылок на комменты ?>
	<div class="comment-sign">Всього коментарів: <?php echo get_comments_number(); // общие кол-во комментов ?></div>
	<?php if (have_comments()) : // если комменты есть ?>
	<ul class="comment-list media-list">
		<?php
			$args = array( // аргументы для списка комментариев, некоторые опции выставляются в админке, остальное в классе clean_comments_constructor
				'walker' => new clean_comments_constructor, // класс, который собирает все структуру комментов, нах-ся в function.php
			);
			wp_list_comments($args); // выводим комменты
		?>
	</ul>
		<?php if (get_comment_pages_count() > 1 && get_option( 'page_comments')) : // если страниц с комментами > 1 и пагинация комментариев включена ?>
		<?php $args = array( // аргументы для пагинации
				'prev_text' => '«', // текст назад
				'next_text' => '»', // текст вперед
				'type' => 'array',
				'echo' => false
			); 
			$page_links = paginate_comments_links($args); // выводим пагинацию
			if( is_array( $page_links ) ) { // если пагинация есть
			    echo '<ul class="pagination comments-pagination">';
			    foreach ( $page_links as $link ) {
			    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
			        else echo "<li>$link</li>"; 
			    }
			   	echo '</ul>';
		 	}
		?>
		<?php endif; // если страниц с комментами > 1 и пагинация комментариев включена - конец ?>
	<?php endif; // // если комменты есть - конец ?>
	<?php if (comments_open()) { // если комментирование включено для данного поста
		/* ФОРМА КОММЕНТИРОВАНИЯ */
		$fields =  array( // разметка текстовых полей формы
			'author' => '<div class="form-group"><label for="author">Імя:</label><input class="form-control" id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30" required></div>', // поле Имя
			'email' => '<div class="form-group"><label for="email">Email:</label><input class="form-control" id="email" name="email" type="email" value="'.esc_attr($commenter['comment_author_email']).'" size="30" required></div>', // поле email
			'url' => '<div class="form-group"><label for="url">Сайт:</label><input class="form-control" id="url" name="url" type="text" value="'.esc_attr($commenter['comment_author_url']).'" size="30"></div>', // поле сайт
			);
		$args = array( // опции формы комментирования
			'fields' => apply_filters('comment_form_default_fields', $fields), // заменяем стандартные поля на поля из массива выше ($fields)
			'comment_field' => '<div class="form-group"><label for="comment">Коментар:</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" required></textarea></div>', // разметка поля для комментирования
			'must_log_in' => '<p class="must-log-in"><a href=". ' .wp_login_url( home_url() ).'" class="black-text">Ви повинні бути зареєстрованими</a></p>', // текст "Вы должны быть зарегистрированы!"
			'logged_in_as' => '<p class="logged-in-as">'.sprintf(__( 'Ви зайшли як <a href="%1$s">%2$s</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink',get_permalink()))).'</p>', // разметка "Вы вошли как"
			'comment_notes_before' => '<p class="comment-notes">Ваш email не буде публікуватися*</p>', // Текст до формы
			
			'id_form' => 'commentform', // атрибут id формы
			'id_submit' => 'submit', // атрибут id кнопки отправить
			'title_reply' => 'Залишити коментар:', // заголовок формы
			'title_reply_to' => 'Відповісти %s', // "Ответить" текст
			'cancel_reply_link' => 'Відмінити відповідь', // "Отменить ответ" текст
			'label_submit' => 'Відправити', // Текст на кнопке отправить
			'class_submit' => 'big-sign-line btn button-share' // новый параметр с классом копки, добавлен с 4.1
		);
	    comment_form($args); // показываем нашу форму
	} ?>
</div>
<?php

// register custom posts types
    function register_cpt_news() {
        $labels = array( 
            'name' => _x( 'Новини', 'news' ),
            'singular_name' => _x( 'Новини', 'news' ),
            'add_new' => _x( 'Додати новини', 'news' ),
            'add_new_item' => _x( 'Додати нові новини ', 'news' ),
            'edit_item' => _x( 'Редагувати новини', 'news' ),
            'new_item' => _x( 'Нові новини', 'news' ),
            'view_item' => _x( 'Переглянути', 'news' ),
            'search_items' => _x( 'Пошук', 'news' ),
            'not_found' => _x( 'Новини не знайдено', 'news' ),
            'not_found_in_trash' => _x( 'Новин в корзині не знайдено', 'news' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'news' ),
            'all_items' => _x( 'Всі новини', 'news' ),
            'name_admin_bar' => _x( 'Новини', 'news'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Новини',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'new',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_new',
                'read_post' => 'read_new',
                'delete_post' => 'delete_new',
                'edit_posts' => 'edit_news',
                'edit_others_posts' => 'edit_other_news',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_news',
                'read_private_posts' => 'read_private_news',
                /*
                'edit_post' => 'edit_new',
                'read_post' => 'read_new',
                'delete_post' => 'delete_new',
                'edit_posts' => 'edit_news',
                'edit_others_posts' => 'edit_others_news',
                'publish_posts' => 'publish_news',
                'read_private_posts' => 'read_private_news',
                'read' => 'read',
                'delete_posts' => 'delete_news',
                'delete_private_posts' => 'delete_private_news',
                'delete_published_posts' => 'delete_published_news',
                'delete_others_posts' => 'delete_others_news',
                'edit_private_posts' => 'edit_private_news',
                'edit_published_posts' => 'edit_published_news',
                'create_posts' => 'edit_news',
                */
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'news', $args );
    }

    function register_cpt_articles() {
        $labels = array( 
            'name' => _x( 'Статті', 'articles' ),
            'singular_name' => _x( 'Стаття', 'articles' ),
            'add_new' => _x( 'Додати статтю', 'articles' ),
            'add_new_item' => _x( 'Додати нову статтю ', 'articles' ),
            'edit_item' => _x( 'Редагувати статтю', 'articles' ),
            'new_item' => _x( 'Нова стаття', 'articles' ),
            'view_item' => _x( 'Переглянути', 'articles' ),
            'search_items' => _x( 'Пошук', 'articles' ),
            'not_found' => _x( 'Статті не знайдено', 'articles' ),
            'not_found_in_trash' => _x( 'Статтей в корзині не знайдено', 'articles' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'articles' ),
            'all_items' => _x( 'Всі статті', 'articles' ),
            'name_admin_bar' => _x( 'Статті', 'articles'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Статті',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'article',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_article',
                'read_post' => 'read_article',
                'delete_post' => 'delete_article',
                'edit_posts' => 'edit_articles',
                'edit_others_posts' => 'edit_other_articles',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_articles',
                'read_private_posts' => 'read_private_articles',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'articles', $args );
    }

    function register_cpt_blogs() {
        $labels = array( 
            'name' => _x( 'Блоги', 'blogs' ),
            'singular_name' => _x( 'Блог', 'blogs' ),
            'add_new' => _x( 'Додати блог', 'blogs' ),
            'add_new_item' => _x( 'Додати новий блог', 'blogs' ),
            'edit_item' => _x( 'Редагувати блог', 'blogs' ),
            'new_item' => _x( 'Новий блог', 'blogs' ),
            'view_item' => _x( 'Переглянути', 'blogs' ),
            'search_items' => _x( 'Пошук', 'blogs' ),
            'not_found' => _x( 'Блогів не знайдено', 'blogs' ),
            'not_found_in_trash' => _x( 'Блогів в корзині не знайдено', 'blogs' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'blogs' ),
            'all_items' => _x( 'Всі блоги', 'blogs' ),
            'name_admin_bar' => _x( 'Блог', 'blogs'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Блоги',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'blog',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_blog',
                'read_post' => 'read_blog',
                'delete_post' => 'delete_blog',
                'edit_posts' => 'edit_blogs',
                'edit_others_posts' => 'edit_other_blogs',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_blogs',
                'read_private_posts' => 'read_private_blogs',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'blogs', $args );
    }

    function register_cpt_partner_news() {
        $labels = array( 
            'name' => _x( 'Новини партнерів', 'partner_news' ),
            'singular_name' => _x( 'Новини партнерів', 'partner_news' ),
            'add_new' => _x( 'Додати новини партнерів', 'partner_news' ),
            'add_new_item' => _x( 'Додати нові новини партнерів ', 'partner_news' ),
            'edit_item' => _x( 'Редагувати новини партнерів', 'partner_news' ),
            'new_item' => _x( 'Нові новини партнерів', 'partner_news' ),
            'view_item' => _x( 'Переглянути', 'partner_news' ),
            'search_items' => _x( 'Пошук', 'partner_news' ),
            'not_found' => _x( 'Новини партнерів не знайдено', 'partner_news' ),
            'not_found_in_trash' => _x( 'Новин партнерів в корзині не знайдено', 'partner_news' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'partner_news' ),
            'all_items' => _x( 'Всі новини партнерів', 'partner_news' ),
            'name_admin_bar' => _x( 'Новини партнерів', 'partner_news'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Новини партнерів',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'partner_new',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_partner_new',
                'read_post' => 'read_partner_new',
                'delete_post' => 'delete_partner_new',
                'edit_posts' => 'edit_partner_news',
                'edit_others_posts' => 'edit_other_partner_news',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_partner_news',
                'read_private_posts' => 'read_private_partner_news',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'partner-news', $args );
    }

    function register_cpt_video() {
        $labels = array( 
            'name' => _x( 'Відео', 'video' ),
            'singular_name' => _x( 'Відео', 'video' ),
            'add_new' => _x( 'Додати відео', 'video' ),
            'add_new_item' => _x( 'Додати нове відео', 'video' ),
            'edit_item' => _x( 'Редагувати відео', 'video' ),
            'new_item' => _x( 'Нове відео', 'video' ),
            'view_item' => _x( 'Переглянути', 'video' ),
            'search_items' => _x( 'Пошук', 'video' ),
            'not_found' => _x( 'Відео не знайдено', 'video' ),
            'not_found_in_trash' => _x( 'Відео в корзині не знайдено', 'video' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'video' ),
            'all_items' => _x( 'Всі відео', 'video' ),
            'name_admin_bar' => _x( 'Відео', 'video'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Відео',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-video-alt3',
            'capability_type' => 'video',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_video',
                'read_post' => 'read_video',
                'delete_post' => 'delete_video',
                'edit_posts' => 'edit_videos',
                'edit_others_posts' => 'edit_other_videos',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_videos',
                'read_private_posts' => 'read_private_videos',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'video', $args );
    }


    function register_cpt_streams() {
        $labels = array( 
            'name' => _x( 'Стріми', 'stream' ),
            'singular_name' => _x( 'Стрім', 'stream' ),
            'add_new' => _x( 'Додати стрім', 'stream' ),
            'add_new_item' => _x( 'Додати новий стрім', 'stream' ),
            'edit_item' => _x( 'Редагувати стрім', 'stream' ),
            'new_item' => _x( 'Новий стрім', 'stream' ),
            'view_item' => _x( 'Переглянути', 'stream' ),
            'search_items' => _x( 'Пошук', 'stream' ),
            'not_found' => _x( 'Стрім не знайдено', 'stream' ),
            'not_found_in_trash' => _x( 'Стрім в корзині не знайдено', 'stream' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'stream' ),
            'all_items' => _x( 'Всі стріми', 'stream' ),
            'name_admin_bar' => _x( 'Стрім', 'stream'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Стріми',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 9,
            'menu_icon' => 'dashicons-video-alt3',
            'capability_type' => 'stream',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_stream',
                'read_post' => 'read_stream',
                'delete_post' => 'delete_stream',
                'edit_posts' => 'edit_streams',
                'edit_others_posts' => 'edit_other_streams',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_streams',
                'read_private_posts' => 'read_private_streams',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'revisions' ), //  'author', 'comments', 
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'streams', $args );
    }


    function register_cpt_folks_control() {
        $labels = array( 
            'name' => _x( 'Народний контроль', 'folks_control' ),
            'singular_name' => _x( 'Народний контроль', 'folks_control' ),
            'add_new' => _x( 'Додати народний контроль', 'folks_control' ),
            'add_new_item' => _x( 'Додати новий народний контроль', 'folks_control' ),
            'edit_item' => _x( 'Редагувати народний контроль', 'folks_control' ),
            'new_item' => _x( 'Новий народний контроль', 'folks_control' ),
            'view_item' => _x( 'Переглянути', 'folks_control' ),
            'search_items' => _x( 'Пошук', 'folks_control' ),
            'not_found' => _x( 'Народний контроль не знайдено', 'folks_control' ),
            'not_found_in_trash' => _x( 'Народних контролей в корзині не знайдено', 'folks_control' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'folks_control' ),
            'all_items' => _x( 'Всі народні контролі', 'folks_control' ),
            'name_admin_bar' => _x( 'Народний контроль', 'folks_control'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Народний контроль',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'folk_control',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_folk_control',
                'read_post' => 'read_folk_control',
                'delete_post' => 'delete_folk_control',
                'edit_posts' => 'edit_folks_control',
                'edit_others_posts' => 'edit_other_folks_control',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_folks_control',
                'read_private_posts' => 'read_private_folks_control',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'folks_control', $args );
    }

    add_action( 'init', 'register_cpt_news' );
    add_action( 'init', 'register_cpt_articles' );
    add_action( 'init', 'register_cpt_blogs' );
    add_action( 'init', 'register_cpt_partner_news' );
    add_action( 'init', 'register_cpt_video' );
    add_action( 'init', 'register_cpt_folks_control' );
    add_action( 'init', 'register_cpt_streams' );
// end register custom posts types



// add custom fields for custom posts types
    add_action( 'add_meta_boxes', function() {
        add_meta_box(
            'video_info',    //id атрибут HTML тега, контейнера блоку
            'Посилання на відео:',    //Заголовок/назва блоку(видно користувачам)
            'video_info_cb',    //Функція, яка виводить на екран HTML вміст блоку. Повинна виводити результат на екран.
            'video',    //Назва типу публікації для якої додається блок(може бути масив)
            'normal',    //Місце де буде видно блок: normal, advanced або side.
            'high'    //Пріоритет блоку для показу вище або нижче інших блоків: high або low.
        );
    });

    function video_info_cb() {
        global $post;
        $url = get_post_meta( $post->ID, 'video_url', true );

        //unique identifier, name of hidden field
        wp_nonce_field( __FILE__, 'video_nonce' );
    ?>
        <label for"video_url">URL: </label>
        <input type="text" name="video_url" id="video_url" class="widefat" value="<?php echo $url; ?>" />
    <?php
    }
    add_action('save_post', function() {
        global $post;
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

        //security check - nonce
        //verify this came from the our screen and with proper authorization,
        //because save_post can be triggered at other times
        if ( $_POST && wp_verify_nonce( $_POST['video_nonce'], __FILE__ ) ) {
            if ( isset($_POST['video_url']) ) {
                update_post_meta( $post->ID, 'video_url', $_POST['video_url'] );
            }
        }
    });



    add_action( 'add_meta_boxes', function() {
        add_meta_box(
            'partner_news_info',
            'Посилання на новини партнерів:',
            'partner_news_info_cb',
            'partner-news',
            'normal',
            'high'
        );
    });

    function partner_news_info_cb() {
        global $post;
        $url = get_post_meta( $post->ID, 'partner_news_url', true );

        //unique identifier, name of hidden field
        wp_nonce_field( __FILE__, 'partner_news_nonce' );
    ?>
        <label for"partner_news_url">URL: </label>
        <input type="text" name="partner_news_url" id="partner_news_url" class="widefat" value="<?php echo $url; ?>" />
    <?php
    }
    add_action('save_post', function() {
        global $post;
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

        //security check - nonce
        //verify this came from the our screen and with proper authorization,
        //because save_post can be triggered at other times
        if ( $_POST && wp_verify_nonce( $_POST['partner_news_nonce'], __FILE__ ) ) {
            if ( isset($_POST['partner_news_url']) ) {
                update_post_meta( $post->ID, 'partner_news_url', $_POST['partner_news_url'] );
            }
        }
    });



    add_action( 'add_meta_boxes', function() {
        add_meta_box(
            'streams_info',
            'Посилання на стрім:',
            'streams_info_cb',
            'streams',
            'normal',
            'high'
        );
    });

    function streams_info_cb() {
        global $post;
        $url = get_post_meta( $post->ID, 'stream_url', true );

        //unique identifier, name of hidden field
        wp_nonce_field( __FILE__, 'stream_nonce' );
    ?>
        <label for"stream_url">URL: </label>
        <input type="text" name="stream_url" id="stream_url" class="widefat" value="<?php echo $url; ?>" />
    <?php
    }
    add_action('save_post', function() {
        global $post;
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

        //security check - nonce
        //verify this came from the our screen and with proper authorization,
        //because save_post can be triggered at other times
        if ( $_POST && wp_verify_nonce( $_POST['stream_nonce'], __FILE__ ) ) {
            if ( isset($_POST['stream_url']) ) {
                update_post_meta( $post->ID, 'stream_url', $_POST['stream_url'] );
            }
        }
    });
// end add custom fields for custom posts types

?>
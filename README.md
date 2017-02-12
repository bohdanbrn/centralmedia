ver. 0.87
  - підключив single-article.php:
    - контент статті
    - по темі:
      - 4 публікації типу news, articles, blogs, video
      - за останні 30 днів
      - за категоріями, які має основна стаття
      - посуртовані по даті
    - публікації "по темі" виводяться по 3 шаблонам (новини та статті, відео, блоги)
    - якщо публікацій "по темі" < 4, то додатково виводяться останні статті
    - слайдер блогів
    - попередні статті:
      - новий файл для шаблону попередніх статтей (big-latest-article.php)
  - створив файли:
    - content-footer.php (новини та опитування)
    - cultural-events-slider.php (слайдер культурних подій)
    - top3-posts.php (шаблон виводу публікацій, які задає адмін)
      - підключив його до потрібних сторінок
  - підключив single-blogs.php

ver. 0.86
  - зробив шаблони для різних сторінок (content-home, style.css)

ver. 0.85
  - підключив archive-blogs.php:
    - популярне
    - блогери по алфавіту
    - новини
  - добавив кілька нових блогерів і блогів від них

ver. 0.84
  - підключив archive-articles.php:
    - попередні статті (6 останніх статтей)
    - популярні статті (публіковані за 21 день і посуртовані за переглядами)
    - статті, які виводяться в блоці "попередні статті" не виводяться в популярних
    - слайдер блогів
    - всі статті
    - новини

ver. 0.83
  - написав плагін "top3-posts", для надання адміну можливості виводу потрібних постів у топі
  - перейменував функцію show_popular_video() на show_small_video($video_id) з необов'язковим аргументом "$video_id" (functions.php, content-home.php)
  - підключив слайдер культурних подій на головній (content-home.php)

ver. 0.82
  - перейменував функціЇ щоб використовувати на інших сторінках: (functions.php)
    - show_news_for_homepage() на show_short_last_news()
    - show_latest_articles() на show_slider_post()
  - забрав опис поста для функції show_slider_post()
  - створив функції для виведення постів у малому та великому вигляді (show_big_post(), show_small_post() )
  - для функції show_small_post() додав необов'язковий аргумент $height (щоб можна було регулювати висоту поста)
  - підключив: (single-news.php, functions.php)
    - популярне 
    - останні новини

ver. 0.81
  - стаття в топі (archive-*.php), додав маску, забрав ховер для тега.
  - додав іконки кількості переглядів на головні для популярних відео (content-home)
  - пофіксив фон для тегів культурного слайдера (content-home)
  - збільшив z-index для pencil
  - для першого розділювача новин по днях забрав padding-top (content-home)
  - пофіксив блоги, додав маску для топ статті (archive-blog)
  - видалив всюди coontent-footer, крім single-news
  - пофіксив блоги (single-blogs)

ver. 0.80
  - забрав кнопку "швидке редагування" для постів та таксономії в адмінці:
    - wp-admin/includes/class-wp-posts-list-table.php
    - wp-admin/includes/class-wp-term-list-table.php
  - перейменував "народний контроль" на "народний кореспондент" (template-parts/custom-posts-types.php)
  - створив тип публікацій "культурні події" і кастомне поле для нього (url) (template-parts/custom-posts-types.php)
  - вимкнув адмін-бар для усіх користувачів (functions.php)
  - пофіксили теги в топ-статтях
  - перенесли іконки в навбар
  - стилізували популярні відео на головній
  - зробили плавніший слайдер народного кореспондента
  - пофіксили попередні блоги на головній


ver. 0.79
  - додав віджет погоди
  - переніс всі скрипти в футер
  - підключив matterialize i jqeary через  cdn

ver. 0.78
  - пофіксили ініціалізації js(header, footer,function)
  - повидалаяли зайві js файли

ver. 0.77
  - модал для народного кориспондента
 
ver. 0.76
  - перейменував my-custom-posts.php на custom-posts-types.php
  - добавив таксономію "категорії" для усіх кастомних типів публікацій, крім стрімів (custom-posts.php)
  - додав назви категорій, які надіслав Мирослав
  - пофіксив лайки для постів (не обновлявся лічильник після натискання на кнопку "подобається") (functions.php)
  - правильно підключив блок статтей на головній: (content-home.php, functions.php)
    - слайдер:останні 3 статті по даті
    - популярні статті: 2 популярні статті по кількості переглядів за 21 день
    - зробив щоб статті не дублювалися в двох блоках
    - в слайдері відображаються максимум 3 категорії, а в популярних статтях тільки 1 (бо мало місця)
  - добавив вивід категорій для популярних відео (виводиться тільки 1 категорія)
  - створив окремі файли для блоків, які повторюються на різних сторінках:
    - latest-news.php (останні новини)
    - slider-blogers.php (слайдер популярних блогів)
    - polls.php (опитування)
  - створив папку template-parts для додаткових файлів теми:
    - переніс туди додаткові файли з кореневої папки теми
  - підключив для single-news.php:
    - заголовок
    - кількість переглядів
    - час публікації
    - контент
    - слайдер популярних блогів
    - останні новини
    - опитування

ver. 0.75
  - зробив сторінку 404, результати пошуку, всі записи автора, сторінку тега
  - додав слайдер для культурних подій
  - додав ефект для маски при наведені

ver. 0.74
  - зробив народний кориспондент
  - пофіксив сторінку відео

ver. 0.73
  - лайки для постів (functions.php, post-like.js, single-news.php)
  - лайки і дизлайки для коментарів (плагін  Rating System)
  - відображення дня тижня для новин (functions.php)
  - додав функцію виводу скорочених заголовків (слайдер блогів(60), статті(75), новини(75), відео(75), блоги(55) ) (functions.php)

ver. 0.72
  - стилізував коментарі
  - народний кориспондент
  - футер на всіх сторінках одинаковий
  - фікси по мєлочах

ver. 0.71
  - стилізував коментарі

ver. 0.70
  - стилізував опитування
  - змінив в базі слово Votes на Голос

ver. 0.69
  - підключив на головній (content-home.php) :
    - посилання на архівні сторінки
    - слайдер для блогерів (блоги опубліковані за останній 21 день, посуртовані за кількістю переглядів(топовим є блог з найб. кільк. переглядів) )
    - статті (2 останні статті)
    - новини (виводить по 10 новин) (functions.php, style.css, loadmore.js)
    - популярні відео (опубліковані за останній 21 день і посуртовані за кількістю переглядів) (functions.php)
    - попередні блоги (3 останні блоги)
    - новини партнерів (6 останніх новин партнерів)
    - опитування (без стилів)
  - додав можливість коментувати для постів (single-news.php, single-article.php, single-blogs.php, single-video.php)

ver. 0.68
  - встановив плагін GetSocial (для відображення кнопок поділитися у соц. мережах)
  - додав нову тему
  - зробив вивід новин по датах (на головній для нової теми) (content-home.php)

ver.0.67
  - переклав кнопки опитування (frontend) (centralmedia.sql)
  - відновив відображення вкладки "майстерня" в адмінці (functions.php)
  - приховав дочірні вкладки ( домівка і оновлення) для вкладки "майстерня" (wp-admin/menu-header.php)
  - додав 2 нових типи публікацій (my-custom-posts.php):
    - стріми
    - народний контроль
  - додав кастомне поле (посилання на стрім) для стріму (my-custom-posts.php)
  - перейменував:
    - адміністратора на головного редактора
    - редактора на заступника головного редактора
    - автора на журналіста
  - додав 2 нові ролі:
    - журналіст стрічки новин
    - редактор стрічки новин

ver. 0.66
  - встановив і налаштував плагін TinyMCE Advanced (кастомний візуальний редактор)
  - переклав плагіни: (wp-content/languages/plugins/)
    - WP-Polls (wp-polls-uk.mo)
    - WP User Avatar (wp-user-avatar-uk.mo)
    - Video Thumbnails (video-thumbnails-uk.mo)
    - User Role Editor (user-role-editor-uk.mo)
    - TinyMCE Advanced (tinymce-advanced-uk.mo)
  - Перейменував "позначки" на "теги" (wp-content/languages/uk.mo)
  - COOKIE переглянутих постів зберігаються 30 хв (function.php)

ver. 0.65
  - поправив підрахунок переглядів (через COOKIES) (functions.php)
  - приховав тип публікацій записи і сторінки в адмін-барі (wp-includes/admin-bar.php)
  - автоматичний url для постів на латиниці (плагін - "Cyr to Lat enhanced")
  - динамічний title для різних сторінок (header.php)
  - топ 10 блогерів на сторінці блогів (по кількості постів) (functions.php)

ver. 0.64
  - додав кількість переглядів для постів (function.php)
  - вивів топ новин (по кількості переглядів) на головній (content-home.php)

ver. 0.63
  - забрав можливість вибору автора для публікації (my-custom-posts.php)
  - зробив відображення ієрархії коментарів (header.php)
  - зробив виведення новин за тегом "сенсація" на головну (content-home.php)
  - додав час публікації для новин (на головній) (content-home.php)
  - додав дату і час для повної інформації про публікацію (single-news.php(article, blogs) )
   
ver. 0.62
  - додав слово заголовок до форми для редагування публікацій (wp-admin/edit-form-advanced.php)
  - налаштував виведення випадкових опитувань
  - переклав кілька рос. слів (function.php)
  - зробив переадресацію на поточну сторінку після входу(виходу) в адмінку
  - налаштував додавання коментарів тільки для авторизованих користувачів
  - налаштував автоматичний фільтр коментарів по ключовим словам
  - приховав тип публікацій "сторінки" в адмінці
  - відключив сповіщення про оновлення Word Press для усіх крім адміна (файл wp-admin/includes/update.php)

ver. 0.61
  - додав пропущений коміт

ver. 0.60
  - підключив функціонал до файлів:
    - author.php
    - tag.php
  - редагував файли:
    - function.php
    - search.php
    - content-home.php
    - footer.php
  - видалив папку Ajax_Poll

ver. 0.59
  - підключив плагін WP-Pools
  - мінімальна розмітка коментарів, стреба переробити і стилізувати

ver. 0.58
  - додав сторінку tag 
  - видалив(закоментував) посилання "Більше інформаці" в user-edit 

ver. 0.57
  - забрав кольори майстерні

ver. 0.56
  - почистив admin-footer
  - забрав іконку Wordpress
  - доперекладав адмінку

ver. 0.55
  - Добавив посилання на картинки всюди
  - Лого в футері на головну
  - Стилізував форму залогіненого юзера
  - добавив сторінку автора(author.php)
  - редагував сторінку search.php

ver. 0.54
  - поміняв стилі для форм входу, реєстрації та забули пароль

ver. 0.53
  - приховав тип публіквцій 'записи' в адмінці

ver. 0.52
  - добавив файл my-custom-posts.php
  - редагував файли:
    - function.php
    - content-home.php
    - content-footer.php
    - archive-video.php
    - archive-partner-news.php
  - видалив плагін Toolset Types
  - написав код для додавання кастомних типів публікацій
  - написав код для додавання кастомних полів для публікацій:
    - video_url
    - partner_news_url
  - додав повноваження для ролей користувачів
  - додав 6 новин в БД

ver. 0.51
  - випраив вікно авторизації:
  - забрав тінь
  - стилі для меню
  - z-index для SideNav
  - поставив нові шрифти
  - виправив помилки з шрифтами

ver. 0.50
  - налаштував:
    - посилання для відео на головній
    - архів новин партнерів
    - архів відео

ver. 0.49
  - добавив сторінку для всіх новин партнерів

ver. 0.48
  - добавив файл registration.php
  - налаштував форми авторизації та реєстрації
  - налаштував SideNav

ver. 0.47
  - стилізував сторінку пошуку

ver. 0.46
  - додав шрифти для цілого документа

ver. 0.45
  - додав SideNav
  - кнопка меню хедері
  - для Iphone 5 стилі
  = стилі для кнопок голосувань
  - стилі для пагінатора

ver. 0.44
  - виправив стилі голосувань
  - опитимізував головну під різні девайси
  - і по мелочах

ver. 0.43
  - підключив до БД полоси "актуально" для архіву новин і статтей
  - встановив та налаштував плагін wp_user_avatar, для додавання можливості створювати свої аватари
  - добавив новий тип публікацій "новини партнерів"
  - добавив нові сторінки:
    - archive-partner-news.php
    - registration.php
  - підключив стилі до сторінок:
    - 404.php
    - simple-articles.php
    - archive-partner-news.php

ver. 0.421
  - добавив сторінку 404.php

ver. 0.42
  - поміняв форму пошуку
  - добавив форму входу
  - поставив падінги і марджіни в сторінках статтей, блогів, блогу, новин, новини

ver. 0.41
  - добавив слайдер для архівних сторінок

ver. 0.4
  - виправив помилки з пагінацією для архівних сторінок та пошуку
  - добавив стилі для archive-articles.php (all_states.php)
  - добавив стилі для single-blogs.php
  - добавив стилі для single-news.php

ver. 0.35
  - добавив сторінку content-footer.php
  - добавив стилі для archive-blogs.php (all_blogs.php)
  - добавив стилі для archive-news.php (all_news.php)
  - зробив правильне виведення аватарів для блогерів на головні сторінці

ver. 0.34
  - перейменував файл home-content.php на content-home.php
  - добавив файли searchform.php та search.php
  - добавив пагінацію для архівних сторінок та пошуку

ver. 0.33
  - добавив шаблони для виведення всіх новин, статтей, відео та блогів
  - добавив шаблони для виведення повної інформації для новин, статтей, відео та блогів
  - в хедері та в футері видалив меню, яке виводилось з адмінки і повернув стару навігацію

ver. 0.32
  - добавив вивід меню(в хедері і в футері) з адмінки

ver. 0.31
  - зробив підключення стилів та скриптів за допомогою функцій wp_enqueue_style та wp_enqueue_script
  - скачав файли стилів та скриптів, які знаходились на віддалених серверах
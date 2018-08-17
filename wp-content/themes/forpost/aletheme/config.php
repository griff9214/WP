<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Site Footer Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
                        "id" => "ale_sitelogofooter",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Show Site Preloader",
                        "desc" => "Description kakoito.",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Raleway",
                        "id" => "ale_headerfont",
                        "std" => "Raleway",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the body Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 600",
                        "id" => "ale_headerfontex",
                        "std" => "600",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Libre Baskerville",
                        "id" => "ale_mainfont",
                        "std" => "Libre+Baskerville",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400italic",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '22px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '20px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '11px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter profile URL.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinteres profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Flickr",
                        "desc" => "Your flickr profile URL.",
                        "id" => "ale_flickr",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Linkedin",
                        "desc" => "Your linked profile URL.",
                        "id" => "ale_linked",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Email",
                        "desc" => "Your email",
                        "id" => "ale_emailcont",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Telephone",
                        "desc" => "Telephone in mask +78889996655",
                        "id" => "ale_telephone",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle_1",
                        "std" => "",
                        "type" => "images",
                        "options" => array(
                            'image_1' => $imagepath.'/1col.png',
                            'image_2' => $imagepath.'/2cl.png',
                            'image_3' => $imagepath.'/2cr.png', ),
        );
	$options[] = array( "name" => "Footer Opts&Texts",
	                    "type" => "heading");

	$options[] = array( "name" => "Юридический адрес",
	                    "desc" => "Юридический адрес",
	                    "id" => "ale_footer_legal_addr",
	                    "std" => "124527, Москва г. Зеленоград, Солнечная аллея, д.6 тел: 499-720-69-68",
	                    "type" => "text");

	$options[] = array( "name" => "Фактический адрес",
	                    "desc" => "Фактический адрес",
	                    "id" => "ale_footer_fact_addr",
	                    "std" => "124527, Москва г. Зеленоград, Солнечная аллея, д.6 тел: 499-720-69-68",
	                    "type" => "text");

	$options[] = array( "name" => "Реквизиты",
	                    "desc" => "Реквизиты",
	                    "id" => "ale_footer_",
	                    "std" => "ИНН 7735110669/КПП 773501001, Рег. номер МРП 613.977 от 21 марта 2002г.",
	                    "type" => "text");




	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();
    $prefix = "ale_";
    $meta_boxes[] = array(
        'id'         => 'otzivy_page_metabox',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'otzivy', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => 'Автор отзыва',
                'desc' => 'Автор отзыва',
                'id'   => $prefix . 'otziv_author',
                'type' => 'text',
            ),
            array(
                'name' => 'Компания, оставившая отзыв',
                'desc' => 'Компания, оставившая отзыв',
                'id'   => $prefix . 'otziv_company',
                'type' => 'text',
            ),
            array(
                'name' => 'Логотип компании',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'otziv_company_logo',
                'type' => 'file',
            ),
            array(
                'name' => 'Фото отзыва',
                'desc' => 'Скан грамоты или благодарности',
                'id'   => $prefix . 'otziv_photo',
                'type' => 'file',
            ),
        )
    );
	$meta_boxes[] = array(
		'id'         => 'uslugi_page_metabox',
		'title'      => 'Данные для услуги',
		'pages'      => array( 'uslugi' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Specific post templates to display this metabox

		'fields' => array(
			array(
				'name' => 'Заголовок в шапке',
				'desc' => 'Заголовок в шапке',
				'id'   => $prefix . 'header_heading',
				'type' => 'text',
			),
			array(
				'name' => 'Текст в шапке',
				'desc' => 'Текст в шапке',
				'id'   => $prefix . 'header_text',
				'type' => 'textarea',
			),
			array(
				'name' => 'Баннер в шапке',
				'desc' => 'Баннер в шапке',
				'id'   => $prefix . 'header_banner',
				'type' => 'file',
			),
		)
	);
	$meta_boxes[] = array(
		'id'         => 'voprosi_page_metabox',
		'title'      => 'Данные для вопроса',
		'pages'      => array( 'voprosi' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Specific post templates to display this metabox

		'fields' => array(
			array(
				'name' => 'Текст вопроса',
				'desc' => 'Текст вопроса',
				'id'   => $prefix . 'question_text',
				'type' => 'wysiwyg',
			),
            array(
				'name' => 'Текст ответа',
				'desc' => 'Текст вопроса',
				'id'   => $prefix . 'reply_text',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Автор вопроса',
				'desc' => 'Автор вопроса',
				'id'   => $prefix . 'question_author',
				'type' => 'text',
			),
		)
	);
	$meta_boxes[] = array(
		'id'         => 'vacancies_page_metabox',
		'title'      => 'Данные для вакансии',
		'pages'      => array( 'vacancies' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Specific post templates to display this metabox

		'fields' => array(
			array(
				'name' => 'Текст',
				'desc' => 'Условия/Требования/Оплата',
				'id'   => $prefix . 'vacancy_left[]',
				'type' => 'text',
			),
            array(
				'name' => 'Текст вакансии',
				'desc' => 'Раскрытие требований/условий',
				'id'   => $prefix . 'vacancy_right[]',
				'type' => 'wysiwyg',
			),
		)
	);
	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(
        'post' => array(
            array(
		        'name'      => 'news-main-thumb',
		        'width'     => 370,
		        'height'    => 200,
		        'crop'      => true,
	        ),
        ),
        'otzivy' => array(
	        array(
		        'name'      => 'otziv-firm-logo-main',
		        'width'     => 300,
		        'height'    => 128,
		        'crop'      => false,
	        ),
        ),
        'gallery' => array(
	        array(
		        'name'      => 'gramoty-main-slider',
		        'width'     => 240,
		        'height'    => 330,
		        'crop'      => false,
	        ),
        ),
    );
}
/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
        'uslugi' => array(
	        'config' => array(
		        'public' => true,
		        'menu_position' => 20,
		        'menu_icon' => 'dashicons-shield-alt',
		        'hierarchical' => true,
		        'has_archive'   => false,
		        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
		        'show_in_nav_menus'=> true,
		        'labels' => array(
			        'name' => 'Услуги',
			        'singular_name' => 'Услуги',
			        'add_new' => 'Добавить новую',
			        'add_new_item' => 'Добавить услугу',
			        'edit' => 'Редактировать',
			        'edit_item' => 'Редактировать услугу',
			        'new_item' => 'Новая услуга',
			        'view' => 'Просмотреть',
			        'view_item' => 'Просмотреть услугу',
			        'search_items' => 'Поиск по услугам',
			        'not_found' => 'Услуги не найдены',
			        'not_found_in_trash' => 'В корзине нет услуг',
			        'parent' => 'Родительская услуга'
		        ),

	        ),
	        'singular' => 'Услуга',
	        'multiple' => 'Услуги',
	        'columns'    => array(
		        'first_image',
	        ),
        ),
        'prices' => array(
	        'config' => array(
		        'public' => true,
		        'menu_position' => 20,
		        'menu_icon' => 'dashicons-analytics',
		        'hierarchical' => true,
		        'has_archive'   => false,
		        'supports' => array('title', 'editor', 'page-attributes'),
		        'show_in_nav_menus'=> true,
		        'labels' => array(
			        'name' => 'Прайсы',
			        'singular_name' => 'Прайсы',
			        'add_new' => 'Добавить новый прайс',
			        'add_new_item' => 'Добавить прайс',
			        'edit' => 'Редактировать',
			        'edit_item' => 'Редактировать прайс',
			        'new_item' => 'Новый прайс',
			        'view' => 'Просмотреть',
			        'view_item' => 'Просмотреть прайс',
			        'search_items' => 'Поиск по прайсам',
			        'not_found' => 'Прайсы не найдены',
			        'not_found_in_trash' => 'В корзине нет прайсов',
			        'parent' => 'Родительский прайс'
		        ),

	        ),
	        'singular' => 'Прайс',
	        'multiple' => 'Прайсы',
        ),
        'voprosi' => array(
	        'config' => array(
		        'public' => true,
		        'menu_position' => 20,
		        'menu_icon' => 'dashicons-megaphone',
		        'hierarchical' => true,
		        'has_archive'   => false,
                'supports' => array('title', 'custom-fields', 'page-attributes'),
		        'show_in_nav_menus'=> true,
		        'labels' => array(
			        'name' => 'Вопросы',
			        'singular_name' => 'Вопрос',
			        'add_new' => 'Добавить новый',
			        'add_new_item' => 'Добавить вопрос',
			        'edit' => 'Редактировать',
			        'edit_item' => 'Редактировать вопрос',
			        'new_item' => 'Новый вопрос',
			        'view' => 'Просмотреть',
			        'view_item' => 'Просмотреть вопрос',
			        'search_items' => 'Поиск по вопросам',
			        'not_found' => 'Вопросы не найдены',
			        'not_found_in_trash' => 'В корзине нет вопросов',
			        'parent' => 'Родительский вопрос'
		        ),

	        ),
	        'singular' => 'Вопрос',
	        'multiple' => 'Вопросы',
        ),
        'vacancies' => array(
	        'config' => array(
		        'public' => true,
		        'menu_position' => 20,
		        'menu_icon' => 'dashicons-welcome-learn-more',
		        'hierarchical' => true,
		        'has_archive'   => false,
                'supports' => array('title', 'custom-fields', 'page-attributes'),
		        'show_in_nav_menus'=> true,
		        'labels' => array(
			        'name' => 'Вакансии',
			        'singular_name' => 'Вакансия',
			        'add_new' => 'Добавить новую',
			        'add_new_item' => 'Добавить вакансию',
			        'edit' => 'Редактировать',
			        'edit_item' => 'Редактировать вакансию',
			        'new_item' => 'Новая вакансия',
			        'view' => 'Просмотреть',
			        'view_item' => 'Просмотреть вакансию',
			        'search_items' => 'Поиск по вакансиям',
			        'not_found' => 'Вакансии не найдены',
			        'not_found_in_trash' => 'В корзине нет вакансий',
			        'parent' => 'Родительская вакансия'
		        ),

	        ),
	        'singular' => 'Вакансия',
	        'multiple' => 'Вакансии',
        ),
        'otzivy' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-status',
                'has_archive'   => true,
                'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
                'show_in_nav_menus'=> true,
                'labels' => array(
	                'name' => 'Отзывы',
	                'singular_name' => 'Отзыв',
	                'add_new' => 'Добавить новый',
	                'add_new_item' => 'Добавить отзыв',
	                'edit' => 'Редактировать',
	                'edit_item' => 'Редактировать отзыв',
	                'new_item' => 'Новый отзыв',
	                'view' => 'Просмотреть',
	                'view_item' => 'Просмотреть отзыв',
	                'search_items' => 'Поиск по отзывам',
	                'not_found' => 'Отзывы не найдены',
	                'not_found_in_trash' => 'В корзине нет отзывов',
	                'parent' => 'Отзыв-родитель'
                ),
            'singular' => 'Отзыв',
            'multiple' => 'Отзывы',
            'add_new' => 'Добавить отзыв',
            ),
    ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
//        'services-category'    => array(
//            'for'        => array('uslugi'),
//            'config'    => array(
//                'sort'        => true,
//                'args'        => array('orderby' => 'term_order'),
//                'hierarchical' => true,
//            ),
//            'singular'    => 'Категория',
//            'multiple'    => 'Категории',
//        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}
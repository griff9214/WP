<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if (get_stylesheet_directory() == get_template_directory()) {
    define('ALETHEME_PATH', get_template_directory() . '/aletheme');
    define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
} else {
    define('ALETHEME_PATH', get_theme_root() . '/forpost/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/forpost/aletheme');
}

require_once ALETHEME_PATH . '/init.php';
require_once get_template_directory() . '/inc/custom-nav.php';

load_theme_textdomain('aletheme', get_template_directory() . '/lang');
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 *
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/
## Удаляем лишнее с head части сайта
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'register_handler');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Убираем связанные ссылки
//3.0+
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10); // Ссылки на соседние статьи (<link rel='next'... <link rel='prev'...)
remove_action('wp_head', 'wp_shortlink_wp_head', 10); // Короткая ссылка, ссылка без ЧПУ <link rel='shortlink'

//add_filter('template_redirect', function(){   if( is_page() ) remove_action( "wp_head", "rel_canonical" ); }); // удаляем rel_canonical для страниц
add_filter('the_generator', '__return_empty_string'); // Убираем версию WordPress

remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');


//удаление emoji
function disable_wp_emojicons()
{
    // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');

    // filter to remove TinyMCE emojis
    //add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

add_action('init', 'disable_wp_emojicons');

//удаление стандартного jQ
function no_more_jquery()
{
    wp_deregister_script('jquery');
}

add_action('wp_enqueue_scripts', 'no_more_jquery');
//удаление версий из ссылок на скрипты
function wp_version_js_css($src)
{
    if (strpos($src, 'ver=' . get_bloginfo('version')))
        $src = remove_query_arg('ver', $src);
    return $src;
}

add_filter('style_loader_src', 'wp_version_js_css', 9999);
add_filter('script_loader_src', 'wp_version_js_css', 9999);


function the_excerpt_max_charlength($charlength)
{
    $excerpt = get_the_excerpt();
    $charlength++;

    if (mb_strlen($excerpt) > $charlength) {
        $subex = mb_substr($excerpt, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = -(mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            echo mb_substr($subex, 0, $excut);
        } else {
            echo $subex;
        }
        echo '...';
    } else {
        echo $excerpt;
    }
}

//отображаем все достумные размеры миниатюр при загруз/выборе изображений в редакторе
function sgr_display_image_size_names_muploader($sizes)
{

    $new_sizes = array();

    $added_sizes = get_intermediate_image_sizes();

    // $added_sizes is a numeric array, therefore need to convert it
    // to associative array, using value for key and value
    foreach ($added_sizes as $key => $value) {
        $new_sizes[$value] = $value;
    }

    // This preserves the labels in $sizes, and merges the two arrays
    $new_sizes = array_merge($new_sizes, $sizes);

    return $new_sizes;
}

add_filter('image_size_names_choose', 'sgr_display_image_size_names_muploader', 11, 1);

//WYSYWIG понимает стили
//function my_theme_add_editor_styles() {
//	add_editor_style( 'css/styles.css' );
//}
//add_action( 'current_screen', 'my_theme_add_editor_styles' );

//удаление циклических ссылок
function artabr_menu_no_link($no_link)
{
    $url = addcslashes(get_permalink(), '/.');
    $regex = "/<a(.*?) href=\"$url\"(.*?)<\/a>/im";
    //$in_link = '!<li(.*?)class="(.*?)current-menu-item(.*?)"><a(.*?)>(.*?)</a>!si';
    $out_link = '<span$1 $2</span>';
    return preg_replace($regex, $out_link, $no_link);
}
//удаление циклических ссылок

//Я.Метрика в шапке
add_filter('wp_nav_menu', 'artabr_menu_no_link');

//add_action("wp_head", "wp_head_metrika_code");
//function wp_head_metrika_code() {
//    echo '<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47595844 = new Ya.Metrika({ id:47595844, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ut:"noindex" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47595844?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->';
//}
//Я.Метрика в шапке
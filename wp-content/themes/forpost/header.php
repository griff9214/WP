<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forpost
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47595844 = new Ya.Metrika({ id:47595844, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ut:"noindex" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47595844?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<div class="page">
    <header class="header">
        <div class="header__greenMask"></div>
        <div class="wrapper">
            <div class="header__contacts header-contacts">
                <a href="tel:<?php echo ale_get_option('telephone'); ?>"
                   class="header-contacts__url header-contacts__url_phone"><?php echo preg_replace("/^(\+7|^8{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/i", "\\2-\\3-\\4-\\5", ale_get_option('telephone')); ?></a>
                <a href="mailto:<?php echo ale_get_option('emailcont'); ?>"
                   class="header-contacts__url header-contacts__url_mail"><?php echo ale_get_option('emailcont'); ?></a>

                <div class="headerContactsSocial">
                    <?php if (ale_get_option('yt')) { ?><a href="#" class="headerContactsSocial__yt"></a><?php } ?>
                    <?php if (ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb'); ?>"
                                                           class="headerContactsSocial__fb"></a><?php } ?>
                    <?php if (ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta'); ?>"
                                                              class="headerContactsSocial__im"></a><?php } ?>
                </div>
            </div>
            <a href="<? echo get_site_url(); ?>" class="header__logo"><img src="<? echo get_template_directory_uri()."/images/logo.png" ?>" alt="ЧОП Форпост Север. Охрана в Москве"></a>

            <?
            //id страниц, на которых показываем краткое меню без вложенностей
            $short_menu_posts = [6, 538, 609];
            if (is_front_page()){
                header_nav_menu(10);
            }
            elseif ($post->post_type == 'voprosi' || in_array($post->ID,$short_menu_posts)) {
                header_nav_menu(9); //Меню без вложенностей
            } else {
                header_nav_menu(3); //Полное верхнее меню
            }; ?>
            <a href="#menu" class="hamburger hamburger--emphatic">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </a>
        </div>
    </header>
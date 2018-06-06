<? get_header(); ?>
<?php
wp_enqueue_script('ymaps', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU');
wp_enqueue_script('newscript', get_template_directory_uri().'/map.js');
?>
    <style>
        #map {
            width: 100%;
            height: 350px;
        }
    </style>
<div id="map">
</div>
<div class="page-content">
    <div class="wrapper">
        <div class="row">
            <main class="main_inside">
                <article>
                    <?php
                    the_content( sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'forpost' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );
                    ?>
                </article>

            </main>
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

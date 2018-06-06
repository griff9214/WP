<?php
/**
 * Created by PhpStorm.
 * User: Вера
 * Date: 31.10.2017
 * Time: 17:01
 */?>
<section class="ourThanks ourThanks--pos">
    <div class="wrapper">
        <div class="row">
            <h2 class="section-header section-header_have-bord section-header_have-logo section-header_text-centered section-header--pos">
                наши благодарности</h2>
            <div class="ourThanks__slider">
				<?php $args = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'order'				=> 'ASC',
					'orderby'			=> 'menu_order ID',
					//'meta_key'		=> '_ale_hide_from_gallery',
					//'meta_value'		=> 0,
					'post_parent' => 166
				);
				$attachments = get_posts( $args );
				if ( $attachments ) {
					foreach ( $attachments as $attachment ) {?>
                        <div class="ourThanks__slide">
                            <img class="ourThanks__thanksgiven" src="<?php echo wp_get_attachment_image_url( $attachment->ID, 'gramoty-main-slider' ); ?>" data-full="<?php echo wp_get_attachment_image_url( $attachment->ID, 'large' ); ?>" alt="<? echo get_post_meta($attachment->ID, '_wp_attachment_image_alt', true); ?>">
                        </div>
					<?php }
				} ?>
            </div>
        </div>
    </div>
</section>



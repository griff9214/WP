<?php
/**
 * Created by PhpStorm.
 * User: Вера
 * Date: 31.10.2017
 * Time: 20:44
 */?>
<section class="ourReviews ourReviews--pos">
	<div class="wrapper">
		<div class="row">
			<h2 class="section-header section-header_have-bord section-header_have-logo section-header_text-centered section-header--pos">
				наши отзывы</h2>
			<div class="ourReviews__slider">
				<?php
				$args = array(
					'numberposts' => 5,
					'post_type'   => 'otzivy',
				);
				$news = get_posts($args);
				foreach ($news as $post){
					setup_postdata( $post );
					?>
					<div class="review ourReviews__review">
						<div class="review__caption">

							<div class="review__firm"><?php echo ale_get_meta('otziv_company'); ?></div>
							<div class="review__text"><? the_content(); ?></div>
							<img src="<?php echo ale_get_meta('otziv_company_logo'); ?>" alt="" class="review__firmLogo">
						</div>
						<div class="review__author"><?php echo ale_get_meta('otziv_author'); ?></div>
					</div>
					<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section>


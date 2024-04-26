<div class="<?php luminai_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container luminai-search__k__fx1L_l5Ny--container luminai-local-600-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner luminai-search__k__fx1L_l5Ny--inner luminai-local-600-inner d-flex h-flex-basis h-px-lg-1 v-inner-lg-1 h-px-md-1 v-inner-md-1 h-px-1 v-inner-1">
		<div class="position-relative wp-block-kubio-query-loop-item__align luminai-search__k__fx1L_l5Ny--align luminai-local-600-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-search__k__-atpqjA3vZ-container luminai-local-601-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
				<div class="position-relative wp-block-kubio-row__inner luminai-search__k__-atpqjA3vZ-inner luminai-local-601-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__VOu2JhVJhj-container luminai-local-602-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner luminai-search__k__VOu2JhVJhj-inner luminai-local-602-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
							<div class="position-relative wp-block-kubio-column__align luminai-search__k__VOu2JhVJhj-align luminai-local-602-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
								<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container luminai-search__k__6duco09NdG-container luminai-local-603-container h-aspect-ratio--4-3 <?php luminai_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
									<?php if(has_post_thumbnail()): ?>
									<img class='position-relative wp-block-kubio-post-featured-image__image luminai-search__k__6duco09NdG-image luminai-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
									<?php endif; ?>
									<div class="position-relative wp-block-kubio-post-featured-image__inner luminai-search__k__6duco09NdG-inner luminai-local-603-inner">
										<div class="position-relative wp-block-kubio-post-featured-image__align luminai-search__k__6duco09NdG-align luminai-local-603-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__83e9FktNp--container luminai-local-604-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner luminai-search__k__83e9FktNp--inner luminai-local-604-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
							<div class="position-relative wp-block-kubio-column__align luminai-search__k__83e9FktNp--align luminai-local-604-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
								<a class="position-relative wp-block-kubio-post-title__link luminai-search__k__yndIzn0LAb-link luminai-local-605-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
									<h5 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container luminai-search__k__yndIzn0LAb-container luminai-local-605-container" data-kubio="kubio/post-title">
										<?php the_title(); ?>
									</h5>
								</a>
								<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text luminai-search__k__fVTtKcA3Zp-text luminai-local-606-text" data-kubio="kubio/post-excerpt">
									<?php luminai_post_excerpt(array (
  'max_length' => 16,
)); ?>
								</p>
								<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer luminai-search__k__Xy3_sNqX1-metaDataContainer luminai-local-607-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
									<span class="metadata-item">
										<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
											<?php echo esc_html(get_the_date('F j, Y')); ?>
										</a>
										<span class="metadata-suffix">
											<?php esc_html_e(',', 'luminai'); ?>
										</span>
									</span>
									<span class="metadata-item">
										<a href="">
											<?php echo esc_html(get_the_time()); ?>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

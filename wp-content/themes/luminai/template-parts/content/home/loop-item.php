<div class="<?php luminai_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container luminai-home__k__fx1L_l5Ny--container luminai-local-273-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner luminai-home__k__fx1L_l5Ny--inner luminai-local-273-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align luminai-home__k__fx1L_l5Ny--align luminai-local-273-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-home__k__R09rqmqBvs-container luminai-local-274-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
				<div class="position-relative wp-block-kubio-row__inner luminai-home__k__R09rqmqBvs-inner luminai-local-274-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__VV8lxxkbru-container luminai-local-275-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner luminai-home__k__VV8lxxkbru-inner luminai-local-275-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
							<div class="position-relative wp-block-kubio-column__align luminai-home__k__VV8lxxkbru-align luminai-local-275-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
								<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container luminai-home__k__6duco09NdG-container luminai-local-276-container h-aspect-ratio--4-3 <?php luminai_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
									<?php if(has_post_thumbnail()): ?>
									<img class='position-relative wp-block-kubio-post-featured-image__image luminai-home__k__6duco09NdG-image luminai-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
									<?php endif; ?>
									<div class="position-relative wp-block-kubio-post-featured-image__inner luminai-home__k__6duco09NdG-inner luminai-local-276-inner">
										<div class="position-relative wp-block-kubio-post-featured-image__align luminai-home__k__6duco09NdG-align luminai-local-276-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__y2AvKHSUSW-container luminai-local-277-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner luminai-home__k__y2AvKHSUSW-inner luminai-local-277-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
							<div class="position-relative wp-block-kubio-column__align luminai-home__k__y2AvKHSUSW-align luminai-local-277-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
								<a class="position-relative wp-block-kubio-post-title__link luminai-home__k__yndIzn0LAb-link luminai-local-278-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
									<h5 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container luminai-home__k__yndIzn0LAb-container luminai-local-278-container" data-kubio="kubio/post-title">
										<?php the_title(); ?>
									</h5>
								</a>
								<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text luminai-home__k__fVTtKcA3Zp-text luminai-local-279-text" data-kubio="kubio/post-excerpt">
									<?php luminai_post_excerpt(array (
  'max_length' => 16,
)); ?>
								</p>
								<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer luminai-home__k__vW_FiC7VX-metaDataContainer luminai-local-280-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
									<span class="metadata-item">
										<span class="metadata-prefix">
											<?php esc_html_e('Date:', 'luminai'); ?>
										</span>
										<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
											<?php echo esc_html(get_the_date('j M')); ?>
										</a>
									</span>
									<span class="metadata-separator">
										-
									</span>
									<span class="metadata-item">
										<span class="metadata-prefix">
											<?php esc_html_e('Time:', 'luminai'); ?>
										</span>
										<a href="">
											<?php echo esc_html(get_the_time()); ?>
										</a>
									</span>
									<span class="metadata-separator">
										-
									</span>
									<span class="metadata-item">
										<span class="metadata-prefix">
											<?php esc_html_e('Author:', 'luminai'); ?>
										</span>
										<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
											<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
										</a>
									</span>
								</div>
								<div class="position-relative wp-block-kubio-read-more-button__spacing luminai-home__k__5npyJrxknh-spacing luminai-local-281-spacing">
									<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer luminai-home__k__5npyJrxknh-outer luminai-local-281-outer kubio-button-container" data-kubio="kubio/read-more-button">
										<a class="position-relative wp-block-kubio-read-more-button__link luminai-home__k__5npyJrxknh-link luminai-local-281-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
											<span class="position-relative wp-block-kubio-read-more-button__text luminai-home__k__5npyJrxknh-text luminai-local-281-text kubio-inherit-typography">
												<?php esc_html_e('Read more', 'luminai'); ?>
											</span>
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

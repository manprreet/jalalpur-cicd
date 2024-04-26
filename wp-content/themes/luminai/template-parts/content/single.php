<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer luminai-single__k__single-lAFSH8Xo9x-outer luminai-local-723-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner luminai-single__k__single-lAFSH8Xo9x-inner luminai-local-723-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-single__k__single-baLWB4dRKjp-container luminai-local-724-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner luminai-single__k__single-baLWB4dRKjp-inner luminai-local-724-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-kxeqsSpdy-n-container luminai-local-725-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-kxeqsSpdy-n-inner luminai-local-725-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-kxeqsSpdy-n-align luminai-local-725-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container luminai-single__k__single-rlYTEhTMib-container luminai-local-726-container h-aspect-ratio--4-3 <?php luminai_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image luminai-single__k__single-rlYTEhTMib-image luminai-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner luminai-single__k__single-rlYTEhTMib-inner luminai-local-726-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align luminai-single__k__single-rlYTEhTMib-align luminai-local-726-align h-y-container align-self-lg-end align-self-md-end align-self-end"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer luminai-single__k__single-Xy3_sNqX1-metaDataContainer luminai-local-727-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
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
							<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container luminai-single__k__single--DAcGXV_T-container luminai-local-728-container kubio-post-categories-container" data-kubio="kubio/post-categories">
								<div class="position-relative wp-block-kubio-post-categories__placeholder luminai-single__k__single--DAcGXV_T-placeholder luminai-local-728-placeholder kubio-post-categories-placeholder"></div>
								<div class="position-relative wp-block-kubio-post-categories__tags luminai-single__k__single--DAcGXV_T-tags luminai-local-728-tags">
									<?php luminai_categories_list(__('No category', 'luminai')); ?>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer luminai-single__k__aCvDQQ1PSq-outer luminai-local-729-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container luminai-single__k__aCvDQQ1PSq-width-container luminai-local-729-width-container">
									<div class="position-relative wp-block-kubio-divider__line luminai-single__k__aCvDQQ1PSq-line luminai-local-729-line"></div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-single__k__single-SbdKxHs2YI-container luminai-local-730-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner luminai-single__k__single-SbdKxHs2YI-inner luminai-local-730-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-3VGwAjm9cX-container luminai-local-731-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-3VGwAjm9cX-inner luminai-local-731-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-3VGwAjm9cX-align luminai-local-731-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer luminai-single__k__aCvDQQ1PSq-outer luminai-local-732-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container luminai-single__k__aCvDQQ1PSq-width-container luminai-local-732-width-container">
									<div class="position-relative wp-block-kubio-divider__line luminai-single__k__aCvDQQ1PSq-line luminai-local-732-line"></div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-single__k__single-1uGRU27HVz-container luminai-local-733-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner luminai-single__k__single-1uGRU27HVz-inner luminai-local-733-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-K4Akm2YNqS-container luminai-local-734-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-K4Akm2YNqS-inner luminai-local-734-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-1 h-px-md-0 v-inner-md-1 h-px-0 v-inner-1">
											<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-K4Akm2YNqS-align luminai-local-734-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text luminai-single__k__single-1pwRcGAnh-text luminai-local-735-text" data-kubio="kubio/text">
													<?php esc_html_e('Tags:', 'luminai'); ?>
												</p>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-LfW21x_joR-container luminai-local-736-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-LfW21x_joR-inner luminai-local-736-inner d-flex h-flex-basis h-px-lg-1 v-inner-lg-1 h-px-md-1 v-inner-md-1 h-px-1 v-inner-1">
											<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-LfW21x_joR-align luminai-local-736-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
												<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container luminai-single__k__single-tlSt_AyBi-container luminai-local-737-container kubio-post-tags-container" data-kubio="kubio/post-tags">
													<div class="position-relative wp-block-kubio-post-tags__placeholder luminai-single__k__single-tlSt_AyBi-placeholder luminai-local-737-placeholder kubio-post-tags-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-tags__tags luminai-single__k__single-tlSt_AyBi-tags luminai-local-737-tags">
														<?php luminai_tags_list(__('No tags', 'luminai')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer luminai-single__k__aCvDQQ1PSq-outer luminai-local-738-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container luminai-single__k__aCvDQQ1PSq-width-container luminai-local-738-width-container">
									<div class="position-relative wp-block-kubio-divider__line luminai-single__k__aCvDQQ1PSq-line luminai-local-738-line"></div>
								</div>
							</div>
							<?php if(luminai_has_pagination()): ?>
							<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container luminai-single__k__single-nqLiVZCaYo-container luminai-local-739-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
								<div class="position-relative wp-block-kubio-query-pagination__inner luminai-single__k__single-nqLiVZCaYo-inner luminai-local-739-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-3ndM77FkZV-container luminai-local-740-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-3ndM77FkZV-inner luminai-local-740-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-3ndM77FkZV-align luminai-local-740-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<?php if(luminai_has_pagination_button(true)): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-single__k__single-ELgmeRXRD--spacing luminai-local-741-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-single__k__single-ELgmeRXRD--outer luminai-local-741-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-single__k__single-ELgmeRXRD--link luminai-local-741-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(true); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-single__k__single-ELgmeRXRD--text luminai-local-741-text kubio-inherit-typography">
																<?php esc_html_e('Previous', 'luminai'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-single__k__single-mMPMCQqWfs-container luminai-local-742-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner luminai-single__k__single-mMPMCQqWfs-inner luminai-local-742-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align luminai-single__k__single-mMPMCQqWfs-align luminai-local-742-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<?php if(luminai_has_pagination_button()): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-single__k__single-ACSe8L2gsX-spacing luminai-local-743-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-single__k__single-ACSe8L2gsX-outer luminai-local-743-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-single__k__single-ACSe8L2gsX-link luminai-local-743-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-single__k__single-ACSe8L2gsX-text luminai-local-743-text kubio-inherit-typography">
																<?php esc_html_e('Next', 'luminai'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer luminai-single__k__single-s5UQRGEAN-commentsContainer luminai-local-744-commentsContainer" data-kubio="kubio/post-comments">
								<?php luminai_post_comments(array (
  'none' => __('No responses yet', 'luminai'),
  'one' => __('One response', 'luminai'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'luminai'),
  'disabled' => __('Comments are closed', 'luminai'),
  'avatar_size' => __('32', 'luminai'),
)); ?>
							</div>
							<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container luminai-single__k__single-oXoikmHxB-container luminai-local-745-container" data-kubio="kubio/post-comments-form">
								<?php comment_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

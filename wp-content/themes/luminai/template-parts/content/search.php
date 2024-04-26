<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer luminai-search__k__1MCYzfcZN-outer luminai-local-595-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner luminai-search__k__1MCYzfcZN-inner luminai-local-595-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-search__k__baLWB4dRKjp-container luminai-local-596-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner luminai-search__k__baLWB4dRKjp-inner luminai-local-596-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__kxeqsSpdy-n-container luminai-local-597-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner luminai-search__k__kxeqsSpdy-n-inner luminai-local-597-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align luminai-search__k__kxeqsSpdy-n-align luminai-local-597-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container luminai-search__k__CtKC_EuIZL-container luminai-local-598-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container luminai-search__k__vrf0UGkWrN-container luminai-local-599-container gutters-row-lg-1 gutters-row-v-lg-1 gutters-row-md-1 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner luminai-search__k__vrf0UGkWrN-inner luminai-local-599-inner h-row">
										<?php luminai_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(luminai_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container luminai-search__k__vD7AVCTELY-container luminai-local-608-container gutters-row-lg-3 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner luminai-search__k__vD7AVCTELY-inner luminai-local-608-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__tBYU0uM8Xx-container luminai-local-609-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-search__k__tBYU0uM8Xx-inner luminai-local-609-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-search__k__tBYU0uM8Xx-align luminai-local-609-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(luminai_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-search__k__ELgmeRXRD--spacing luminai-local-610-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-search__k__ELgmeRXRD--outer luminai-local-610-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-search__k__ELgmeRXRD--link luminai-local-610-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-search__k__ELgmeRXRD--text luminai-local-610-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'luminai'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__P2OarhUKUK-container luminai-local-611-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-search__k__P2OarhUKUK-inner luminai-local-611-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-search__k__P2OarhUKUK-align luminai-local-611-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer luminai-search__k__tRiQFlrj8q-outer luminai-local-612-outer" data-kubio="kubio/pagination-numbers">
														<?php luminai_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-search__k__2nd5yuWmz9-container luminai-local-613-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-search__k__2nd5yuWmz9-inner luminai-local-613-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-search__k__2nd5yuWmz9-align luminai-local-613-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(luminai_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-search__k__ACSe8L2gsX-spacing luminai-local-614-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-search__k__ACSe8L2gsX-outer luminai-local-614-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-search__k__ACSe8L2gsX-link luminai-local-614-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-search__k__ACSe8L2gsX-text luminai-local-614-text kubio-inherit-typography">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

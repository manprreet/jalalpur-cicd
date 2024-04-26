<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer luminai-home__k__1MCYzfcZN-outer luminai-local-268-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner luminai-home__k__1MCYzfcZN-inner luminai-local-268-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container luminai-home__k__baLWB4dRKjp-container luminai-local-269-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner luminai-home__k__baLWB4dRKjp-inner luminai-local-269-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__kxeqsSpdy-n-container luminai-local-270-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner luminai-home__k__kxeqsSpdy-n-inner luminai-local-270-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align luminai-home__k__kxeqsSpdy-n-align luminai-local-270-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container luminai-home__k__CtKC_EuIZL-container luminai-local-271-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container luminai-home__k__vrf0UGkWrN-container luminai-local-272-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-0" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner luminai-home__k__vrf0UGkWrN-inner luminai-local-272-inner h-row">
										<?php luminai_theme()->get('archive-loop')->render(array (
  'view' => 'content/home/loop-item',
)); ?>
									</div>
								</div>
								<?php if(luminai_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container luminai-home__k__vD7AVCTELY-container luminai-local-282-container gutters-row-lg-3 gutters-row-v-lg-3 gutters-row-md-2 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner luminai-home__k__vD7AVCTELY-inner luminai-local-282-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-3 gutters-col-md-2 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__tBYU0uM8Xx-container luminai-local-283-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-home__k__tBYU0uM8Xx-inner luminai-local-283-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-home__k__tBYU0uM8Xx-align luminai-local-283-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(luminai_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-home__k__ELgmeRXRD--spacing luminai-local-284-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-home__k__ELgmeRXRD--outer luminai-local-284-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-home__k__ELgmeRXRD--link luminai-local-284-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-home__k__ELgmeRXRD--text luminai-local-284-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'luminai'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__P2OarhUKUK-container luminai-local-285-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-home__k__P2OarhUKUK-inner luminai-local-285-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-home__k__P2OarhUKUK-align luminai-local-285-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer luminai-home__k__tRiQFlrj8q-outer luminai-local-286-outer" data-kubio="kubio/pagination-numbers">
														<?php luminai_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container luminai-home__k__2nd5yuWmz9-container luminai-local-287-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner luminai-home__k__2nd5yuWmz9-inner luminai-local-287-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align luminai-home__k__2nd5yuWmz9-align luminai-local-287-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(luminai_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing luminai-home__k__ACSe8L2gsX-spacing luminai-local-288-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer luminai-home__k__ACSe8L2gsX-outer luminai-local-288-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link luminai-home__k__ACSe8L2gsX-link luminai-local-288-link h-w-100 h-global-transition" href="<?php luminai_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text luminai-home__k__ACSe8L2gsX-text luminai-local-288-text kubio-inherit-typography">
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

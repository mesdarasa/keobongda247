<?php

// Theme settings options
global $banca_opt;
/**
 * Back to Top Button icon options
 */

$is_top_header_page = function_exists('get_field') ? get_field('is_top_header') : 'default';

if ( $is_top_header_page != 'default' ) {
    $is_top_header = ($is_top_header_page == 'show') ? 1 : 0;
} else {
    $is_top_header = !empty( $banca_opt['is_top_header'] ) ? $banca_opt['is_top_header'] : '';
}

if ( $is_top_header == '1' ) { ?>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="header-info-left">
						<div class="timestamp">
							<i class="icon_clock_alt"></i>
							<?php echo esc_html($banca_opt['top_header_schedule']) ?>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="header-info-right">
						<ul>
                            <li>
                                <i class="icon_phone"></i>
                                <a href="tel:<?php echo esc_attr($banca_opt['top_header_contact_no']) ?>">
	                                <?php echo esc_html($banca_opt['top_header_contact_no']) ?>
                                </a>
                            </li>
                            <li>
                                <i class="icon_mail_alt"></i>
                                <a href="mailto:<?php echo sanitize_email($banca_opt['top_header_email']) ?>">
		                            <?php echo esc_html($banca_opt['top_header_email']) ?>
                                </a>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}

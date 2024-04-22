<?php
// Theme settings options
$opt = get_option('banca_opt' );
$preloader_quotes = !empty($opt['preloader_quotes']) ? $opt['preloader_quotes'] : '';

?>
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="round_spinner">
            <div class="spinner"></div>
            <div class="text">
                <?php echo !empty( $opt['preloader_logo']['id'] && $opt['pre_loader_type'] == 'logo' ) ? wp_get_attachment_image($opt['preloader_logo']['id'], 'full') : '' ?>
                <?php if ( !empty($opt['logo_title']) && $opt['pre_loader_type'] == 'text' ) : ?>
                    <h4><?php echo wp_kses_post($opt['logo_title']) ?></h4>
                <?php endif; ?>
            </div>
        </div>
        <?php if ( !empty($opt['preloader_title']) ) : ?>
            <h2 class="head"> <?php echo wp_kses_post($opt['preloader_title']) ?> </h2>
        <?php endif; ?>
        <?php if ( is_array($preloader_quotes) ) : ?>
            <p>
                <?php echo esc_html($preloader_quotes[rand(0, count($preloader_quotes) - 1)]); ?>
            </p>
        <?php endif; ?>
    </div>
</div>
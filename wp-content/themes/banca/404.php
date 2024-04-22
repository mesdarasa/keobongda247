<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();
global $banca_opt;
$banca_opt = get_option('banca_opt' );
$title  =!empty($banca_opt['error_heading']) ?  $banca_opt['error_heading'] : esc_html__( 'Error. We can’t find the page you’re looking for.', 'banca' );
$subtitle = !empty($banca_opt['error_subtitle']) ? $banca_opt['error_subtitle'] : esc_html__("We can't seem to find the page you're looking for", "banca");
$btn_title  =!empty($banca_opt['error_home_btn_label']) ?  $banca_opt['error_home_btn_label'] : esc_html__( 'Go Back to home Page', 'banca' );
$bg_shape = !empty( $banca_opt['error_bg_shape_image']['url']) ? $banca_opt['error_bg_shape_image']['url'] : BANCA_DIR_IMG.'/404/404_bg.png';
?>

    <section class="error_area bg_color pb-50 overflow-hidden">
        <div class="error_dot one"></div>
        <div class="error_dot two"></div>
        <div class="error_dot three"></div>
        <div class="error_dot four"></div>
        <div class="container">
            <div class="error_content_two text-center">
                <div class="error_img">
                    <img class="position-absolute error_shap" src="<?php echo esc_url($bg_shape) ?>" alt="<?php esc_attr_e('404 page background shape.', 'banca'); ?>">
                    <div class="one wow clipInDown" data-wow-delay="1s">
                        <img class="img_one" src="<?php echo BANCA_DIR_IMG ?>/404/404_two.png" alt="<?php esc_attr_e('4 illustration', 'banca'); ?>">
                    </div>
                    <div class="two wow clipInDown" data-wow-delay="1.5s">
                        <img class="img_two" src="<?php echo BANCA_DIR_IMG ?>/404/404_three.png" alt="<?php esc_attr_e('0 illustration', 'banca'); ?>">
                    </div>
                    <div class="three wow clipInDown" data-wow-delay="1.8s">
                        <img class="img_three" src="<?php echo BANCA_DIR_IMG ?>/404/404_one.png" alt="<?php esc_attr_e('4 illustration', 'banca'); ?>">
                    </div>
                </div>
                <h2 class="wow fadeIn"><?php echo esc_html($title) ?></h2>
                <p><?php echo banca_kses_post($subtitle) ?></p>
                <form action="<?php echo esc_url(home_url('/')) ?>" class="error_search">
                    <input type="text" class="form-control" name="s" placeholder="<?php esc_attr_e('Search', 'banca' ) ?>">
                </form>
                <a href="<?php echo esc_url(home_url('/')) ?>" class="action_btn theme-btn">
                    <i class="arrow_left"></i>
                    <?php echo esc_html($btn_title) ?>
                </a>
            </div>
        </div>
    </section>
    <?php
get_footer();
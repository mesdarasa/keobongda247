<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banca
 */

/**
 * Theme Options
 */
global $banca_opt;
$is_back_to_top_btn_switcher = banca_opt('is_back_to_top_btn_switcher');
$copyright_text = banca_opt('copyright_txt', esc_html__('© 2023 All Rights Reserved by spider-themes', 'banca'));

$footer_style = '';
$select_custom_footer_opt = banca_opt('footer_style');
$select_custom_footer_page = function_exists('get_field') ? get_field('select_custom_footer') : '';

if ($select_custom_footer_page) {
    $footer_style = new WP_Query(array(
        'post_type' => 'footer',
        'posts_per_page' => -1,
        'p' => $select_custom_footer_page,
    ));
} elseif ($select_custom_footer_opt) {
    $footer_style = new WP_Query(array(
        'post_type' => 'footer',
        'posts_per_page' => -1,
        'p' => $select_custom_footer_opt,
    ));
}

if (is_404()) {
    echo '';
} else {
    if ($footer_style != '') {
        if ($footer_style->have_posts()) {
            while ($footer_style->have_posts()) : $footer_style->the_post();
                the_content();
            endwhile;
            wp_reset_postdata();
        }
    } else {
        ?>
        <footer class="footer">
            <div class="copyright pt-25 pb-25">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-center">
                            <div class="copyright-text">
                                <?php echo banca_kses_post(wpautop($copyright_text)) ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <?php
    }

}

// Back to top button
if ($is_back_to_top_btn_switcher == '1') { ?>
    <a id="back-to-top" title="Back to Top"></a>
    <?php
}
?>
</div> <!--Body Wrapper-->
<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package banca
 */

get_header();
banca_get_banner();
banca_get_shop_banner();

$opt = get_option('banca_opt');
$wrap_class = 'page_wrapper';

if ( class_exists('WooCommerce') ) {
    if ( is_cart() ) {
        $wrap_class = 'shopping_cart_area bg_color';
    }
    elseif ( is_checkout() ) {
        $wrap_class = 'checkout_area bg_color';
    }
    else {
        $wrap_class = 'page_wrapper';
    }
    if ( function_exists('is_wishlist') ) {
        if ( is_wishlist() ) {
            $wrap_class = 'shopping_cart_area bg_color';
        }
    }
} else {
    $wrap_class = 'page_wrapper';
}


while ( have_posts() ) : the_post();
    ?>
    <div class="sec_pad <?php echo esc_attr($wrap_class) ?>">
        <div class="container">
            <div class="<?php echo esc_attr( comments_open() ? 'page_content' : 'content_none' ) ?>">
                <?php
                the_content();
                wp_link_pages(array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'banca' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'banca' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ));
                ?>
            </div>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
    <?php
endwhile; // End of the loop.

get_footer();

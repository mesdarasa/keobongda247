<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package banca
 */

get_header();
banca_get_banner();
global $banca_opt;
$blog_column = is_active_sidebar( 'sidebar_widgets' ) ? '8' : '12';
$thumb_size = is_active_sidebar( 'sidebar_widgets' ) ? 'banca_690x418' : 'full';

if ( isset($_GET['elementor_library']) ) {
    while (have_posts()) : the_post();
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'banca') . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'banca') . ' </span>%',
            'separator' => '<span class="screen-reader-text">, </span>',
        ));
    endwhile;
} else {
    ?>
    <section class="pt-120 pb-120 blog_details_area">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-<?php echo esc_attr($blog_column) ?>">
                    <?php
                    if ( class_exists('ReduxFrameworkPlugin') ) {
                        ?>
                        <div class="post_social_icon">
                            <span><?php esc_html_e( 'Share Now', 'banca' ); ?></span>
                            <ul class="list-unstyled ">
                                <?php Banca_Helper()->social_share(); ?>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="blog_details">
                        <div class="post-details-widget position-relative blog_single_item">
                            <?php
                            the_post_thumbnail($thumb_size, array( 'class' => 'post-img' ));
                            while ( have_posts() ) : the_post();
                                $user_desc = get_the_author_meta( 'description' );
                                the_content();
                                wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'banca' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'banca' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                ));
                            endwhile;

                            if ( has_tag() ) { ?>
                                <div class="tag-widget mt-35">
                                    <h6><?php esc_html_e( 'Tags :', 'banca' ); ?></h6>
                                    <?php the_tags('', '', ''); ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <?php
                    if ( !empty($user_desc) ) {
                        ?>
                        <div class="author-media-widget mb-50">
                            <div class="author-img">
                                <?php echo get_avatar( get_the_author_meta( 'user_email' ), 50, '', 'Author', array( 'class' => 'rounded-circle' ) ); ?>
                            </div>
                            <div class="author-info">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                                    <h6><?php echo get_the_author_meta('display_name') ?></h6>
                                </a>
                                <?php echo wp_kses_post(wpautop($user_desc)) ?>
                            </div>
                        </div>
                        <?php
                    }

                    // Related posts
                    if ( is_singular('post') ) {
                        get_template_part( 'template-parts/single-post/related-posts' );
                    }

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                </div>

                <?php get_sidebar()  ?>

            </div>
        </div>
    </section>
    <?php
}

get_footer();
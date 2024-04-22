<?php
/***
 * Default Blog Banner
 */
global $banca_opt;
$popular_cats= isset( $banca_opt['blog_title_bar_cats'] ) ? $banca_opt['blog_title_bar_cats'] : '';
wp_enqueue_script('parallax');
wp_enqueue_script('parallax-scroll');
?>

<section class="breadcrumb-area blog_banner_animation" id="banner_animation2">
    <div class="breadcrumb-widget breadcrumb-widget-2  pt-200 pb-145">
        <div class="shapes">
            <div class="one-shape shape-1" data-parallax='{"x": 100, "y": 0, "rotateZ":0}'>
                <img src="<?php echo BANCA_DIR_IMG . '/blog/Polygon-1.png' ?>" alt="<?php esc_attr_e( 'shape', 'banca' ); ?>">
            </div>
            <div class="one-shape shape-2" data-parallax='{"x": 200, "y": 50, "rotateZ":0}'>
                <img src="<?php echo BANCA_DIR_IMG . '/blog/Polygon-2.png' ?>" alt="<?php esc_attr_e( 'shape', 'banca' ); ?>">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="breadcrumb-content">
                        <h1><?php Banca_Helper()->banner_title() ?></h1>
                        <div class="search-box mt-20">
                            <form action="<?php echo esc_url(home_url('/')) ?>" role="<?php esc_attr_e( 'search', 'banca' ) ?>" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php esc_attr_e( 'Search for Topics.... ', 'banca' ); ?>">
                                    <button class="search-btn input-group-append"><i class="icon_search "></i></button>
                                </div>
                            </form>
                        </div>
                        <?php

                        if ( $popular_cats ) {
                            ?>
                            <div class="popular-tags d-flex flex-wrap justify-content-center align-items-center mt-20">
                                <span><?php esc_html_e('Popular Tags:', 'banca'); ?></span>
                                <?php
                                foreach ( $popular_cats as $popular_cat ) {
                                    if ( $popular_cat['title'] ) {
                                        ?>
                                        <a href="<?php echo esc_url( $popular_cat['url']) ?>">
                                            <?php echo esc_html( $popular_cat['title']) ?>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

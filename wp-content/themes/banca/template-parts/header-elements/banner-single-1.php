<?php
/**
 * Default Style
 *
 * Banner Single Blog Post
 */

global $banca_opt;
$post_author_id = get_post_field('post_author', get_the_ID());

wp_enqueue_script('parallax');
wp_enqueue_script('parallax-scroll');
?>

<section class="breadcrumb-area blog_single_banner" id="banner_animation2">
    <div class="breadcrumb-widget breadcrumb-widget-2 pt-180 pb-120">
        <div class="shapes">
            <?php
            if (!empty($banca_opt['blog_single_shape2']['url'])) { ?>
                <div class="one-shape shape-3" data-parallax='{"x": -100, "y": 0, "rotateZ":0}'>
                    <img src="<?php echo esc_url($banca_opt['blog_single_shape1']['url']) ?>"
                         alt="<?php esc_attr_e('shape1', 'banca') ?>">
                </div>
                <?php
            }
            if (!empty($banca_opt['blog_single_shape2']['url'])) { ?>
                <div class="one-shape shape-4" data-parallax='{"x": -200, "y": 0, "rotateZ":0}'>
                    <img src="<?php echo esc_url($banca_opt['blog_single_shape2']['url']) ?>"
                         alt="<?php esc_attr_e('shape2', 'banca') ?>">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="breadcrumb-content">
                        <h1><?php the_title() ?></h1>
                        <div class="post-info mt-3">
                            <div class="autor mr-20">
                                <i class="far fa-user"></i>
                                <span><?php echo get_the_author_meta('display_name', $post_author_id) ?></span>
                            </div>
                            <div class="date">
                                <i class="far fa-calendar-alt"></i>
                                <span><?php the_time(get_option('date_format')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
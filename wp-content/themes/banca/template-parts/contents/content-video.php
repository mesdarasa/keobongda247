<?php
$thumb_size = is_active_sidebar('sidebar_widgets') ? 'banca_770x400' : 'full';
$opt = get_option('banca_opt');
$blog_continue_read = !empty($opt['blog_continue_read']) ? $opt['blog_continue_read'] : esc_html__('Continue Reading', 'banca');
$post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : -1;
$is_post_meta = isset($opt['is_post_meta']) ? $opt['is_post_meta'] : '1';
$is_post_date = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';
$is_post_reading_time = isset($opt['is_post_reading_time']) ? $opt['is_post_reading_time'] : '1';
$is_post_cat = isset($opt['is_post_cat']) ? $opt['is_post_cat'] : '1';
$is_post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '1';
$post_author_id = get_post_field('post_author', get_the_ID());
$video_url = function_exists('get_field') ? get_field('video_url') : '';
?>
<div <?php post_class('blog_top_post blog_classic_item shadow-sm'); ?>>
    <div class="video_post">
        <?php the_post_thumbnail($thumb_size);
        if (!empty($video_url)) : ?>
            <a class="popup-youtube video_icon" href="<?php echo esc_url($video_url) ?>"><i
                        class="arrow_triangle-right"></i></a>
        <?php endif; ?>
    </div>
    <div class="b_top_post_content">
        <div class="post_tag">
            <?php
            if ($is_post_date == '1') {
                if ($is_post_meta == '1') { ?>
                    <a href="<?php Banca_helper()->day_link(); ?>">
                        <i class="far fa-calendar-alt"></i>
                        <?php the_time(get_option('date_format')); ?>
                    </a>
                    <?php
                }
            }
            if ($is_post_reading_time == '1') {
                if ($is_post_meta == '1') { ?>
                    <a href="javascript:void(0)">
                        <i class="far fa-clock"></i>
                        <?php Banca_helper()->reading_time(); ?>
                    </a>
                    <?php
                }
            }
            if ($is_post_cat == '1' && has_tag()) {
                if ($is_post_meta == '1') { ?>
                    <a class="c_blue" href="<?php Banca_helper()->first_taxonomy_link(); ?>">
                        <i class="fas fa-tags"></i>
                        <?php Banca_helper()->first_taxonomy(); ?>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <h3><?php Banca_helper()->limit_latter(get_the_title(), $post_title_length); ?></h3>
        </a>
        <?php echo strip_shortcodes(Banca_helper()->excerpt('blog_excerpt', false)); ?>
        <div class="d-flex justify-content-between p_bottom">
            <a href="<?php the_permalink(); ?>" class="learn_btn">
                <?php echo esc_html($blog_continue_read) ?>
                <i class="<?php Banca_Helper()->arrow_left_right(); ?>"></i>
            </a>
            <?php
            if ($is_post_author == '1') {
                if ($is_post_meta == '1') {
                    ?>
                    <div class="media post_author">
                        <div class="round_img">
                            <?php Banca_helper()->post_author_avatar(40); ?>
                        </div>
                        <div class="media-body author_text">
                            <a href="<?php echo get_author_posts_url($post_author_id) ?>">
                                <h4 class="author_name"><?php echo get_the_author_meta('display_name') ?></h4>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

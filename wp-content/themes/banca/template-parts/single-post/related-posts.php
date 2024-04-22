<?php
global $banca_opt;

$post_author_id = get_post_field('post_author', get_the_ID());

$cats = get_the_terms(get_the_ID(), 'category');
$cat_ids = wp_list_pluck($cats, 'term_id');
$is_related = !empty($banca_opt['is_related_posts']) ? $banca_opt['is_related_posts'] : '';
$related_post_count = !empty($banca_opt['related_posts_count']) ? $banca_opt['related_posts_count'] : 2;

$posts = new WP_Query(array(
    'post_type' => 'post',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $cat_ids,
            'operator' => 'IN' //Or 'AND' or 'NOT IN'
        )),
    'posts_per_page' => $related_post_count,
    'ignore_sticky_posts' => 1,
    'orderby' => 'rand',
    'post__not_in' => array($post->ID)
));

if ($is_related == '1' && $posts->have_posts()) :
    ?>
    <div class="related-post-widget pb-50">
        <?php
        if (!empty($opt['related_posts_title'])) : ?>
            <h4 class="blog-widget-title mb-45"> <?php echo esc_html($opt['related_posts_title']) ?> </h4>
        <?php endif; ?>

        <div class="row gy-md-0 gy-4">
            <?php
            $delay_time = 0.1;
            while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="col-md-6">
                    <div class="blog-widget-2 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay_time) ?>s">
                        <div class="blog-img">
                            <?php the_post_thumbnail('banca_320x208'); ?>
                            <div class="catagory bg_primary">
                                <a href="<?php Banca_helper()->first_taxonomy_link(); ?>">
                                    <?php Banca_helper()->first_taxonomy(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>">
                                    <?php Banca_helper()->limit_latter(get_the_title(), 45, ''); ?>
                                </a>
                            </h5>
                            <p><?php Banca_helper()->limit_latter(wp_strip_all_tags(get_the_content()), 55); ?></p>
                            <div class="post-info">
                                <div class="author">
                                    <i class="far fa-user"></i>
                                    <span><?php echo get_the_author_meta('display_name', $post_author_id) ?></span>
                                </div>
                                <div class="post-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span><?php the_time(get_option('date_format')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $delay_time = $delay_time + 0.2;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
<?php
endif;
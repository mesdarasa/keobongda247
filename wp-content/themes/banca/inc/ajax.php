<?php

/**
 * AJAX
 */

add_action('wp_ajax_job_load_more_btn','job_load_more_btn');
add_action('wp_ajax_nopriv_job_load_more_btn','job_load_more_btn');

function job_load_more_btn () {

    $paged = $_POST['page'] + 1;
    $args = array(
        'post_type' => 'job',
        'posts_per_page' => 2,
        'paged' => $paged,
    );

    $jobs = new WP_Query($args);


    if ( $jobs->have_posts() ) :
        $data_wow_delay = 0.0;
        while($jobs->have_posts()): $jobs->the_post();
            ?>
            <div class="single-job-post me-1 wow fadeInUp mt-15" data-wow-delay="<?php echo esc_attr($data_wow_delay) ?>s">
                <div class="post-header">
                    <div>
                        <h6 class="job-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h6>
                        <div class="d-flex flex-wrap">
                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>
                                <?php Banca_Helper()->first_taxonomy('job_location'); ?>
                            </div>
                            <div class="job-catagory">
                                <span><?php Banca_Helper()->first_taxonomy('job_cat'); ?></span> |
                                <?php Banca_Helper()->first_taxonomy('job_type'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="timestamp">
                        <?php the_time(get_option('date_format')); ?>
                    </div>
                </div>
                <div class="post-content">
                    <?php echo wpautop(wp_trim_words(get_the_content(), 26, '...' )) ?>
                </div>
            </div>
            <?php
            $data_wow_delay = $data_wow_delay + 0.1;
        endwhile;
        wp_reset_postdata();
    endif;

    die();


}
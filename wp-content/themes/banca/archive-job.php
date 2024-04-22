<?php
/*
 * Template Name: Job Template
 */

get_header();
banca_get_banner();

global $banca_opt;
$title              = !empty( $banca_opt['job_mailchimp_title'] ) ? $banca_opt['job_mailchimp_title'] : '';
$subtitle           = !empty( $banca_opt['job_mailchimp_subtitle'] ) ? $banca_opt['job_mailchimp_subtitle'] : '';
$email_placeholder  = !empty( $banca_opt['job_mailchimp_email_placeholder'] ) ? $banca_opt['job_mailchimp_email_placeholder'] : '';
$submit_btn         = !empty( $banca_opt['job_mailchimp_submit_btn'] ) ? $banca_opt['job_mailchimp_submit_btn'] : '';
$job_column         = is_active_sidebar( 'job_sidebar_widgets' ) ? '8' : '12';

global $wp_query;

$orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : '';
$order = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : '';
$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

$args = array(
    'post_type' => 'job',
    'posts_per_page' => 6,
    'max_num_pages' => -1,
    'paged' => $paged,
    'orderby' => $orderby,
    'order' => $order
);

$jobs = new WP_Query($args);

    ?>
    <section class="pt-110 pb-150 bg_disable banca_job_archive">
        <div class="container">
            <div class="row">

                <!-- left side bar -->
                <?php get_sidebar( 'job' ); ?>

                <!-- Right bar -->
                <div class="col-lg-<?php echo esc_attr($job_column) ?>">

                    <div class="job-post-widget">

                        <div class="sidebar-header d-flex justify-content-between align-items-center mt-4 mt-lg-0">
                            <?php if ( class_exists( 'Banca_core' ) ) : ?>
                                <div class="sidebar-title">
                                    <h4 class="wow fadeInRight"><?php banca_count_posts() ?></h4>
                                </div>
                            <?php endif ?>
                            <form action="" method="get">
                                <div class="sorting-select wow fadeInLeft me-1">
                                    <select id="sort-select" name="orderby" onchange="document.location.href='?'+this.options[this.selectedIndex].value;">
                                        <option value="" selected><?php esc_html_e( 'SortBy Default', 'banca' ); ?></option>
                                        <option value="orderby=date&order=desc"><?php esc_html_e( 'Newest to Oldest', 'banca' ); ?></option>
                                        <option value="orderby=date&order=asc"><?php esc_html_e( 'Oldest to Newest', 'banca' ); ?></option>
                                        <option value="orderby=title&order=asc"><?php esc_html_e( 'Title Ascending ', 'banca' ); ?></option>
                                        <option value="orderby=title&order=desc"><?php esc_html_e( 'Title Descending', 'banca' ); ?></option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="more_post_ajax">
                            <?php
                            $data_wow_delay = 0.1;
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
                            ?>
                        </div>

                        <?php
                        if ( $jobs->max_num_pages > 0 ) {
                            ?>
                            <div class="text-center mt-60 wow fadeInUp load_more">
                                <a href="javascript:void(0)" class="theme-btn theme-btn-outlined load_more_btn" data-page="1">
                                    <?php esc_html_e( 'More jobs', 'banca' ); ?>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <!----------------------------- Job Mailchimp Form ------------------>
                <div class="col-lg-12">
                    <div class="email-alert-widget bg_white mt-140 wow fadeInUp shadow-lg">
                        <form action="" method="post" class="subscribe">
                            <?php
                            if ( $title ) { ?>
                                <h2><?php echo esc_html($title) ?></h2>
                                <?php
                            }
                            if ( $subtitle ) { ?>
                                <p><?php echo esc_html($subtitle) ?></p>
                                <?php
                            }
                            if ( $submit_btn ) { ?>
                                <div class="input-group mt-40">
                                    <input type="email" class="form-control" placeholder="<?php echo esc_attr($email_placeholder) ?>">
                                    <div class="input-group-append">
                                        <button type="submit" class="theme-btn theme-btn-lg"><?php echo esc_html($submit_btn) ?></button>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
get_footer();

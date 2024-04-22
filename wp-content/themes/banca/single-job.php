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
$job_attributes_title = function_exists( 'get_field' ) ? get_field( 'job_attribute_title' ) : '';
$job_application_form = !empty( $banca_opt['job_application_form'] ) ? $banca_opt['job_application_form'] : '';

?>

    <section class="job-application-area pt-110 pb-120 bg_white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="job-description-widget">
                        <?php
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                        ?>
                        <div class="d-flex justify-content-between border-top pt-40">
                            <button class="theme-btn theme-btn-lg" data-bs-toggle="modal" data-bs-target="#applyModal">
                                <?php esc_html_e( 'apply now', 'banca' ); ?>
                                <i class="arrow_right"></i>
                            </button>
                            <button class="theme-btn theme-btn-primary_alt theme-btn-lg custom-btn">
                                <i class="icon_ribbon_alt t"></i>
                                <?php esc_html_e( 'Save', 'banca' ) ?>
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pl-lg-55 order-1 order-lg-2">
                    <div class="right-sidebar-widget sticky_sidebar_widget">
                        <div class="single-sidebar-widget mt-25 widget-border ">
                            <?php if ( !empty($job_attributes_title) ) : ?>
                                <div class="widget-title">
                                    <h5><?php echo esc_html($job_attributes_title) ?></h5>
                                </div>
                            <?php endif; ?>
                            <div class="widget-content pt-15 pb-25 pr-25 pl-25">
                                <ul>
                                    <?php
                                    // check if the repeater field has rows of data
                                    if ( have_rows( 'job_attributes') ):
                                        while ( have_rows( 'job_attributes') ) : the_row(); ?>
                                            <li>
                                                <span class="name"><?php echo get_sub_field( 'attribute_title'); ?></span>
                                                <span class="value"><?php echo get_sub_field( 'attribute_value'); ?></span>
                                            </li>
                                        <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal job-application-modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <h4 class="job-title"><?php the_title() ?></h4>
                        <div class="d-flex flex-wrap">
                            <div class="job-location me-3"> <i class="icon_pin_alt"></i>
                                <?php Banca_Helper()->first_taxonomy('job_location'); ?>
                            </div>
                            <div class="job-catagory">
                                <span><?php Banca_Helper()->first_taxonomy('job_cat'); ?></span> |
                                <?php Banca_Helper()->first_taxonomy('job_type'); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo do_shortcode($job_application_form) ?>
                </div>
            </div>
        </div>
    </div>

<?php


get_footer();
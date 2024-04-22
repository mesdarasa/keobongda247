<?php
/**
 * Banner Single Job Post
 */
global $banca_opt;
$post_author_id = get_post_field('post_author', get_the_ID());

wp_enqueue_script('parallax');
wp_enqueue_script('parallax-scroll');
?>

<section class="breadcrumb-area banca_job_single">
    <div class="breadcrumb-widget pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content pt-120 pb-120">
                        <?php the_title('<h1>', '</h1>') ?>
                        <div class="breadcrumb-job-info d-flex justify-content-center mt-10">
                            <div class="job-location me-3"><i class="icon_pin_alt"></i>
                                <?php Banca_Helper()->first_taxonomy('job_location'); ?>
                            </div>
                            <div class="job-catagory">
                                <span><?php Banca_Helper()->first_taxonomy('job_cat'); ?></span> |
                                <?php Banca_Helper()->first_taxonomy('job_type'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
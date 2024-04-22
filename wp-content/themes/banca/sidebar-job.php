<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banca
 */

if (!is_active_sidebar('job_sidebar_widgets')) {
    return;
}
?>

<div class="col-lg-4 pr-lg-25">
    <div class="left-sidebar-widget">
        <div class="sidebar-header">
            <div class="sidebar-title">
                <h4><?php esc_html_e('Search for jobs', 'banca'); ?></h4>
            </div>
        </div>

        <?php dynamic_sidebar('job_sidebar_widgets'); ?>

    </div>
</div>

<?php
/**
 * Template Name: Banca Fullwidth
 */

get_header();
banca_get_banner();
    ?>
    <div class="full-width-page">
		<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		?>
    </div>
    <?php

get_footer();
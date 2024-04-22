<section class="breadcrumb-area banca_page_banner">
    <div class="breadcrumb-widget breadcrumb-widget-3 pt-180 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="breadcrumb-content">
                        <h1><?php Banca_Helper()->banner_title(); ?></h1>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url( '/' )); ?>">
                                    <?php esc_html_e( 'home', 'banca' ) ?>
                                </a>
                            </li>
                            <li><?php Banca_Helper()->banner_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

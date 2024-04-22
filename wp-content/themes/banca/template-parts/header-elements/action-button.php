<?php
$opt = get_option('banca_opt');
$is_dark_switcher = !empty($opt['is_dark_switcher']) ? $opt['is_dark_switcher'] : false;
$is_menu_btn = !empty($opt['is_menu_btn']) ? $opt['is_menu_btn'] : '';
$menu_btn_label = !empty($opt['menu_btn_label']) ? $opt['menu_btn_label'] : '';
$menu_btn_url = !empty($opt['menu_btn_url']) ? $opt['menu_btn_url'] : '';

if (function_exists('get_field') && '' != get_field('customize_the_button')) {
    $is_menu_btn = get_field('customize_the_button');
}

// Button Target
$btn_target = '';
if (!empty($action_btn_link['target'])) {
    $btn_target = "target='{$action_btn_link['target']}'";
} else {
    $btn_target = !empty($opt['menu_btn_target']) ? "target='{$opt['menu_btn_target']}'" : '';
}

?>
<div class="d-flex align-items-center">
    <?php
    if (!empty($is_menu_btn && $menu_btn_label)) { ?>
        <a href="<?php echo esc_url($menu_btn_url) ?>" <?php echo wp_kses_post($btn_target) ?>
           class="theme-btn theme-btn-outlined_alt">
            <?php echo esc_html($menu_btn_label) ?>
        </a>
        <?php
    }

    if ($is_dark_switcher == '1') {
        wp_enqueue_style('banca-dark-mode');
        wp_enqueue_script('banca-dark-mode');
        ?>
        <div class="px-2 js-darkmode-btn" title="<?php esc_attr_e('Toggle dark mode', 'banca'); ?>">
            <label for="something" class="tab-btn tab-btns" id="dark-switch">
                <ion-icon name="moon"></ion-icon>
            </label>
            <label for="something" class="tab-btn" id="day-switch">
                <ion-icon name="sunny"></ion-icon>
            </label>
            <label id="ball" class=" ball" for="something"></label>
            <input type="checkbox" name="something" id="something" class="dark_mode_switcher something">
        </div>
        <?php
    }
    ?>
</div>

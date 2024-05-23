<?php 
$sitename   = get_bloginfo('name');
$homeurl    = get_home_url();
$logo_id    = get_theme_mod('custom_logo');
$logo       = wp_get_attachment_image_src($logo_id, 'full');
$logo_alt   = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
?>

<a href="<?php echo esc_url($homeurl) ?>">
    <?php if ($logo) { ?>
        <img class="" src="<?php echo esc_url($logo[0]) ?>" alt="<?php echo $logo_alt . ' - ' . esc_attr($sitename) ?>" width="<?php echo esc_attr($logo[1]) ?>" height="<?php echo esc_attr($logo[2]) ?>" />
    <?php } ?>
</a>
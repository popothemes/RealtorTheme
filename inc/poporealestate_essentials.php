<?php
//TGM Plugin Activation
add_action('tgmpa_register', 'poporealestate_register_required_plugins');

//Get Pages List In Option
if (!function_exists('poporealestate_get_page_list'))
{
    function poporealestate_get_page_list()
    {
        $list_of_pages = get_pages();
        $return_options = [];

        foreach ($list_of_pages as $key => $value) {
            $return_options[get_page_link($value->ID)] = $value->post_title;

        }

        return $return_options;
    }
}


//Social Icons
if (!function_exists('poporealestate_get_social_icons')) {
    function poporealestate_get_social_icons()
    {
        $social_icons = '<ul class="social-media">';
        if (trim(get_theme_mod('poporealestate_social_icon_facebook', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_facebook')) . '" class="fb"><i class="fa fa-facebook"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_twitter', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_twitter')) . '" class="tt"><i class="fa fa-twitter"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_pinterest', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_pinterest')) . '" class="tt"><i class="fa fa-pinterest-p"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_googleplus', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_googleplus')) . '" class="tt"><i class="fa fa-googleplus"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_tumblr', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_tumblr')) . '" class="tt"><i class="fa fa-tumblr"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_stumbleupon', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_stumbleupon')) . '" class="tt"><i class="fa fa-stumbleupon"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_wordpress', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_wordpress')) . '" class="tt"><i class="fa fa-wordpress"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_instagram', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_instagram')) . '" class="tt"><i class="fa fa-instagram"></i></a></li>';

        }
        if (trim(get_theme_mod('poporealestate_social_icon_dribbble', '')) != '') {

            $social_icons = $social_icons . '<li><a href="' . esc_attr(get_theme_mod('poporealestate_social_icon_dribbble')) . '" class="tt"><i class="fa fa-dribbble"></i></a></li>';

        }


        $social_icons = $social_icons . '</ul>';

        return $social_icons;
    }
}

if (!function_exists('poporealestate_register_required_plugins')) {
    function poporealestate_register_required_plugins()
    {

        $plugins = array(

            array(
                'name' => 'Meta Box',
                'slug' => 'meta-box',
                'required' => true,
            ),
            array(
                'name' => 'Kirki',
                'slug' => 'kirki',
                'required' => true,
            ),
            array(
                'name' => 'Contact Forms 7',
                'slug' => 'contact-form-7',
                'required' => true,
            ),
            array(
                'name' => 'Display Tweets',
                'slug' => 'display-tweets-php',
                'required' => false,
            ),
            array(
                'name' => 'Popo Real Estate Essentials', // The plugin name.
                'slug' => 'popo-real-estate-essentials', // The plugin slug (typically the folder name).
                'source' => 'http://www.popothemes.com/wordpress/free/plugin/popo-real-estate-essentials.zip', // The plugin source.
                'required' => true, // If false, the plugin is only 'recommended' instead of required.
                'version' => '1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
                'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
                'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
                'is_callable' => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
            ),


            $config = array(
                'id' => 'popo-real-estate',             // Unique ID for hashing notices for multiple instances of TGMPA.
                'default_path' => '',                      // Default absolute path to bundled plugins.
                'menu' => 'tgmpa-install-plugins', // Menu slug.
                'has_notices' => true,                    // Show admin notices or not.
                'dismissable' => true,                    // If false, a user cannot dismiss the nag message.
                'dismiss_msg' => '',                      // If 'dismissable' is false, this message will be output at top of nag.
                'is_automatic' => false,                   // Automatically activate plugins after installation or not.
                'message' => '',                      // Message to output right before the plugins table.

            ));

        tgmpa($plugins, $config);
    }
}
?>
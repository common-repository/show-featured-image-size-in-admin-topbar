<?php
/*
 Plugin Name: Show Featured Image Size in Admin TopBar
 Plugin URI: http://apasionados.es/#utm_source=wpadmin&utm_medium=plugin&utm_campaign=wpshowfeaturedimagesizeinadmintopbarplugin 
 Description: This plugin displays the image size for the featured image size in the admin top bar.
 Version: 1.2
 Author: Apasionados, Apasionados del Marketing
 Author URI: http://apasionados.es

 Release notes: 2.0 release.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'admin_init', 'sfisiat_load_language' );
function sfisiat_load_language() {
	load_plugin_textdomain( 'show-featured-image-size-in-admin-topbar', false,  dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}

add_filter("plugin_action_links_" . plugin_basename(__FILE__), "sfisiat_plugin_actions", 10, 4);
function sfisiat_plugin_actions($actions, $plugin_file, $plugin_data, $context) {
    array_unshift(
        $actions, '<a href=' . admin_url( 'options-general.php?page=show-featured-image-size-in-admin-topbar%2Fsfisiat.php' ) . '>' . __('Settings') . '</a>' . ' | ' . '<a href="https://wordpress.org/support/plugin/show-featured-image-size-in-admin-topbar" target="_blank">' . __('Support','show-featured-image-size-in-admin-topbar') . '</a>' 
    );
    return $actions;
}

function my_tweaked_admin_bar() {
	global $wp_admin_bar;
	if ( get_option( 'sfisiat_featured_image_size' ) != '' ) {
		$wp_admin_bar->add_node(array(
			'id'    => 'featured-image-size',
			'title' => __( 'Featured image size', 'show-featured-image-size-in-admin-topbar' ) . ': <span class="featured-image-size-admin-topbar">'. get_option( 'sfisiat_featured_image_size' ) .'</span>',
			'href'  => ''
		));
	} else {
		$wp_admin_bar->add_node(array(
			'id'    => 'featured-image-size',
			'title' => __( 'Featured image size', 'show-featured-image-size-in-admin-topbar' ) . ': <span class="featured-image-size-admin-topbar">'. __( 'not set', 'show-featured-image-size-in-admin-topbar' ) .'</span>',
			'href'  => admin_url( 'options-general.php?page=show-featured-image-size-in-admin-topbar%2Fsfisiat.php' )
		));
	}
}
add_action( 'wp_before_admin_bar_render', 'my_tweaked_admin_bar' ); 

function my_tweaked_admin_bar_css() {
	if (is_user_logged_in()) {
		echo '<style>#wpadminbar .featured-image-size-admin-topbar { color:#F60; font-weight:bold; }</style>';
	}
}
add_action('admin_head', 'my_tweaked_admin_bar_css');


add_action( 'admin_menu', 'sfisiat_create_menu' );
function sfisiat_create_menu() {
	add_submenu_page( 'options-general.php', 'Featured Image Size', 'Featured Image Size', 'manage_options', 'show-featured-image-size-in-admin-topbar/sfisiat.php', 'sfisiat_settings_page' );
	add_action( 'admin_init', 'sfisiat_register_settings' );
}

function sfisiat_register_settings() {
	register_setting( 'show-featured-image-size-in-admin-topbar-settings-group', 'sfisiat_featured_image_size', 'sfisiat_sanitize_input' );
}

function sfisiat_sanitize_input($safe_featured_image_size) {
	if ( strlen( $safe_featured_image_size ) > 20 ) {
		$safe_featured_image_size = substr( $safe_featured_image_size, 0, 20 );
	}
	$safe_featured_image_size = sanitize_text_field( $safe_featured_image_size );
	return $safe_featured_image_size;
}
	
function sfisiat_settings_page() { ?>
	<div class="wrap">
            <h2><?php _e( 'Show Featured Image Size in Admin TopBar by Apasionados.es', 'show-featured-image-size-in-admin-topbar' ); ?></h2>
                <p><strong><?php _e( 'This plugin displays the image size for the featured image in the admin top bar. We find this very handy, because you don\'t have to look up the default size of the featured image each time you publish a post.', 'show-featured-image-size-in-admin-topbar' ); ?></strong></p>
		<div id="main-container" class="postbox-container metabox-holder" style="width:75%;"><div style="margin:0 8px;">    
            <form method="post" action="options.php">
                <?php settings_fields( 'show-featured-image-size-in-admin-topbar-settings-group' ); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><?php _e( 'Set up Featured Image Size:', 'show-featured-image-size-in-admin-topbar' ); ?></th>
                        <td><label for="sfisiat_featured_image_size">
                            <input type="text" id="sfisiat_featured_image_size" size="20" name="sfisiat_featured_image_size" value="<?php echo get_option( 'sfisiat_featured_image_size' ); ?>" />
                            <p class="description"><?php _e( 'Please set up featured image size. For example "1200x600".<br />Please note that there is a limit of 20 caracters. No HTML allowed.', 'show-featured-image-size-in-admin-topbar' ); ?></p>
                            </label>
                        </td>
                    </tr>
                    </table>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'show-featured-image-size-in-admin-topbar' ); ?>" />
                </p>
            </form>
		</div></div> <!-- #main-container -->
        <div id="side-container" class="postbox-container metabox-holder" style="width:24%;"><div style="margin:0 8px;">
            <div class="postbox">
                <h3 style="cursor:default;"><span><?php _e('Do you like this Plugin?', 'show-featured-image-size-in-admin-topbar'); ?></span></h3>
                <div class="inside">
                    <p><?php _e('We also need volunteers to translate that plugin into more languages.', 'show-featured-image-size-in-admin-topbar'); ?></p>
                    <p><?php echo (__('If you wish to help then contact us using our', 'show-featured-image-size-in-admin-topbar') . ' <a href="http://apasionados.es/contacto/index.php?desde=wordpress-org-showfeaturedimagesizeinadmintopbar-administracionplugin" target="_blank">' . __('contact form', 'show-featured-image-size-in-admin-topbar') . '</a> ' . __('or reach us on Twitter:', 'show-featured-image-size-in-admin-topbar') . ' <a href="https://twitter.com/apasionados" target="_blank">@Apasionados</a>.'); ?></p>
                </div> <!-- .inside -->
            </div> <!-- .postbox -->
        </div></div> <!-- #side-container -->    
	</div>
<?php }; ?>

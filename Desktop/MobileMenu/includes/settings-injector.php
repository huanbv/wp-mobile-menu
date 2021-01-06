<?php

$A_OPTION = 'A';
$B_OPTION = 'B';

function register_mysettings() {
    global $A_OPTION, $B_OPTION;

    register_setting( 'mfpd-settings-group', $A_OPTION );
    register_setting( 'mfpd-settings-group', $B_OPTION );
}
 
function mfpd_create_menu() {
        add_menu_page('My First Plugin Settings', 'Mobile Menu', 'administrator', __FILE__, 'mfpd_settings_page',plugins_url('/icon/apps.png', __FILE__), 1);
        add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'mfpd_create_menu'); 
 

function mfpd_settings_page() {
    global $A_OPTION, $B_OPTION; ?>

    <div class="wrap">
    <h2>Tạo trang cài đặt cho plugin</h2>
    <?php if( isset($_GET['settings-updated']) ) { ?>
        <div id="message" class="updated">
            <p><strong><?php _e('Settings saved.') ?></strong></p>
        </div>
    <?php } ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'mfpd-settings-group' ); ?>
        <table class="form-table">
            <tr valign="top">
            <th scope="row">Tùy chọn cài đặt A</th>
            <td><input type="text" name="<?php $A_OPTION ?>" value="<?php echo get_option($A_OPTION); ?>" /></td>
            </tr>

            <tr valign="top">
            <th scope="row">Tùy chọn cài đặt B</th>
            <td><input type="text" name="<?php $B_OPTION ?>" value="<?php echo get_option($B_OPTION); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
    </div>
<?php } ?>


?>
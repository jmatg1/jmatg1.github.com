<?php

/**
 * Plugin Name: FAQ WD
 * Plugin URI: https://web-dorado.com/products/wordpress-faq-wd.html 
 * Description: Do you need an elegant FAQ section to describe details of your services, terms and conditions? You have a long company history and want to have it in Q&A format? Then FAQ WD will be the most convenient tool for reaching a highly professional result. 
 * Version: 1.0.36
 * Author: WebDorado
 * Author URI: https://web-dorado.com/wordpress-plugins-bundle.html
 * License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!defined('FAQ_DIR') && !defined('FAQ_URL') && !defined('FAQ_BASENAME')) {
    define('FAQ_DIR', dirname(__FILE__));
    define('FAQ_URL', plugin_dir_url(__FILE__));
    define('FAQ_BASENAME', plugin_basename(__FILE__));
    define('FAQWD_MAIN_FILE', __FILE__);
    define('FAQWD_VERSION', '1.0.36');
    require_once('faq_class.php');

    add_action('plugins_loaded', array('faq_class', 'get_instance'));
    register_activation_hook(__FILE__, array('faq_admin_class', 'global_activate'));
    if (is_admin()) {
        require_once('admin_class.php');
        $faq_admin = faq_admin_class::get_instance();
        add_action('init', array('faq_admin_class', 'faqwd_freemius'), 9);
    }
}


if (!function_exists('faqwd_bp_install_notice')) {


    if(get_option('wds_bk_notice_status')==='' || get_option('wds_bk_notice_status')==='1'){
        return;
    }


    function faqwd_bp_script_style()
    {
        $faqwd_bp_plugin_url = plugins_url('', __FILE__);
        $get_current = get_current_screen();

        $current_screen_id = array(
          'edit-faq_wd',
          'faq_wd',
          'edit-faq_category',
          'edit-faqwd_theme',
          'faqwd_theme',
          'faq_wd_page_faqwd_stats',
          'faq_wd_page_faq_wd_settings',
          'faq_wd_page_faq_wd_lang_option',
          'overview_faqwd'
        );

        if(in_array($get_current->id, $current_screen_id)) {

            wp_enqueue_script('faqwd_bck_install', $faqwd_bp_plugin_url . '/js/wd_bp_install.js', array('jquery'));
            wp_enqueue_style('faqwd_bck_install', $faqwd_bp_plugin_url . '/css/wd_bp_install.css');
        }
    }

    add_action('admin_enqueue_scripts', 'faqwd_bp_script_style');

    /**
     * Show notice to install backup plugin
     */
    function faqwd_bp_install_notice()
    {
        $get_current = get_current_screen();

        $current_screen_id = array(
          'edit-faq_wd',
          'faq_wd',
          'edit-faq_category',
          'edit-faqwd_theme',
          'faqwd_theme',
          'faq_wd_page_faqwd_stats',
          'faq_wd_page_faq_wd_settings',
          'faq_wd_page_faq_wd_lang_option',
          'overview_faqwd'
        );

        if(in_array($get_current->id, $current_screen_id)) {


            $faqwd_bp_plugin_url = plugins_url('', __FILE__);
            $prefix = 'faqwd';
            $meta_value = get_option('wd_bk_notice_status');
            if ($meta_value === '' || $meta_value === false) {
                ob_start();
                ?>
                <div class="notice notice-info" id="wd_bp_notice_cont">
                    <p>
                        <img id="wd_bp_logo_notice"
                             src="<?php echo $faqwd_bp_plugin_url . '/images/backup-logo.png'; ?>">
                        <?php _e("FAQ WD advises: Install brand new FREE", $prefix) ?>
                        <a href="https://wordpress.org/plugins/backup-wd/" title="<?php _e("More details", $prefix) ?>"
                           target="_blank"><?php _e("Backup WD", $prefix) ?></a>
                        <?php _e("plugin to keep your data and website safe.", $prefix) ?>
                        <a class="button button-primary"
                           href="<?php echo esc_url(wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=backup-wd'), 'install-plugin_backup-wd')); ?>">
                            <span onclick="faqwd_bp_notice_install()"><?php _e("Install", $prefix); ?></span>
                        </a>
                    </p>
                    <button type="button" class="wd_bp_notice_dissmiss notice-dismiss"><span
                          class="screen-reader-text"></span>
                    </button>
                </div>
                <script>faqwd_bp_url = '<?php echo add_query_arg(array('action' => 'wd_bp_dismiss',), admin_url('admin-ajax.php')); ?>'</script>
                <?php
                echo ob_get_clean();
            }
        }
    }

    if (!is_dir(plugin_dir_path(dirname(__FILE__)) . 'backup-wd')) {
        add_action('admin_notices', 'faqwd_bp_install_notice');
    }

    /**
     * Add usermeta to db
     *
     * empty: notice,
     * 1    : never show again
     */
    function faqwd_bp_install_notice_status()
    {
        update_option('wd_bk_notice_status', '1', 'no');
    }

    add_action('wp_ajax_wd_bp_dismiss', 'faqwd_bp_install_notice_status');

}

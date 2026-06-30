<?php
/**
 * Plugin Name: WhatsApp Modal Popup
 * Plugin URI: https://example.com/whatsapp-modal-popup
 * Description: Exibe um modal popup para convidar usuários a entrar no canal do WhatsApp.
 * Version: 1.0.0
 * Author: Manus AI
 * Author URI: https://manus.im
 * License: GPL2
 */

// Evita acesso direto ao arquivo
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define constantes
define( 'WMP_VERSION', '1.0.0' );
define( 'WMP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Inclui arquivos do plugin
require_once WMP_PLUGIN_DIR . 'includes/class-whatsapp-modal-popup.php';

// Função para iniciar o plugin
function run_whatsapp_modal_popup() {
    $plugin = new WhatsApp_Modal_Popup();
    $plugin->run();
}
add_action( 'plugins_loaded', 'run_whatsapp_modal_popup' );

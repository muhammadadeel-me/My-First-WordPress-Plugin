<?php
/**
 * Main Plugin Settings File
 * 
 * @package Employee Management
 */

class EMPLOYE_MANAGEMENT {

  public function __construct() {

    if(!defined('EM_PLUGIN_URI')) {
      return;
    }

    $this->include_files();
    $this->init_hooks();

  }


  public function include_files() {
    include EM_PLUGIN_URI . 'inc/register-menu.php';
  }

  /**
   * Init all necessary hooks for the plugin
   */
  public function init_hooks() {
    add_action( 'admin_menu', 'em_admin_menus' );
  }
}
<?php
/**
 * Register Menus
 * 
 * @package Employee Management
 */

function em_admin_menus() {

 add_menu_page(
  'Add System | Employee Management System',
  'Employee System',
  'manage_options',
  'employee-system',
  'em_crud_system_html',
  'dashicons-admin-users',
  25
 ) ;

 add_submenu_page(
  'employee-system',
  'Add Employee',
  'Add Employee',
  'manage_options',
  'add-employee',
  'em_add_employee_html'
 );

 add_submenu_page(
  'employee-system',
  'List Employee',
  'List Employee',
  'manage_options',
  'list-employee',
  'em_list_employee_html'
 );

}

function em_crud_system_html() {
  ?>
  <h1>Welcome to my First WordPress Plugin</h1>
  <?php
}

function em_add_employee_html() {
  ?>
  <h1>Add New Employee</h1>
  <?php
}

function em_list_employee_html() {
  ?>
  <h1>List New Employee</h1>
  <?php
}
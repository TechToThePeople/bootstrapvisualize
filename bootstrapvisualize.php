<?php

require_once 'bootstrapvisualize.civix.php';


function bootstrapvisualize_civicrm_pageRun(&$page) {
  $pageName = $page->getVar('_name');
  if ($pageName == 'CRM_Civisualize_Page_Main') {
    CRM_Core_Resources::singleton()->addStyleFile('eu.tttp.bootstrapvisualize', 'css/bootstrap.min.css');   
  }
}
/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function bootstrapvisualize_civicrm_config(&$config) {
  _bootstrapvisualize_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function bootstrapvisualize_civicrm_xmlMenu(&$files) {
  _bootstrapvisualize_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function bootstrapvisualize_civicrm_install() {
  _bootstrapvisualize_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function bootstrapvisualize_civicrm_uninstall() {
  _bootstrapvisualize_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function bootstrapvisualize_civicrm_enable() {
  _bootstrapvisualize_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function bootstrapvisualize_civicrm_disable() {
  _bootstrapvisualize_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function bootstrapvisualize_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _bootstrapvisualize_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function bootstrapvisualize_civicrm_managed(&$entities) {
  _bootstrapvisualize_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function bootstrapvisualize_civicrm_caseTypes(&$caseTypes) {
  _bootstrapvisualize_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function bootstrapvisualize_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _bootstrapvisualize_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

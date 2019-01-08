<?php

require_once 'bbpriorityRefund.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function bbpriorityRefund_civicrm_config(&$config)
{
    _bbpriorityRefund_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function bbpriorityRefund_civicrm_xmlMenu(&$files)
{
    _bbpriorityRefund_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function bbpriorityRefund_civicrm_install()
{
    $params = array(
        'version' => 3,
        'name' => 'BBPRefund',
        'title' => 'BB Priority Refund Payment Processor',
        'description' => 'Register Refund Payment in Priority',
        'class_name' => 'Payment_BBPriorityRefundFree',
        'billing_mode' => 'notify', // Corresponds to the Processor Type: Form (1), Button (2), Special (3) or Notify (4)
        'user_name_label' => 'User',
        'password_label' => 'Password',
        'signature_label' => 'Terminal',
        //    'subject_label' => 'Subject',
        'url_site_default' => 'https://checkout.kabbalah.info/logo1.png',
        //    'url_api_default' => 'http://www.example.co.il/',
        //    'url_recur_default' => 'http://www.example.co.il/',
        //    'url_button_default' => 'http://www.example.co.il/',
        //    'url_site_test_default' => 'http://www.example.co.il/',
        'url_site_test_default' => 'https://checkout.kabbalah.info/logo1.png',
        //    'url_api_test_default' => 'http://www.example.co.il/',
        //    'url_recur_test_default' => 'http://www.example.co.il/',
        //    'url_button_test_default' => 'http://www.example.co.il/',
        'is_recur' => 0,
        'payment_type' => 1, // Credit Card (1) or Debit Card (2)
    );

    civicrm_api('PaymentProcessorType', 'create', $params);
    _bbpriorityRefund_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function bbpriorityRefund_civicrm_postInstall()
{
    _bbpriorityRefund_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function bbpriorityRefund_civicrm_uninstall()
{
    $params = array(
        'version' => 3,
        'sequential' => 1,
        'name' => 'BBPRefund',
    );
    $result = civicrm_api('PaymentProcessorType', 'get', $params);
    if ($result["count"] == 1) {
        $params = array(
            'version' => 3,
            'sequential' => 1,
            'id' => $result["id"],
        );
        civicrm_api('PaymentProcessorType', 'delete', $params);
    }

    _bbpriorityRefund_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function bbpriorityRefund_civicrm_enable()
{
    _bbpriorityRefund_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function bbpriorityRefund_civicrm_disable()
{
    _bbpriorityRefund_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function bbpriorityRefund_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL)
{
    return _bbpriorityRefund_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function bbpriorityRefund_civicrm_managed(&$entities)
{
    _bbpriorityRefund_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function bbpriorityRefund_civicrm_caseTypes(&$caseTypes)
{
    _bbpriorityRefund_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function bbpriorityRefund_civicrm_angularModules(&$angularModules)
{
    _bbpriorityRefund_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function bbpriorityRefund_civicrm_alterSettingsFolders(&$metaDataFolders = NULL)
{
    _bbpriorityRefund_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
 * function bbpriorityRefund_civicrm_preProcess($formName, &$form) {
 *
 * } // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
function bbpriorityRefund_civicrm_navigationMenu(&$menu)
{
    // The selected access permissions are bad; Do not use it!!!
    return;
    $pages = array(
        'admin_page' => array(
            'label' => 'BBPriority Payments Admin',
            'name' => 'BBPriority Payments Admin',
            'url' => 'civicrm/BBPriorityAdmin',
            'parent' => array('Contributions'),
            'permission' => 'access CiviContribute',
            'operator' => 'AND',
            'separator' => NULL,
            'active' => 1,
        ),
    );
    foreach ($pages as $page) {
        // Check that our page doesn't already exist
        $menu_item_search = array('url' => $page['url']);
        $menu_items = array();
        CRM_Core_BAO_Navigation::retrieve($menu_item_search, $menu_items);
        if (empty($menu_items)) {
            $path = implode('/', $page['parent']);
            unset($page['parent']);
            _bbpriorityRefund_civix_insert_navigation_menu($menu, $path, $page);
        }
    }
}

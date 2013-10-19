<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

include_once('vtlib/Vtiger/Event.php');

/**
 * Module class definition
 */
class SimpleExtension {

    /**
     * Invoked when special actions are performed on the module.
     *
     * @param String Module name
     * @param String Event Type
     */
    function vtlib_handler($moduleName, $eventType) {

        echo "<h1>Module installed</h1>";

        if($eventType == 'module.postinstall') {
            // TODO add relevant code here

            echo "Module postinstall";
        }

        if ($eventType == 'module.enabled') {

            // Register an event handler for the Accounts module for the aftersave event
            $AccountsInstance = Vtiger_Module::getInstance('Accounts');
            Vtiger_Event::register($AccountsInstance, 'vtiger.entity.aftersave', 'SimpleExtensionHandler', 'modules/SimpleExtension/SimpleExtension.php');

            echo "Module enabled";
        }

        /*
         * Event types you can use
         *
         * module.enabled - Handle actions when this module is enabled.
         * module.disabled - Handle actions when this module is disabled.
         * module.preuninstall - Handle actions when this module is about to be deleted.
         * module.preupdate - Handle actions before this module is updated.
         * module.postupdate - Handle actions after this module is updated.
         */

    }

}
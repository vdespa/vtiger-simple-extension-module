<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/*
 * Module event handler class
 */
class SimpleExtension extends VTEventHandler {

    /**
     * Handle event
     *
     * @param $eventName
     * @param $data
     */
    function handleEvent($eventName, $data) {

        if($eventName == 'vtiger.entity.aftersave') {
            // Entity has been saved, take next action
            // Display the data received
            var_dump($eventName, $data);
            // TODO remove the die() - this is just to show that the code works
            die('Entity has been saved, take next action');
        }
    }
}
?>
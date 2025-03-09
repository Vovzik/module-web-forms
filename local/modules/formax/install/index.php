<?php

includeModuleLangFile(__FILE__);
if (class_exists('formax'))
    return;

class formax extends CModule {
    var $MODULE_ID = 'formax';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = 'Y';

    public function __construct() {
        $arModuleVersion = array();

        include(__DIR__ . '/version.php');






        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {


            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_NAME = 'Форма тестовая';
        $this->MODULE_DESCRIPTION = 'Описание модуля';
    }



       public function debug_to_console($data) {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        }


    function doInstall() {
        $this->installFiles();
        $this->installDB(false);
    }

    function installDB(){
        registerModule($this->MODULE_ID);
        return true;
    }

    function installEvents() {
        return true;
    }

    function installFiles() {
        return true;
    }

    function doUninstall(){
        $this->uninstallDB(false);
    }

    function uninstallDB($arParams = array()){

        unregisterModule($this->MODULE_ID);

        return true;
    }

    function uninstallEvents(){
        return true;
    }

    function uninstallFiles() {
        return true;
    }

}

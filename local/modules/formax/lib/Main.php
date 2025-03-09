<?php
namespace bitrix\Formax;

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

class Main  {
    static function doany() {
        $module_id = pathinfo(dirname(__DIR__))['basename'];

        global $APPLICATION;



        if (Option::get($module_id, 'switch_on', 'N') == 'Y') {
             $APPLICATION->IncludeComponent("bitrix:form.result.new", ".default", array(
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_URL" => "",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "LIST_URL" => "",
                "SEF_MODE" => "N",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "Y",
                "WEB_FORM_ID" => "1",
                "VARIABLE_ALIASES" => array(
                    "WEB_FORM_ID" => "WEB_FORM_ID",
                    "RESULT_ID" => "RESULT_ID",
                )
            ), false);
        }


    }

}
?>




Установка модуля происходит из системных модулей
---------------------------------------------------
<?php
if (CModule::IncludeModule("formax")) {
    bitrix\Formax\Main::doany();
}
?>

<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) { die(); } ?>
<?php
/**
 * @var array $arResult
 */

?>

<?php if ($arResult["isFormNote"] === "Y"): ?>
    Спасибо, ваша заявка принята!
<?php else: ?>
    <?=$arResult["FORM_HEADER"]?>
    <input type="hidden" name="web_form_submit" value="Y">

    <?php if ($arResult["isFormErrors"] === "Y"): ?>
        <div class="errors">
            <?=$arResult["FORM_ERRORS_TEXT"]?>
        </div>
    <?php endif; ?>

    <?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult["QUESTIONS"]['NAME']['HTML_CODE']?><br>

    <?=$arResult["QUESTIONS"]['PHONE']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult["QUESTIONS"]['PHONE']['HTML_CODE']?><br>

    <?=$arResult["QUESTIONS"]['MESSAGE']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult["QUESTIONS"]['MESSAGE']['HTML_CODE']?><br>

    <input type="submit" value="<?=$arResult["arForm"]["BUTTON"]?>">

    <?=$arResult["FORM_FOOTER"]?>
<?php endif; ?>


<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult["ITEMS"]["PROPERTIES"]);
?>
	<h2 class="h2 vacancy__h2">Вакансии</h2>
	<div class="vacancy-container">
		<div class="vacancy-container__list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="vacancy-container__item">
					<img class="vacancy-container__img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					<div class="vacancy-container__info">
						<div class="vacancy-container__title">
							<span class="vacancy-container__data"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
							<h3 class="vacancy-container__h3">
								<a class="vacancy-container__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
							</h3>
						</div>
						<p class="vacancy-container__preview">
								<?=$arItem["PREVIEW_TEXT"]?>
						</p>
						<p class="vacancy-container__work-position">
								<?=$arItem["PROPERTIES"]["WORK"]["VALUE"]?>
						</p>
					</div>
				</div>
			<?endforeach;?>	
		</div>
	</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


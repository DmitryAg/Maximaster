<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header-menu">
			<div class="border">
				<div class="main-menu">
					<ul class="main-menu__list">
						<?foreach($arResult as $arItem): ?>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
						</li>
						<?endforeach?>
						<!--<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Cooking</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Education</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Fiction</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Health</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Mathenatics</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Medical</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Reference</a>
						</li>
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Science</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
	</header>
<?endif?>
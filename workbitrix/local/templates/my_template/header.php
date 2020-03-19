<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	use Bitrix\Main\Page\Asset; 
	$APPLICATION->ShowHead();?>
	<title><?php $APPLICATION->ShowTitle();?></title>
	<?php
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/cat_style.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/detail.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/vacancy.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/vacancy-detail.css");
	?>
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
	<header class="header">
		<div class="header-top">
			<div class="border">
				<div class="header-top-menu">
					<a class="header-top-menu__link link" href="#">Sign in</a>
					<a class="header-top-menu__link link" href="#">My Account</a>
					<a class="header-top-menu__link link" href="#">Order Status</a>
					<a class="header-top-menu__link link" href="#">Help</a>
				</div>
			</div>
		</div>
		<div class="header-user">
			<div class="border">
				<div class="header-user-container">
					<div class="header-user-logo">
						<a class="header-user-logo__link" href="#">
							<img class="header-user-logo__img" src="img/logo.png" alt="">
						</a>
						
					</div>
					<div class="header-user-search">
						<form class="header-user-search_form" action="#">				
							<input class="input_search" type="text">				
							<img class="header-user-search__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/search.png" alt="">
							<button class="input_button" type="text" value="Search">Search</button>
						</form>
					</div>
					<div class="header-user-basket">	
						<div class="header-user-basket__cart">
							<div class="basket-cart">
								<div class="basket-cart__top">
									<img class="basket-cart__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/basket.png" alt="">
									<span class="basket-cart__span_cart">Your cart</span>
									<span class="basket-cart__span_items">(2 items)</span>
								</div>
								<div class="basket-cart__bottom">
									<span class="basket-cart__span_sum">$125.0</span>
									<a class="basket-cart__check" href="#">Chekout</a>
								</div>
							</div>
						</div>
						<div class="header-user-basket__wish">
							<div class="basket-wish">
								<div class="basket-wish__top">
									<img class="basket-wish__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/wish.png" alt="">
								</div>
								<div class="basket-wish__bottom">
									<div class="basket-wish__span">Wish list</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="header-menu">
			<div class="border">
				<div class="main-menu">
					<ul class="main-menu__list">
						<li class="main-menu__item">
							<a class="main-menu__link link" href="#">Computer</a>
						</li>
						<li class="main-menu__item">
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
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>-->
	<?$APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	<section class="section-banner">
		<div class="border">
			<div class="banner">
				<div class="slider">
					<div class="slider__container">
						<img class="slider__item" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/slider.png" alt="">
						<img class="slider__item" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/slider.png" alt="">
						<img class="slider__item" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/slider.png" alt="">
					</div>
					<div class="slider__jq">
						<div class="slider__before">1</div>
						<div class="slider__after">2</div>
					</div>
				</div>
				<div class="advert">
					<img class="advert__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/advert.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="section-content">
		<div class="border">
			<div class="content">
				<div class="sidebar">
					<h1 class="h2 sidebar__h2">Categories</h1>
					<ul class="sidebar__list">
						<h3 class="sidebar__h3">
							<a class="sidebar__h3_link link_choosen" href="#">ALL</a>
						</h3>
					</ul>
					<ul class="sidebar__list">
						<h3 class="sidebar__h3">
							<a class="sidebar__h3_link" href="#">Fiction & Literature</a>
						</h3>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Children</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Science Fiction</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Fantasy</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Mystery</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Romance</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Horror</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Poetry</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Literature</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Crime</a>
						</li>
					</ul>
					<ul class="sidebar__list">
						<h3 class="sidebar__h3">
							<a class="sidebar__h3_link" href="">Non - Fiction</a>
						</h3>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Comic</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Cook</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Psychology</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Medical</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Art</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Photography</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Law</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Histrory</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Business</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Computer</a>
						</li>
					</ul>
					<ul class="sidebar__list">
						<h3 class="sidebar__h3">
							<a class="sidebar__h3_link" href="">Other</a>
						</h3>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Baby</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Sex</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Travel</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Science</a>
						</li>
						<li class="sidebar__item">
							<a class="sidebar__link" href="#">Sports</a>
						</li>
					</ul>
				</div>
				<div class="vacancy">
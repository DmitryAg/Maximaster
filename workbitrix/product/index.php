<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<section class="section-adress">
		<div class="border">
			<div class="adress">
				<ul class="adress__list">
					<li class="adress__item">
						<a class="adress__link" href="">Home</a>
					</li>
					<li class="adress__item">
						<span class="adress__item_arrow">&raquo;</span>
					</li>
					<li class="adress__item">
						<a class="adress__link" href="">Discount and Clearance</a>
					</li>
					<li class="adress__item">
						<span class="adress__item_arrow">&raquo;</span>
					</li>
					<li class="adress__item">
						<a class="adress__link" href="">Sonatini Hippeastrum Alaska</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="section-detail">
		<div class="border">
			<div class="detail">
				<img class="detail__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/detail.png" alt="">
				<div class="detail__info">
					<h1 class="detail__h1">Star Wars Episode I</h1>
					<p class="detail__text">The Star Wars Episode I: The Phantom Menace novelization was written by Terry Brooks and published on April 21, 1999 by Del Rey. It is based on the script of the movie of the same name. Narration for the abridged audio version was performed by Michael Cumpsty. The unabridged version was performed by Alexander Adams. On January 31, 2012, a new paperback edition </p>
					<div class="detail-product-cart">
						<div class="detail-product-cart__top">
							<div class="detail-product-cart__money">
								<h1 class="detail-product-cart__h1">Our price : <span class="detail-product-cart__price">$150</span></h1>
								<p class="detail-product-cart__discount">Was $200 Save 20%</p>
							</div>
							<div class="detail-product-cart__add">Add to cart</div>
						</div>
						<div class="detail-product-cart__bottom">
							<div class="detail-product-cart__secure">
								<img class="detail-product-cart__secure_img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/lock.png" alt="">
								<p class="detail-product-cart__secure">
									Safe, Secure Shopping
								</p>
							</div>
							<div class="detail-product-cart__cards">
								<img class="detail-product-cart__cards_img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/pay-pal.png" alt="">
								<img class="detail-product-cart__cards_img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/mcard.png" alt="">
								<img class="detail-product-cart__cards_img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/visa.png" alt="">
								<img class="detail-product-cart__cards_img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/americ.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-description">
		<div class="border">
			<div class="description-container">
				<div class="description-container-text">
					<div class="description">
						<div class="description__titles">
							<div class="description__title">Product Information</div>
							<div class="description__title">Other details</div>
						</div>
						<div class="description__content">
								<p class="description__text">The Star Wars Episode I: The Phantom Menace novelization was written by Terry Brooks and published on April 21, 1999 by Del Rey. It is based on the script of the movie of the same name. Narration for the abridged audio version was performed by Michael Cumpsty. The unabridged version was performed by Alexander Adams. On January 31, 2012, a new paperback edition was </p>
						</div>
					</div>
					<div class="description-container__rewiews">
						<div class="description-rewiews">
							<h3 class="description-rewiews__h3">Product review</h3>
							<div class="description-rewiews__item">
								<div class="description-rewiews__avatar">
									<img class="description-rewiews__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/profile.png" alt="">
									<span class="description-rewiews__span">Name 1</span>
								</div>
								<p class="description-rewiews__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
							</div>
							<div class="description-rewiews__item">
								<div class="description-rewiews__avatar">
									<img class="description-rewiews__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/profile.png" alt="">
									<span class="description-rewiews__span">Name 2</span>
								</div>
								<p class="description-rewiews__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
							</div>
							<div class="description-rewiews__comment">
								<h3 class="description-rewiews__h3">Write a comment</h3>
								<form class="form" action="#">
									<div class="form_row">
										<label class="label" for="name">Your name</label>
										<input class="input" name = "name" type="text">
									</div>
									<div class="form_row">
										<label class="label" for="email">email</label>
										<input class="input" name = "email" type="text">
									</div>
									<div class="form_row">
										<label class="label" for="message">Message</label>
										<input class="input message" name = "message" type="text">
									</div>
									<div class="submit-container">
										<input class="submit" type="submit" value="Submit">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="description-container__recommend">
					<div class="description-recommend">
						<h3 class="description-recomend__h3">You may also like</h3>
						<ul class="description-recomend__list">
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
							<li class="description-recomend__item">
								<img class="description-recomend__img" src="<?=DEFAULT_TEMPLATE_PATH;?>/img/recomend.png" alt="">
								<div class="description-recomend__item_info">
									<p class="description-recomend__p">The Hair With Amber</p>
									<span class="description-recomend__price">$50</span>
									<a class="description-recomend__link" href="#">Read more</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
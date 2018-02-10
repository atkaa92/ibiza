@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">
				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="#">Գլխավոր</a>
					</li>
					<li class="breadcrumb__item">Կապ</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left"><b>Կապ</b></h1>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<div class="grid">
					<div class="grid__col-md-8 grid__col-sm-8 grid__col-xs-12 int-md">
						<!-- map -->
						<div id="map" class="contacts-map"></div>
						<div class="contact">
							<div class="grid ct-int">
								<div class="grid__col-md-5 grid__col-sm-5 grid__col-xs-12">
									<div class="contact__logo"><img src="../images/light-logo.png" alt="Ibiza"></div>
								</div>

								<div class="grid__col-md-7 grid__col-sm-7 grid__col-xs-12">
									<address class="address">
										<span class="address__name">Հեռ:</span> <b>+374 10 600 101; +374 10 600 202; +374 11 570 020</b><br>
										<span class="address__name">Հասցե:</span> Մյասնիկյան պողոտա 18 / 5<br>
										<span class="address__name">Էլ-Փոստ:</span> ibizahotelyerevan@gmail.com
									</address>
								</div>
							</div>
							<div class="grid">
								<div class="grid__col-md-5 grid__col-sm-5 grid__col-xs-12">
									<ul class="contact__social contact__social--dark">
										<li class="contact__social-item">
											<a href="#" class="contact__social-link"><i class="fa fa-facebook"></i></a>
										</li>
										<li class="contact__social-item">
											<a href="#" class="contact__social-link"><i class="fa fa-pinterest-p"></i></a>
										</li>
										<li class="contact__social-item">
											<a href="#" class="contact__social-link"><i class="fa fa-youtube-play"></i></a>
										</li>
									</ul>
								</div>
								<div class="grid__col-md-7 grid__col-sm-7 grid__col-xs-12">
									<ul class="paymant-icons">
										<li class="paymant-icons__item">We accept :</li>
										<li class="paymant-icons__item"><img src="../images/pay1.png" alt=""></li>
										<li class="paymant-icons__item"><img src="../images/pay2.png" alt=""></li>
										<li class="paymant-icons__item"><img src="../images/pay3.png" alt=""></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="grid__col-md-4 grid__col-sm-4 grid__col-xs-12">
						<div class="reservation">
							<h1 class="main-title main-title-cl">Ուղարկել Նամակ</h1>
							<form role="form" data-toggle="validator" class="form form--single cf shake" id="contactForm">
								<label for="name" class="form__name form__name--rq">Անուն</label>
								<input type="text" id="name" class="form__fild" data-error="NEW ERROR MESSAGE">
								<div class="help-block with-errors"></div>
								<label for="email" class="form__name form__name--rq">Էլ-Փոստ</label>
								<input type="email" id="email" class="form__fild" required>
								<div class="help-block with-errors"></div>
								<label for="subject" class="form__name form__name--rq">Վերնագիր</label>
								<input type="text" id="subject" class="form__fild" required>
								<div class="help-block with-errors"></div>
								<label for="message" class="form__name form__name--rq">Նամակ</label>
								<textarea class="form__fild" id="message"></textarea required>
								<div class="help-block with-errors"></div>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="form__btn-wrap" id="#msgSubmit">
									<button class="btn btn--secondary form__btn" type="submit" id="form-submit">Ուղարկել</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<script>
	$(function () {
		$(".footer__map").hide('fast');
		$(".footer__overlay ").hide('fast');
	})
</script>
@endsection

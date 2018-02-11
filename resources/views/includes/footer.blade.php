<footer class="footer">
		<!-- map -->
		<div id="map" class="footer__map"></div>
		<div class="footer__overlay contact">
			<div class="footer__overlay-wrap">
				<div class="container">
					<div class="footer__row cf">
						<div class="contact__logo contact__logo--bordered pull-left"><img src="/images/light-logo.png" alt="Ibiza"></div>
						<ul class="contact__social pull-left">
							<li class="contact__social-item">
								<a href="#" class="contact__social-link"><i class="fa fa-facebook"></i></a>
							</li>
							<li class="contact__social-item">
								<a href="#" class="contact__social-link"><i class="fa fa-instagram"></i></a>
							</li>
							<li class="contact__social-item">
								<a href="#" class="contact__social-link"><i class="fa fa-youtube-play"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer__row">
						<address class="address">
							<div class="address__row">
								<span class="address__cell address__name">{{ trans('data.phone') }}:</span> 
								<span class="address__cell address__inf"><b>+ 374 10 600 101; <br class="br-hide"> + 374 10 600 202; <br> + 374 11 570 020</b></span>
							</div>
							<div class="address__row">
								<span class="address__cell address__name">{{ trans('data.address') }}:</span> 
								<span class="address__cell address__inf">{{ trans('data.address-text') }}</span>
							</div>
							<div class="address__row">
								<span class="address__cell address__name">{{ trans('data.email') }}:</span> 
								<span class="address__cell address__inf"><a href="mailto:info@ibiza-hotel.am">info@ibiza-hotel.am</a></span>
							</div>
						</address>
					</div>
					<div class="footer__row">
						<ul class="paymant-icons">
							<li class="paymant-icons__item">{{ trans('data.we-accept') }} :</li>
							<li class="paymant-icons__item"><img src="/images/pay1.png" alt=""></li>
							<li class="paymant-icons__item"><img src="/images/pay2.png" alt=""></li>
							<li class="paymant-icons__item"><img src="/images/pay3.png" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__info cf">
			<div class="container">
				<div class="developer pull-left">
					<a href="http://retine-studio.com" class="developer__link" target="_blank"><img src="{{asset('/images/developer.png')}}" alt="Retine"></a>
				</div>
				<p class="copy pull-right">&copy; {{ date("Y") }} All Rights Reserved</p>
			</div>
		</div>
	</footer>
	<!-- loader -->
	<div class="spinner-wrap">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
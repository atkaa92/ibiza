@extends('layouts.master')

@section('container')
	<main class="content">
		<section class="section">
			<div class="slider slider--main">
				<div class="tp-banner" >
					<ul>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="">
							<div class="caption randomrotate fullscreenvideo"
							   data-x="20"
							   data-y="80"
							   data-speed="300"
							   data-start="200"
							   data-easing="easeOutExpo"
							   data-nextslideatend="true"
							   data-autoplay="false">
								<video preload="none" width="100%" class="slider__video">
								
								<source src="/images/video.mp4" type='video/mp4' />
								<track kind="captions" src="demo.captions.vtt" srclang="en" label="English" />
								</video>
							</div>
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="">
							<img src="/images/dummy.png"  alt="" data-lazyload="/images/slider/1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="">
							<img src="/images/dummy.png"  alt="" data-lazyload="/images/slider/2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="section section--int">
			<div class="container">
				<h1 class="main-title">Բարի գալուստ <strong>IBIZA hotel &amp; sauna</strong></h1>
				<div class="section__info">
					<p>
						Այցելուների տրամադրության տակ են 1, 2 և 3 սենյականոց շքեղ հյուրանոցային համարներ՝  անհատական ջակուզիով և դեպի բնությունը բացվող ակնահաճո տեսարանով պատշգամբներով։ Այստեղ համատեղվում են ավանդականը և հարմարավետության վերաբերյալ ժամանակակից պատկերացումները։
					</p>
					<a href="#" class="btn btn--primary">ավելին</a>
				</div>
			</div>
		</section>
		<section class="section section--bg"></section>
		<section class="section section--int">
			<div class="container">
				<h1 class="main-title">Շոքեբաղնիքներ</h1>
				<div class="section__info">
					<p>
					    Լավագույն ավանդական շոքեբաղնիքները Իբիցայում։ Վայր, որտեղ լավագույնս համատեղվում են օգտակարն ու հաճելին։Շոգեբաղնիքներին բնորոշ էթիկայի բոլոր նրբություններին տիրապետող բարձրակարգ մասնագետները կօգնեն ձեզ թոթափել մտավոր և ֆիզիկական ծանրաբեռնվածությունը և վերագտնել կենսական էներգիան։
					</p>
				</div>
				<div class="offers">
                    @for($i = 1; $i<= 3;  $i++)
                        <div class="offers__col">
                            <figure class="media media--bordered">
                                <a href="/room/{{$i}}" class="media__img"><img src="/images/rooms/{{$i}}.jpg" alt=""></a>
                                <figcaption class="media__body media__body--big">
                                    <h2 class="media__title media__title--big"><a href="/room/{{$i}}">Շոգեբաղնիք Արևելյան</a></h2>
                                    <ul class="media__list list">
                                        @for($j = 1; $j<= 3;  $j++)
                                            <li class="list__item">Շոգեբաղնիք Արևելյան</li>
                                        @endfor
                                    </ul>
                                </figcaption>
                                <a href="/room/{{$i}}" class="media__link">Ավելին <i class="fa fa-angle-right"></i></a>
                            </figure>
                        </div>
                    @endfor
				</div>
			</div>
		</section>
	</main>
@endsection


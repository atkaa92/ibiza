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
				<h1 class="main-title">{{ trans('data.welcome') }} <strong>IBIZA hotel &amp; sauna</strong></h1>
				<div class="section__info">
					<p>
						{{ trans('data.welcome-text') }}
					</p>
					<a href="#" class="btn btn--primary">{{ trans('data.more') }}</a>
				</div>
			</div>
		</section>
		<section class="section section--bg"></section>
		<section class="section section--int">
			<div class="container">
				<h1 class="main-title">{{ trans('data.saunas') }} </h1>
				<div class="section__info">
					<p>
						{{ trans('data.saunas-text') }} 
					</p>
				</div>
				<div class="offers">
					 @foreach($gerRandomThree as  $room)
                        <div class="offers__col">
                            <figure class="media media--bordered">
                                <a href="/room/{{$room->id}}" class="media__img"><img src="{{ unserialize($room->images)[0] }}" alt=""></a>
                                <figcaption class="media__body media__body--big">
                                    <h2 class="media__title media__title--big"><a href="/room/{{$room->id}}">Շոգեբաղնիք Արևելյան</a></h2>
                                    <ul class="media__list list">
										@foreach($model->whereIn('id',unserialize($room->features))->get() as $feature)
											<li class="list__item"> {{ getPropByLang($feature,'name') }} </li>
										@endforeach
                                    </ul>
                                </figcaption>
                                <a href="/room/{{$room->id}}" class="media__link">{{ trans('data.more') }} <i class="fa fa-angle-right"></i></a>
                            </figure>
                        </div>
					@endforeach
				</div>
				<div class="offers">
                   
				</div>
			</div>
		</section>
	</main>
@endsection


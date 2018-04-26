@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">

				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="/">{{ trans('data.menu-home') }}</a>
					</li>
					<li class="breadcrumb__item">
						<a href="/rooms">{{ trans('data.menu-rooms') }}</a>
					</li>
					<li class="breadcrumb__item">{{ getPropByLang($room,'name') }}</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">{{ getPropByLang($room,'name') }}</h1>
					<p class="top-info__price pull-right"><b>{{ $room->price }} {{ trans('data.dram') }} </b><small>{{ $room->duration }} {{ trans('data.hour') }}</small></p>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<div class="grid">
					<div class="grid__col-md-8 grid__col-sm-8 grid__col-xs-12 int-md">
						<div class="slider slider-inner">
							<div class="slider-inner__bg">
								<div class="loader" style="display: none;"></div>
							</div>
							<ul class="slider-inner__thumbs clearfix">
								@if($room->images)
									@foreach(unserialize($room->images) as $image)
										<li class="slider-inner__thumbs-item thumb-active">
											<img alt="" src='{{ $image }}'>
										</li>
									@endforeach
								@endif
							</ul>
						</div>
					</div>
					<div class="grid__col-md-4 grid__col-sm-4 grid__col-xs-12">
						<div class="reservation">
							<h1 class="main-title main-title-cl">{{ trans('data.for-reserve') }}</h1>
							<span class="phone-number">+374 10 600 101</span>
							<span class="phone-number">+374 10 600 202</span>
							<span class="phone-number">+374 11 570 020</span>
						</div>
					</div>
				</div>
				<div class="bordered bordered--int">
					<h2 class='secondary-title'>{{ trans('data.desc') }}</h2>
					<div class='section__info section__info--left'>
						<p>
							{{ getPropByLang($room,'desc') }}
						</p>
					</div>
					<div class="description">
						<ul class="list list--description">
							@if($features)
								@foreach($features as $feature)
									<li class="list__item">{{ getPropByLang($feature,'name') }}</li>
								@endforeach
							@endif
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection

@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">
				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="/">{{ trans('data.menu-home') }}</a>
					</li>
					<li class="breadcrumb__item">{{ trans('data.menu-rooms') }}</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">{{ trans('data.menu-rooms') }}</h1>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<div class="rooms items">
					@foreach($rooms as $room)
						<div class="media media--row">
							<a class="media__img" href="/room/{{$room->id}}'"><img src="{{ unserialize($room->images)[0] }}" alt=""></a>
							<div class="media__body cf">
								<div class="media__body-wrap">
									<div class="media__body-inner">
										<h2 class="secondary-title secondary-title--media"> {{ getPropByLang($room,'name') }} </h2>
										<ul class="list">
											@foreach($model->whereIn('id',unserialize($room->features))->get() as $feature)
												<li class="list__item"> {{ getPropByLang($feature,'name') }} </li>
											@endforeach
										</ul>
									</div>
									<aside class="media__aside">
										<header class="media__aside-header">
											<span class="price">{{ $room->price }}<small> {{ trans('data.dram') }}</small></span>
												<p class='hour'>{{ $room->duration }} {{ trans('data.hour') }}</p>
										</header>
										<footer class="media__aside-footer">
											<a href="/room/{{$room->id}}" class="btn btn--secondary">{{ trans('data.more') }}</a>
										</footer>
									</aside>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				{!! $rooms->links('includes.paginate') !!}
			</div>
		</section>
	</main>
@endsection

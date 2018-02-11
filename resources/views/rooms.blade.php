@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">
				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="#">Գլխավոր</a>
					</li>
					<li class="breadcrumb__item">Սենյակներ</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">Սենյակներ</h1>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<div class="rooms items">
					@for($i = 1; $i<= 5;  $i++)
						<div class="media media--row">
							<a class="media__img" href="/room/{{$i}}'"><img src="/images/rooms/{{$i}}.jpg" alt=""></a>
							<div class="media__body cf">
								<div class="media__body-wrap">
									<div class="media__body-inner">
										<h2 class="secondary-title secondary-title--media"> Շոգեբաղնիք Ֆիննական </h2>
										<ul class="list">
											<li class="list__item"> Ավտոտնակ </li>
											<li class="list__item"> Ջակուզի </li>
											<li class="list__item"> Լողավազան </li>
										</ul>
									</div>
									<aside class="media__aside">
										<header class="media__aside-header">
											<span class="price">29000<small> Դրամ</small></span>
												<p class='hour'>1 Ժամ</p>
												<p class='hour'>8 Ժամ</p>
										</header>
										<footer class="media__aside-footer">
											<a href="/room/{{$i}}" class="btn btn--secondary">Ավելին</a>
										</footer>
									</aside>
								</div>
							</div>
						</div>
					@endfor
				</div>
				<ul class="pagin">
					<li class="pagin__item">
						<a class="pagin__link pagin__link--active" href="rooms.php?page=">1</a>
					</li>
					<li class="pagin__item">
						<a class="pagin__link pagin__link" href="rooms.php?page=">2</a>
					</li>
				</ul>
			</div>
		</section>
	</main>
@endsection

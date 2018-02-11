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
					<li class="breadcrumb__item">Շոգեբաղնիք Ռուսական From DB</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">Շոգեբաղնիք Ռուսական From DB</h1>
					<p class="top-info__price pull-right"><b>20000 {{ trans('data.dram') }} </b><small>{{ trans('data.hour') }}</small></p>
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
								@for($i = 0; $i < 3 ; $i++)
									<li class="slider-inner__thumbs-item thumb-active">
										<img alt="" src='{{ asset("/images/rooms/Cottage_1/cottage_$i.jpg") }}'>
									</li>
								@endfor
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
							Փայտով տաքացվող դասակն ռուսական շոգեբաղնիք․ այստեղ օգտագործվում են նաև մի շարք խոտաբույսերի ու յուղերի թուրմեր, ինչը շատ բարենպաստ է ազդում հատկապես շնչուղիների վրա
						</p>
					</div>
					<div class="description">
						<ul class="list list--description">
							@for($i = 0; $i < 5 ; $i++)
								<li class="list__item">Ռուսական Սաունա</li>		
							@endfor
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection

@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">
				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="/">{{ trans('data.menu-home') }}</a>
					</li>
					<li class="breadcrumb__item">{{ trans('data.menu-gallery') }}</li>
				</ul>
			</div>
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">{{ trans('data.menu-gallery') }}</h1>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<ul class="gallery">

			        <li class="gallery__item" data-src="../images/gallery/1.jpg">
		            	<img src="../images/gallery/thumbs/1.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/2.jpg">
		            	<img src="../images/gallery/thumbs/2.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/3.jpg">
		            	<img src="../images/gallery/thumbs/3.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/4.jpg">
		            	<img src="../images/gallery/thumbs/4.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/5.jpg">
		            	<img src="../images/gallery/thumbs/5.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/6.jpg">
		            	<img src="../images/gallery/thumbs/6.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/7.jpg">
		            	<img src="../images/gallery/thumbs/7.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/8.jpg">
		            	<img src="../images/gallery/thumbs/8.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/9.jpg">
		            	<img src="../images/gallery/thumbs/9.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/10.jpg">
		            	<img src="../images/gallery/thumbs/10.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/11.jpg">
		            	<img src="../images/gallery/thumbs/11.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/12.jpg">
		            	<img src="../images/gallery/thumbs/12.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/13.jpg">
		            	<img src="../images/gallery/thumbs/13.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/14.jpg">
		            	<img src="../images/gallery/thumbs/14.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/15.jpg">
		            	<img src="../images/gallery/thumbs/15.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/16.jpg">
		            	<img src="../images/gallery/thumbs/16.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/17.jpg">
		            	<img src="../images/gallery/thumbs/17.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/18.jpg">
		            	<img src="../images/gallery/thumbs/18.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/19.jpg">
		            	<img src="../images/gallery/thumbs/19.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/20.jpg">
		            	<img src="../images/gallery/thumbs/20.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/21.jpg">
		            	<img src="../images/gallery/thumbs/21.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/22.jpg">
		            	<img src="../images/gallery/thumbs/22.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/23.jpg">
		            	<img src="../images/gallery/thumbs/23.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/24.jpg">
		            	<img src="../images/gallery/thumbs/24.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/25.jpg">
		            	<img src="../images/gallery/thumbs/25.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/26.jpg">
		            	<img src="../images/gallery/thumbs/26.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/27.jpg">
		            	<img src="../images/gallery/thumbs/27.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/28.jpg">
		            	<img src="../images/gallery/thumbs/28.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/29.jpg">
		            	<img src="../images/gallery/thumbs/29.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/30.jpg">
		            	<img src="../images/gallery/thumbs/30.jpg" />
			        </li>

			        <li class="gallery__item" data-src="../images/gallery/31.jpg">
		            	<img src="../images/gallery/thumbs/31.jpg" />
			        </li>
			        <li class="gallery__item" data-src="../images/gallery/32.jpg">
		            	<img src="../images/gallery/thumbs/32.jpg" />
			        </li>
				</ul>
			</div>
		</section>
	</main>
@endsection

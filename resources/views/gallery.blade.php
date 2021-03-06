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
					@forelse($images as $image)
			        <li class="gallery__item" data-src="{{ url($image->getPathName()) }}">
		            	<img src="{{ url($image->getPathName()) }}" />
			        </li>
					@endforeach
				</ul>
			</div>
		</section>
	</main>
@endsection

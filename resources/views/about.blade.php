@extends('layouts.master')

@section('container')
	<main class="content">
		<div class="top-bg">
			<div class="container">

				<ul class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="/">{{ trans('data.menu-home') }}</a>
					</li>
					<li class="breadcrumb__item">{{ trans('data.menu-about') }}</li>
				</ul>
			</div>
			
			<div class="top-info cf">
				<div class="container">
					<h1 class="top-info__title pull-left">{{ trans('data.menu-about') }}</h1>
				</div>
			</div>
		</div>
		<section class="section section--int">
			<div class="container">
				<h1 class="main-title">{{ trans('data.welcome') }} <strong>IBIZA hotel &amp; sauna</strong></h1>
				<div class="section__info">
					<p>
						{{ trans('data.about-text') }}
					</p>
				</div>
			</div>
		</section>
	</main>
@endsection

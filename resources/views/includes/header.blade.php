<header class="header">
		<div class="container">
			<nav class="navbar" role="navigation">
				<div class="navbar__header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Նավիգացիա</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar__home" href="/"><img class="navbar__logo" src="/images/logo.png" alt="Ibiza"></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav-list">
						<li class="{{ $currPage == 'home' ? 'nav-list__item nav-list__item--active' : 'nav-list__item' }}"><a href="/">{{ trans('data.menu-home') }}</a></li>
						<li class="{{ $currPage == 'about' ? 'nav-list__item nav-list__item--active' : 'nav-list__item' }}"><a href="/about">{{ trans('data.menu-about') }}</a></li>
						<li class="{{ $currPage == 'rooms' ? 'nav-list__item nav-list__item--active' : 'nav-list__item' }}"><a href="/rooms">{{ trans('data.menu-rooms') }}</a></li>
						<li class="{{ $currPage == 'gallery' ? 'nav-list__item nav-list__item--active' : 'nav-list__item' }}"><a href="/gallery">{{ trans('data.menu-gallery') }}</a></li>
						<li class="{{ $currPage == 'contacts' ? 'nav-list__item nav-list__item--active' : 'nav-list__item' }}"><a href="/contacts">{{ trans('data.menu-contacts') }}</a></li>
					</ul>
				</div>
				<!-- language -->
				<ul class="navbar__language">
					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li class="navbar__language-item">
							<a  class="navbar__language-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
								{{ $properties['native'] }}
							</a>
						</li>
					@endforeach
				</ul>
			</nav>
		</div>
	</header>

<?php
Use App\ClassPJ;
Use App\Race;
?>

@extends('base')

@section('body')
<body class="sb-left theme-dark">
	<!--============= start main area -->

	<!-- APP ASIDE ==========-->
	<aside id="app-aside" class="app-aside left light">
		<header class="aside-header">
			<div class="animated">
				<a href="/" id="app-brand" class="app-brand">
					<center>
						<img class="icon-layout" src="/assets/images/d20.png">
						<span id="brand-name" class="brand-icon foldable">Throwing Dices</span>
					</center>
				</a>
			</div>
		</header><!-- #sidebar-header -->
		<div class="aside-user">
			<!-- aside-user -->
			<div class="media">
				<div class="media-left">
					<div class="avatar avatar-md avatar-circle">
						<a href="javascript:void(0)">
							<img class="img-responsive" src="/{{ Config::get('app.url_image_user').'/'.Auth::user()->image }}" alt="avatar"/>
						</a>
					</div><!-- .avatar -->
				</div>
				<div class="media-body">
					<div class="foldable">
						<h3 class="name-user"><a href="javascript:void(0)" class="username">{{ Auth::user()->name }}</a></h3>
					</div>
				</div>
			</div>
			<!-- /aside-user -->
		</div><!-- #aside-user -->

		<div class="aside-scroll">
			<div id="aside-scroll-inner" class="aside-scroll-inner">
				<ul class="aside-menu aside-left-menu">
					<li class="menu-item">
						<a href="/" class="menu-link">
							<span class="menu-icon"><i class="zmdi zmdi-file-text zmdi-hc-lg"></i></span>
							<span class="menu-text foldable"> @lang('menu.index') </span>
						</a>
					</li><!-- .menu-item -->
					<li class="menu-item has-submenu">
						<a href="javascript:void(0)" class="menu-link submenu-toggle">
							<span class="menu-icon"><i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i></span>
							<span class="menu-text foldable"> @lang('menu.parties') </span>
							<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
						</a>
						<ul class="submenu">
							<li><a href="/parties"> @lang('menu.myParties') </a></li>
							<li><a href="/join-party"> @lang('menu.joinParty') </a></li>
							<li><a href="/new-party"> @lang('menu.newParty') </a></li>
						</ul>
					</li><!-- .menu-item -->
					<li class="menu-item has-submenu">
						<a href="javascript:void(0)" class="menu-link submenu-toggle">
							<span class="menu-icon"><i class="zmdi zmdi-male-female zmdi-hc-lg"></i></span>
							<span class="menu-text foldable"> @lang('menu.race') </span>
							<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
						</a>
						<ul class="submenu">
							@foreach (Race::get() as $element)
							<li><a href="/races/{{ $element->name }}"> @lang('menu.'.$element->name) </a></li>
							@endforeach
						</ul>
					</li><!-- .menu-item -->
					<li class="menu-item has-submenu">
						<a href="javascript:void(0)" class="menu-link submenu-toggle">
							<span class="menu-icon"><i class="zmdi zmdi-book-image zmdi-hc-lg"></i></span>
							<span class="menu-text foldable"> @lang('menu.classes') </span>
							<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
						</a>
						<ul class="submenu">
							@foreach (ClassPJ::get() as $element)
							<li><a href="/classes/{{ $element->name }}"> @lang('menu.'.$element->name) </a></li>
							@endforeach
						</ul>
					</li><!-- .menu-item -->
				</ul>
				<hr>
				<footer id="aside-footer">
					<ul class="aside-menu aside-left-menu">
						<li class="menu-item has-submenu">
							<a href="javascript:void(0)" class="menu-link submenu-toggle">
								<span class="menu-icon"><i class="zmdi zmdi-settings zmdi-hc-lg"></i></span>
								<span class="menu-text foldable"> @lang('menu.lang') </span>
								<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
							</a>
							<ul class="submenu">
								<li><a href="{{ url('lang', ['es']) }}"> @lang('menu.es') </a></li>
								<li><a href="{{ url('lang', ['en']) }}"> @lang('menu.en') </a></li>
							</ul>
						</li><!-- .menu-item -->
						<li class="menu-item">
							<a href="/logout" class="menu-link">
								<span class="menu-icon"><i class="zmdi zmdi-power-off zmdi-hc-lg"></i></span>
								<span class="menu-text foldable"> @lang('menu.exit') </span>
							</a>
						</li><!-- .menu-item -->
					</ul>
				</footer><!-- #sidebar-footer -->
			</div><!-- .aside-scroll-inner -->
		</div><!-- #aside-scroll -->
	</aside>
	<!--========== END app aside -->

	<!-- APP NAVBAR ==========-->
	<nav id="app-navbar" class="app-navbar p-l-lg p-r-md inverse">
		<div id="navbar-header" class="pull-left">
			<button id="aside-fold" class="hamburger visible-lg-inline-block hamburger--arrowalt is-active js-hamburger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<button id="aside-toggle" class="hamburger hidden-lg hamburger--spin js-hamburger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<h5 id="page-title">
				&nbsp;&nbsp;&nbsp;
				@yield('titleDasboard')
			</h5>
		</div>
	</nav>
	<!--========== END app navbar -->


	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
		<div class="wrap">
			<section class="app-content">

				@yield('container')

			</section><!-- #dash-content -->
		</div><!-- .wrap -->
	</main>
	<!--========== END app main -->

</body>
@stop
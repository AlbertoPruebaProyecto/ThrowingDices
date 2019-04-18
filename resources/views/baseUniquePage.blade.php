@extends('base')

@section('body')



<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="/">
				<img class="icon" src="assets/images/d20.png">
				<span>Throwing Dices</span>
			</a>
		</div><!-- logo -->

		@yield('container')

		<div class="simple-page-footer">
			@yield('footer')
		</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
@stop
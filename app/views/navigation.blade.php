<nav id="navbar" class="navbar navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a
			class="navbar-brand"
			href="/"
			title="{{ Config::get('site.name') }}">
			<img src="{{ Config::get('site.logo-small') }}" class="img-responsive" alt="{{ Config::get('site.name') }}">
			{{-- <span>{{ Config::get('site.name') }}</span> --}}
		</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div  class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			@include('nav-links')
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
<!-- __/\_(-_-)_/\__ -->

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ Config::get('site.name') }} &mdash; {{ Config::get('site.description') }}</title>

	{{-- SEO --}}
	<meta name="description" content="{{ Config::get('site.description') }}"/>
	<link rel="canonical" href="{{ Config::get('site.url') }}" />

	{{-- Open Graph --}}
	<meta property="og:locale" content="ht_HT" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{ Config::get('site.name') }} &mdash; {{ Config::get('site.description') }}" />
	<meta property="og:description" content="{{ Config::get('site.description') }}" />
	<meta property="og:url" content="{{ Config::get('site.url') }}" />
	<meta property="fb:admins" content="504535793062337" />
	<meta property="og:image" content="{{ Config::get('site.logo') }}" />
	<meta property="og:site_name" content="{{ Config::get('site.name') }}" />

	{{-- Twitter Graph --}}
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description" content="{{ Config::get('site.description') }}"/>
	<meta name="twitter:title" content="{{ Config::get('site.name') }} &mdash; {{ Config::get('site.description') }}"/>
	<meta name="twitter:domain" content="{{ Config::get('site.name') }}"/>
	<meta name="twitter:site" content="{{ Config::get('site.twitter') }}"/>
	<meta name="twitter:image" content="{{ Config::get('site.logo') }}"/>
	<meta name="twitter:creator" content="{{ Config::get('site.twitter') }}"/>
	{{-- /SEO --}}

	@include('styles')

	<link
		rel="icon"
		href="{{ Config::get('site.favicon') }}"
		type="image/x-icon">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container visible-xs" id="wrapper">

		<div class="row">
			@include('navigation')
		</div>
	</div>
	<header class="hidden-xs">
		<div class="container">
			<div class="col-sm-12">
				<h1>
					<a href="/" title="{{ Config::get('site.name') }}">
						<img
							src="{{ Config::get('site.logo-medium') }}"
							class="header-image"
							alt="{{ Config::get('site.name') }}">
					</a>
					<br>
					{{ Config::get('site.name') }} -
					<small>{{ Config::get('site.description') }}</small>
				</h1>
			</div>
		</div>
	</header>
	<section id="main" class="bg-blue">
		<div class="container">
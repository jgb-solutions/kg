<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>My Laravel application</title>
</head>
<body>
	<header>Header</header>

	@yield('content')

	@yield('moreContent')

	@yield('evenMoreContent')

	<footer>Copyright, {{ date('Y') }}</footer>

</body>
</html>
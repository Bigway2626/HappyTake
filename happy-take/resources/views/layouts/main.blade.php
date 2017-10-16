<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('partials.head')
</head>
<body>
    <main>
		@section('content')
		@show
    </main>
	@include('partials.footer')
</body>
</html> 
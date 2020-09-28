<!DOCTYPE html>
<html>
	@include('layouts.admin.head')
<body>
	 <div id="wrapper">
 		@include('layouts.admin.sidebar')


 		@include('layouts.admin.header')
 			@yield('content')
 	</div>


@include('layouts.admin.scripts')
</body>
</html>
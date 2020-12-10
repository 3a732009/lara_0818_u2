<html>
<head>
    <title>@yield('title') | My Blog</title>
</head>
<body>
@include('layouts.partials.navigation')
<div class="container">
    @yield('content')
</div>
</body>
</html>

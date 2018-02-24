<!DOCTYPE html>

<html lang="en">
<head>
    @include('includes.head')
</head>

<body class="font-sans bg-white text-black">

    @include('includes.nav')

    @yield('content')

    @include('includes.footer')
    
</body>

</html>
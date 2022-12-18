<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
<!-- Wrapper -->
<div id="wrapper">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.script')
</div>
</body>
</html>

<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
<!-- Preloader Start -->
{{--<div class="preloader">--}}
{{--    <div class="utf-preloader">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Preloader End -->
<!-- Wrapper -->
<div id="wrapper">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</div>
<!-- Wrapper / End -->

@include('layouts.script')
</body>
</html>

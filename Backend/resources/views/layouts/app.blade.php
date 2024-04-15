<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{asset('sb-admin-2.css')}}">
<link rel="stylesheet" href="{{asset('sb-admin-2.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-w9BRHaaHz17obvsI4kX1Kmrtejtw7Zl0p6NTu9b+8V+oG9/vN7W16s0fTJGcFwtC4N1XJBY9kk0B3O0j+bK62g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js" integrity="sha512-mceGQCYWZuRNu27jG8kIrAWT++MIJ1HUEiXy0BTJNkuJEeislqxEZ1KIyfHNMh2YWYAf3oCumvhFV5VYoFfVlA==" crossorigin="anonymous"></script>

<!-- <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Asset Management System') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

</head>
<body>

    

        <main>
            @yield('content')
        </main>
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


<script>
$(document).ready(function() {
    // When plus icon is clicked
    $('.fa-plus').click(function() {
        // Hide plus icon
        $(this).removeClass('d-block').addClass('d-none');
        // Show minus icon
        $(this).siblings('.fa-minus').removeClass('d-none').addClass('d-block');
    });

    // When minus icon is clicked
    $('.fa-minus').click(function() {
        // Hide minus icon
        $(this).removeClass('d-block').addClass('d-none');
        // Show plus icon
        $(this).siblings('.fa-plus').removeClass('d-none').addClass('d-block');
    });
});
</script>

</body>
</html>

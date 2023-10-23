<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.head')

</head>
<body>
    <div class="main-wrapper">

        @include('layouts.main-sidebar')

        <div class="page-wrapper">

            @include('layouts.main-headerbar')

            @yield('content')

            @include('layouts.footer')

        </div>
    </div>

    @include('layouts.footer-scripts')

</body>
</html>

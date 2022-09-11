<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('libraries.styles')
</head>

<body>
    @include('components.nav')

    @yield('content')
    @yield('AddContent')
    @yield('EditContent')
    @yield('DeleteContent')
    @yield('ViewContent')
    @yield('UpdateContent')

    @include('components.footer')



    @include('libraries.scripts')

</body>

</html>

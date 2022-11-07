<!DOCTYPE html>
<html lang="en">
<head>
    @include('headindex')

</head>
<body>

    @include('styleindex')


    @include('account.navigation_top')
    @include('account.message')
    @yield('content')
    @include('account.navigation_bottom')

    @include('scriptindex')

</body>
</html>
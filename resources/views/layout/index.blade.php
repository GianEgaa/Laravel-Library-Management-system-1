<!DOCTYPE html>
<html lang="en">
<head>
    @include('headindex')

</head>
<body>
    @include('styleindex')

    @include('layout.template_navbar')

<div class="wrapper">
    <div class="container">
        <div class="row">

            @include('layout.template_leftbar')

            <div class="span9">

            @include('account.message')
            @yield('content')

            </div>
        </div>
    </div>    
</div>

    @include('layout.template_footer')
    

    @include('scriptindex')

</body>
</html>
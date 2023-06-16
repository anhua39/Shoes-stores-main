<!DOCTYPE html>
<html lang="en">
<head>
   @include('frontend.layouts.head')
</head>
<body>
    @include('frontend.layouts.header')
    @yield('main-content')

    @include('frontend.layouts.hero')   
    @include('frontend.layouts.banner') 
    @include('frontend.layouts.productSection')
   
    @include('frontend.layouts.footer')
</body>
</html>

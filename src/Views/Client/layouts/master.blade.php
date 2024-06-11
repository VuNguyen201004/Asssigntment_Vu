<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    @include('layouts.partials.head')
</head>

<body>
    
    <!-- navigation -->
    @include('layouts.partials.header')
    <!-- /navigation -->
    @include('layouts.partials.navigation')
    <!-- start of banner -->
    <!-- end of banner -->
    @yield('content')
    
    @include('layouts.partials.footer')


    @include('layouts.partials.js')
</body>

</html>

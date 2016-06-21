<!DOCTYPE html>
<html class="no-js">
    <head>
        @include('layouts.partials.meta') 
        <title>HipHop.ee - @yield('title')</title>
        @include('layouts.partials.css') 
        @yield('styles')
        @include('layouts.partials.shim')
    </head>
    <body>
        @include('layouts.partials.navbar')
        @include('errors.list') 
        <div class="body">
        @include('layouts.partials.sidebar')
        <div class="content box">
        @yield('content')
        </div>
        @include('layouts.partials.footer') 
        <div class="back-to-top"><i class="fa fa-arrow-circle-up"></i></div>
        @include('layouts.partials.scripts')
        @yield('scripts')
    </body>
</html>
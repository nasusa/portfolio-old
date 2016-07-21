<!DOCTYPE html>
<html>
    <head>
        @include('layouts.partials.meta') 
        <title>l - @yield('title')</title>
        @include('layouts.partials.css') 
        @yield('styles')
        @include('layouts.partials.shim')
    </head>
    <body>
        @include('layouts.partials.navbar')
        @include('errors.list') 
        @yield('content')
        @include('layouts.partials.footer') 
        <div title="To Top" class="back-to-top">
            <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-angle-up fa-stack-1x fa-inverse"></i>
            </span>
        </div>
        @include('layouts.partials.scripts')
        @yield('scripts')
        @include('cookieConsent::index')
    </body>
</html>
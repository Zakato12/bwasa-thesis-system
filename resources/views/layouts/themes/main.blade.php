<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        <div>
            @include('layouts.partials.navbar')
            @include('layouts.partials.sidebar')
            @include('layouts.partials.header')
            @yield('content')
            @include('layouts.partials.footer')
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
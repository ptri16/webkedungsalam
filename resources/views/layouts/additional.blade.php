<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>

    <body data-spy="scroll" data-target=".fixed-top">
        @include('partials.addHeader') {{-- header --}}

        @yield('content')   {{-- contents --}}

        @include('partials.contact')    {{-- contact --}}
        @include('partials.footer')     {{-- footer --}}
    </body>

</html>



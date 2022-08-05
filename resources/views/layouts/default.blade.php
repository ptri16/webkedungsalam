<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>

    <body data-spy="scroll" data-target=".fixed-top">
        @include('partials.header') {{-- header --}}

        {{-- Content Section --}}
        @yield('content')  

        {{-- Contact & Footer Section --}}
        @include('partials.contact')    
        @include('partials.footer')     
    </body>

</html>



<!DOCTYPE html>

@include('includes.head')

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

        @include('includes.header')

            @yield('content')

        </div>
        <!-- END fh5co-wrapper -->

        @include('includes.footer')

        @include('includes.scripts')
</body>

</html>
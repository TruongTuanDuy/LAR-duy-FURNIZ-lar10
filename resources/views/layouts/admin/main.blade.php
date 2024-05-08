<!doctype html>
<html lang="en">

<head>
    @include('elements.admin.head')
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('elements.admin.sidebar')

        <!-- Navbar -->
        @include('elements.admin.navbar')

        <div class="page-wrapper">
            <!-- Page header -->
            {{-- @include('elements.admin.header') --}}

            <!-- Page body -->
            @yield('content')

            <!-- Page footer -->
            {{-- @include('elements.admin.footer') --}}
        </div>
    </div>

    @include('elements.admin.new-report')

    @include('elements.admin.script')
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    @include('admin.elements.head')
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('admin.elements.sidebar')

        <!-- Navbar -->
        @include('admin.elements.navbar')

        <div class="page-wrapper">
            <!-- Page header -->
            {{-- @include('admin.elements.header') --}}

            <!-- Page body -->
            @yield('content')

            <!-- Page footer -->
            {{-- @include('admin.elements.footer') --}}
        </div>
    </div>

    @include('admin.elements.new-report')

    @include('admin.elements.script')
</body>

</html>

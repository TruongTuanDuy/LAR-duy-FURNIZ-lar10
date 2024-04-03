<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
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
            @include('admin.elements.header')

            <!-- Page body -->
            @yield('content')

            <!-- Page footer -->
            @include('admin.elements.footer')
        </div>
    </div>

    @include('admin.elements.new-report')

    @include('admin.elements.script')
</body>

</html>

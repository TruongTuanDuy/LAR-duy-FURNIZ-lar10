<!DOCTYPE html>
<html lang="en">

<head>
    @include('furniz.elements.head')
</head>

<body class="bg-effect">

    @include('furniz.elements.loader')
    @include('furniz.elements.header')
    @include('furniz.elements.mobile-menu')

    @php
        if ($_SERVER['REQUEST_URI'] == '/dat-hang-thanh-cong') {
            include '../resources/views/furniz/blocks/breadcrumb-order.blade.php';
        } elseif ($_SERVER['REQUEST_URI'] !== '/') {
            include '../resources/views/furniz/blocks/breadcrumb.blade.php';
        }
    @endphp

    @yield('content')

    @php
        if ($_SERVER['REQUEST_URI'] == '/') {
            include '../resources/views/furniz/blocks/newsletter.blade.php';
            include '../resources/views/furniz/blocks/cookie-bar-box.blade.php';
        }
    @endphp

    @include('furniz.elements.footer')

    @php
        if (
            $_SERVER['REQUEST_URI'] == '/' or
            $_SERVER['REQUEST_URI'] == '/san-pham' or
            $_SERVER['REQUEST_URI'] == '/danh-muc-san-pham'
        ) {
            include '../resources/views/furniz/blocks/quick-view-modal-box.blade.php';
        }
    @endphp

    @include('furniz.blocks.location-modal')
    @include('furniz.blocks.deal-modal-box')

    @php
        if ($_SERVER['REQUEST_URI'] == '/san-pham' or $_SERVER['REQUEST_URI'] == '/danh-muc-san-pham') {
            include '../resources/views/furniz/blocks/add-to-cart.blade.php';
        }
    @endphp

    @include('furniz.blocks.tap-to-top')

    @php
        if ($_SERVER['REQUEST_URI'] == '/san-pham') {
            include '../resources/views/furniz/blocks/sticky-cart-box.blade.php';
            include '../resources/views/furniz/blocks/review-modal.blade.php';
        }
    @endphp

    @include('furniz.blocks.bg-overlay')

    @php
        if ($_SERVER['REQUEST_URI'] == '/bang-dieu-khien') {
            include '../resources/views/furniz/blocks/dashboard/add-address.blade.php';
            include '../resources/views/furniz/blocks/dashboard/edit-profile.blade.php';
            include '../resources/views/furniz/blocks/dashboard/edit-card.blade.php';
            include '../resources/views/furniz/blocks/dashboard/remove-profile.blade.php';
        }
    @endphp

    @include('furniz.elements.script')

</body>

</html>

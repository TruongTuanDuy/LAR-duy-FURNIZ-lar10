<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.elements.head')
</head>

<body class="bg-effect">

    @include('frontend.elements.loader')
    @include('frontend.elements.header')
    @include('frontend.elements.mobile-menu')

    @php
        if ($_SERVER['REQUEST_URI'] == '/dat-hang-thanh-cong') {
            include '../resources/views/frontend/blocks/breadcrumb-order.blade.php';
        } elseif ($_SERVER['REQUEST_URI'] !== '/') {
            include '../resources/views/frontend/blocks/breadcrumb.blade.php';
        }
    @endphp

    @yield('content')

    @php
        if ($_SERVER['REQUEST_URI'] == '/') {
            include '../resources/views/frontend/blocks/newsletter.blade.php';
            include '../resources/views/frontend/blocks/cookie-bar-box.blade.php';
        }
    @endphp

    @include('frontend.elements.footer')

    @php
        if (
            $_SERVER['REQUEST_URI'] == '/' or
            $_SERVER['REQUEST_URI'] == '/san-pham' or
            $_SERVER['REQUEST_URI'] == '/danh-muc-san-pham'
        ) {
            include '../resources/views/frontend/blocks/quick-view-modal-box.blade.php';
        }
    @endphp

    @include('frontend.blocks.location-modal')
    @include('frontend.blocks.deal-modal-box')

    @php
        if ($_SERVER['REQUEST_URI'] == '/san-pham' or $_SERVER['REQUEST_URI'] == '/danh-muc-san-pham') {
            include '../resources/views/frontend/blocks/add-to-cart.blade.php';
        }
    @endphp

    @include('frontend.blocks.tap-to-top')

    @php
        if ($_SERVER['REQUEST_URI'] == '/san-pham') {
            include '../resources/views/frontend/blocks/sticky-cart-box.blade.php';
            include '../resources/views/frontend/blocks/review-modal.blade.php';
        }
    @endphp

    @include('frontend.blocks.bg-overlay')

    @php
        if ($_SERVER['REQUEST_URI'] == '/bang-dieu-khien') {
            include '../resources/views/frontend/blocks/dashboard/add-address.blade.php';
            include '../resources/views/frontend/blocks/dashboard/edit-profile.blade.php';
            include '../resources/views/frontend/blocks/dashboard/edit-card.blade.php';
            include '../resources/views/frontend/blocks/dashboard/remove-profile.blade.php';
        }
    @endphp

    @include('frontend.elements.script')

</body>

</html>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
<!-- CSS Libs -->
{{-- <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.3/datatables.min.css" rel="stylesheet"> --}}
<link href="{{ asset('admin/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/libs/fontawesome/css/all.min.css') }}" rel="stylesheet" />
{{-- <link href="{{ asset('admin/assets/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" /> --}}
<link href="{{ asset('admin/assets/libs/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/libs/nestable2/jquery.nestable.min.css') }}" rel="stylesheet" />

{{-- CSS Theme --}}
<link href="{{ asset('admin/assets/css/tabler.min.css') }}" rel="stylesheet" />

{{-- CSS Custom --}}
<link href="{{ asset('admin/css/myStyle.css') }}" rel="stylesheet" />

<style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
        --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
        font-feature-settings: "cv03", "cv04", "cv11";
    }
</style>

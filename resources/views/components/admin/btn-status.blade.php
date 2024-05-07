@php
    $statusObj = Config::get('zvn.template.status.' . $status);
    // $status = config('zvn.template.status.' . $status);
@endphp

<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class="col-6 col-sm-4 col-md-8 col-xl py-3">
        <button data-url="{{ $link }}" data-class="{{ $statusObj['class'] }}"
            class="btn  {{ $statusObj['class'] }} btn-pill status-ajax" style="position:relative">
            {{ $statusObj['name'] }}
        </button>
    </div>
</div>

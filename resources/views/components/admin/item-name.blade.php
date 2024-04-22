@php
    $xhtmlLevel = str_repeat('|---', $level - 1);
@endphp
<div>
    {{ $xhtmlLevel }}
    <span class="badge bg-blue text-blue-fg badge-pill">
        {{ $level }}</span>
    <strong>{{ $name }}</strong>
</div>

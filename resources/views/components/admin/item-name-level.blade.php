<div>
    {{ str_repeat('|---', $level - 1) }}
    <span class="badge bg-blue text-blue-fg badge-pill">
        {{ $level }}</span>
    <strong>{{ $name }}</strong>
</div>

{{-- <div class="dd" id="nestable-category">
    <ol class="dd-list">
        @foreach ($items as $item)
            <li class="dd-item" data-id="{{ $item->id }}">
                <div class="dd-handle">{{ $item->name }}</div>
            </li>
        @endforeach

        <li class="dd-item" data-id="2">
            <div class="dd-handle">Item 2</div>
        </li>
        <li class="dd-item" data-id="3">
            <div class="dd-handle">Item 3</div>
            <ol class="dd-list">
                <li class="dd-item" data-id="4">
                    <div class="dd-handle">Item 4</div>
                </li>
                <li class="dd-item" data-id="5" data-foo="bar">
                    <div class="dd-nodrag">Item 5</div>
                </li>
            </ol>
        </li>
    </ol>
</div> --}}

<div>
    <div>
        @php
        @endphp

        <select class="form-select select2 category" data-url="{{ $link }}" style="position:relative">
            @if (count($selectList) > 0)
                @foreach ($selectList as $key => $item)
                    <option value="{{ $key }}" {{ $key == $selectValue ? 'selected="selected"' : '' }}>
                        {{ $item }}
                    </option>
                @endforeach
            @else
                @dd('trống');
            @endif
        </select>
    </div>

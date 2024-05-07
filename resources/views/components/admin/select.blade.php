<div>
    @php
        // $statusList = Config::get('zvn.template.status');

        // $statusKey = array_keys(Config::get('zvn.template.status'));
        $selectList = array_column(Config::get('zvn.template.status'), 'name');
        // $statusList = array_combine($statusKey, $statusName);
        // dd($statusList);
    @endphp

    <select class="form-select" name="{{ $selectName }}">
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

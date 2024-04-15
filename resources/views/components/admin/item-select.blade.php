<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    @php
    @endphp

    <select class="form-select" name="status">
        <option value="0" {{ $status === 0 ? 'selected' : '' }}>Chưa kích hoạt</option>
        <option value="1" {{ $status === 1 ? 'selected' : '' }}>Đã kích hoạt</option>
    </select>
</div>

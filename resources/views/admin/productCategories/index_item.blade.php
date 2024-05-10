<li class="dd-item" style="display:flex; justify-content:space-between" data-id="{{ $item->id }}">
    <div class="dd-handle"><input class="form-check-input m-0 align-middle" type="checkbox"
            aria-label="Select all invoices"></div>
    <div class="dd-handle">{{ $item->id }}</div>
    <div class="dd-handle"><x-admin.item-name-level :level="$item->depth" :name="$item->name_short" /></div>

    <div class="dd-handle"><x-admin.btn-status :status="$item->status" :link="$item->linkStatus" :id="$item->id" /></div>
    <div class="dd-handle"><x-admin.item-history :by="$item->created_by" :time="$item->created_at" /></div>
    <div class="dd-handle"> <x-admin.item-history :by="$item->updated_by" :time="$item->updated_at" /></div>
    <div class="dd-handle"> <a href="{{ route('admin.productCategories.edit', ['item' => $item]) }}"
            class="btn btn-orange btn-icon">
            <i class="fa-regular fa-pen-to-square"></i></a>
        <form class="d-inline-block form-delete" method="POST"
            action="{{ route('admin.productCategories.destroy', ['item' => $item]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-red btn-icon btn-delete">
                <i class="fa-regular fa-trash-can btn-delete-icon"></i>
            </button>
        </form>
    </div>


    @if (count($item->children) > 0)
        <ol class="dd-list">
            @foreach ($item->children as $itemChild)
                @php
                    $linkStatus = route('admin.productCategories.change-status', [
                        'status' => $item->status,
                        'id' => $item->id,
                    ]);
                @endphp

                @include('admin.productCategories.index_item', [
                    'item' => $itemChild,
                ])
            @endforeach
        </ol>
    @endif
</li>

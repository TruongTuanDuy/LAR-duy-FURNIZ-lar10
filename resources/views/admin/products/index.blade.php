@extends('layouts.admin.main')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Sản phẩm
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                            <span class="d-none d-sm-inline-block">
                                Thêm mới
                            </span>
                            <span class="d-sm-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-0" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable myTable"
                                    id="myDataTable">
                                    <thead>
                                        <tr>
                                            <th class="w-1"><input class="form-check-input m-0 align-middle"
                                                    type="checkbox" aria-label="Select all invoices"></th>
                                            <th class="w-1">ID
                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M6 15l6 -6l6 6" />
                                                </svg>
                                            </th>
                                            <th>Thông tin</th>
                                            <th>Hình ảnh</th>
                                            <th>Danh mục</th>
                                            <th>Sắp xếp</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($items) > 0)
                                            @foreach ($items as $key => $item)
                                                @php
                                                    $id = $item->id;
                                                    $name = $item->name_short;
                                                    $description = $item->description_short;
                                                    $categoryId = $item->category_id;
                                                    $ordering = $item->ordering;
                                                    $status = $item->status;
                                                    $image = $item->getMedia('images')->first()->getUrl('webp');

                                                    $linkOrdering = route('admin.products.change-ordering', [
                                                        'ordering' => 'value_new',
                                                        'id' => $id,
                                                    ]);
                                                    $linkStatus = route('admin.articles.change-status', [
                                                        'status' => $status,
                                                        'id' => $id,
                                                    ]);
                                                    $linkCategory = route('admin.products.change-category', [
                                                        'category' => 'value_new',
                                                        'id' => $id,
                                                    ]);
                                                @endphp

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input m-0 align-middle" type="checkbox"
                                                            aria-label="Select invoice">
                                                    </td>
                                                    <td><span class="text-secondary">{{ $id }}</span></td>
                                                    <td width="25%">
                                                        <p><strong>Tên:</strong> {!! $name !!}</p>
                                                        <p><strong>Mô tả:</strong>
                                                            {!! $description !!}
                                                        </p>
                                                    <td>
                                                        <img src="{{ $image }}" alt="image"
                                                            style="max-width: 100px">
                                                    </td>
                                                    </td>
                                                    <td width="20%">
                                                        <x-admin.select-category-ajax :select-value="$categoryId" :select-list="$categoryList"
                                                            :link="$linkCategory" />
                                                    </td>
                                                    <td width="8%">
                                                        <x-admin.input-ordering-ajax :ordering="$ordering" :link="$linkOrdering"
                                                            :id="$id" />
                                                    </td>
                                                    <td>
                                                        <x-admin.btn-status :status="$status" :link="$linkStatus"
                                                            :id="$id" />
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin.products.edit', ['item' => $item]) }}"
                                                            class="btn btn-orange btn-icon">
                                                            <i class="fa-regular fa-pen-to-square"></i></a>
                                                        <form class="d-inline-block form-delete" method="POST"
                                                            action="{{ route('admin.products.destroy', ['item' => $item]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-red btn-icon btn-delete">
                                                                <i class="fa-regular fa-trash-can btn-delete-icon"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{-- @include('admin.templates.list_empty', ['colspan' => 6]) --}}
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

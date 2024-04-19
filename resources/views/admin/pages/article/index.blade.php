@extends('admin.main')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Bài viết
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
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
                                                    $id = $item['id'];
                                                    $name = $item['name'];
                                                    $description = $item['description'];
                                                    $categoryId = $item['category_article_id'];
                                                    $ordering = $item['ordering'];
                                                    $status = $item['status'];
                                                    $picture = $item['id'];
                                                    $lengthName = 30;
                                                    if (strlen($name) > $lengthName) {
                                                        $name = wordwrap($name, $lengthName);
                                                        $name = substr($name, 0, strpos($name, "\n")) . '...';
                                                    }
                                                    $lengthDescription = 40;
                                                    if (strlen($description) > $lengthDescription) {
                                                        $description = wordwrap($description, $lengthDescription);
                                                        $description =
                                                            substr($description, 0, strpos($description, "\n")) . '...';
                                                    }

                                                @endphp

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input m-0 align-middle" type="checkbox"
                                                            aria-label="Select invoice">
                                                    </td>
                                                    <td><span class="text-secondary">{{ $id }}</span></td>
                                                    <td width="15%">
                                                        <p><strong>Tên:</strong> {!! $name !!}</p>
                                                        <p><strong>Mô tả:</strong> {!! $description !!}</p>
                                                    <td>
                                                        <span class="flag flag-xs flag-country-us me-2"></span>
                                                    </td>
                                                    </td>
                                                    <td>{{ $categoryId }}
                                                    </td>
                                                    <td width="8%">
                                                        <x-admin.input-ordering :ordering="$ordering" />
                                                    </td>
                                                    <td>
                                                        <x-admin.btn-status :status="$status" />
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin.articles.edit', ['item' => $item]) }}"
                                                            class="btn btn-orange btn-icon">
                                                            <i class="fa-regular fa-pen-to-square"></i></a>
                                                        <form class="d-inline-block form-delete" method="POST"
                                                            action="{{ route('admin.articles.destroy', ['item' => $item]) }}">
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
                                            @dd('trống');
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

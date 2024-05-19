@extends('layouts.admin.main')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Danh mục sản phẩm
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.productCategories.create') }}" class="btn btn-primary">
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
                        <div class="card-body border-bottom py-3" style="width:2000px">

                            <div class="dd">
                                <ol class="dd-list">
                                    <li class="dd-item" style="display:flex; justify-content:space-between">
                                        <div class="dd-handle"><input class="form-check-input m-0 align-middle"
                                                type="checkbox" aria-label="Select all invoices"></div>
                                        <div class="dd-handle">ID</div>
                                        <div class="dd-handle">Tên</div>
                                        <div class="dd-handle">Trạng thái</div>
                                        <div class="dd-handle">Tạo mới</div>
                                        <div class="dd-handle">Chỉnh sửa</div>
                                        <div class="dd-handle">Hành động</div>
                                    </li>
                                </ol>
                            </div>
                            @if (count($items) > 0)
                                <div class="dd" id="nestable-category"
                                    data-url="{{ route('admin.productCategories.updateTree') }}">
                                    <ol class="dd-list">
                                        @foreach ($items as $key => $item)
                                            @php

                                                $linkStatus = route('admin.productCategories.change-status', [
                                                    'status' => $item->status,
                                                    'id' => $item->id,
                                                ]);

                                            @endphp
                                            @include('admin.productCategories.index_item', [
                                                'item' => $item,
                                            ])
                                        @endforeach
                                    </ol>
                                </div>
                            @else
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.main')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Bộ sưu tập
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.collections.index') }}" class="btn btn-primary">
                            <span class="d-none d-sm-inline-block">
                                Quay về
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

    @php
        $ordering = 10;
        $status = 1;
    @endphp

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12">
                    <form class="card" method="POST" action="{{ route('admin.collections.store') }}">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label required">Name</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="name">
                                    <small class="form-hint">Lời nhắc linh tinh.</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Status</label>
                                <div class="col">
                                    {{-- <select class="form-select">
                                        <option value="1">One</option>
                                        <option value="2" selected="selected">Two</option>
                                        <option value="3">Three</option>
                                    </select> --}}
                                    <x-admin.item-select :status="$status" />
                                    <small class="form-hint">Lời nhắc linh tinh.</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Ordering</label>
                                <div class="col">
                                    {{-- <input type="number" class="form-control" value="{{ $ordering }}"> --}}
                                    <x-admin.item-ordering :ordering="$ordering" />
                                    <small class="form-hint">Lời nhắc linh tinh.</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Thumb</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <button class="btn" type="button">Choose File</button>
                                        <input type="text" class="form-control" placeholder="No file chosen">
                                    </div>
                                    <small class="form-hint">Chọn tệp hình ảnh.</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-start">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

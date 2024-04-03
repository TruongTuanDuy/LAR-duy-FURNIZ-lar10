@extends('admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-secondary">
                                    Hiển thị
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8"
                                            size="3" aria-label="Invoices count">
                                    </div>
                                    mục
                                </div>
                                <div class="ms-auto text-secondary">
                                    Tìm kiếm:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select all invoices"></th>
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
                                        <th>Tên</th>
                                        <th>Hình ảnh</th>
                                        <th>Sắp xếp</th>
                                        <th>Trạng thái</th>
                                        <th>Tạo mới</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-secondary">001401</span></td>
                                        <td width="25%">Design Works
                                        </td>
                                        <td>
                                            <span class="flag flag-xs flag-country-us me-2"></span>
                                        </td>
                                        <td width="8%">
                                            <input type="number" class="form-control" name="example-text-input">
                                        </td>
                                        <td>
                                            <div class="col-6 col-sm-4 col-md-8 col-xl py-3">
                                                <a href="#" class="btn btn-info btn-pill w-105">
                                                    Chưa kích hoạt
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <p><i class="fa-solid fa-user"></i> admin</p>
                                            <p><i class="fa-solid fa-clock"></i> 04/05/2019</p>
                                        </td>
                                        <td>
                                            <p><i class="fa-solid fa-user"></i> admin</p>
                                            <p><i class="fa-solid fa-clock"></i> 04/05/2019</p>
                                        </td>
                                        <td class="text-end">
                                            <div class="row g-2 align-items-center">
                                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                                    <a href="#" class="btn btn-orange w-100 btn-icon">
                                                        <i class="fa-regular fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                                    <a href="#" class="btn btn-red w-100 btn-icon">
                                                        <i class="fa-regular fa-trash-can"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of
                                <span>16</span> entries
                            </p>
                            <ul class="pagination m-0 ms-auto">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M15 6l-6 6l6 6" />
                                        </svg>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 6l6 6l-6 6" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

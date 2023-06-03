@extends('layouts.primary-layout')
@section('title', 'list mahasiswa')
@section('content')

    <div id="kt_content_container" class="container-xxl">
        <!--begin::Table-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Data Mahasiswa</h3>
                    <div class="fs-6 text-gray-400">Total : -</div>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
                    <div class="card-toolbar me-6 my-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-trigger="hover" title="Click to add Mahasiswa">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_new_address">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                        rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add Mahasiswa
                        </a>
                    </div>
                    <!--begin::Select-->
                    <div class="me-6 my-1">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true"
                            class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All time</option>
                            <option value="thisyear">This year</option>
                            <option value="thismonth">This month</option>
                            <option value="lastmonth">Last month</option>
                            <option value="last90days">Last 90 days</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Select-->
                    <div class="me-4 my-1">
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true"
                            class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All Orders</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Transit">In Transit</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-3 position-absolute ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" id="kt_filter_search"
                            class="form-control form-control-solid form-select-sm w-150px ps-9"
                            placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table"
                        class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                        <!--begin::Head-->
                        <thead class="fs-7 text-gray-400 text-uppercase">
                            <tr class="fw-bolder text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                            data-kt-check-target=".widget-13-check" />
                                    </div>
                                </th>
                                <th class="min-w-100px">NIM</th>
                                <th class="min-w-125px">Nama</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">ALamat</th>
                                <th class="min-w-100px">Semester</th>
                                <th class="min-w-125px">No Tlfn</th>
                                <th class="min-w-125px">Tempat Lahir</th>
                                <th class="min-w-100px">JK</th>
                                <th class="min-w-100px">Thn Masuk</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-240px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Head-->
                        <!--begin::Body-->
                        <tbody class="fs-6">
                            @foreach ($students as $student)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    {{-- nim --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary fs-6">{{ $student->nim }}</a>
                                    </td>
                                    {{-- nama --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->name }}
                                        </a>
                                    </td>
                                    {{-- email --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->email }}</a>
                                    </td>
                                    {{-- alamat --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->alamat }}</a>
                                    </td>
                                    {{-- semester --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->semester }}</a>
                                    </td>
                                    {{-- No Hp --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->no_hp }}</a>
                                    </td>
                                    {{-- Tempat lahir --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->tempat_lahir }}</a>
                                    </td>
                                    {{-- JK --}}
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">
                                            @if ($condition = $student->jk == 1)
                                                laki-laki
                                            @else
                                                Perempuan
                                            @endif
                                        </a>
                                    </td>
                                    {{-- thn masuk --}}
                                    <td>
                                        <a href="#"
                                            class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $student->tahun_masuk }}</a>
                                    </td>
                                    {{-- status --}}
                                    <td>
                                        @if ($condisi = $student->status == 'aktif')
                                            <span class="badge badge-light-success">Aktif</span>
                                        @elseif ($condisi = $student->status == 'cuti')
                                            <span class="badge badge-light-warning">Cuti</span>
                                        @else
                                            <span class="badge badge-light-danger">Nonaktif</span>
                                        @endif
                                    </td>
                                    {{-- button aksi --}}
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-1">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_edit_mahasiswa">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <form action="/mahasiswa/{{ $student->nim }}" method="post"
                                                onclick="return confirm('Yakin Broo...')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                fill="black" />
                                                            <path opacity="0.5"
                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                fill="black" />
                                                            <path opacity="0.5"
                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>

    <!--begin::Modal - Add Mahasiswa-->
    @include('pages.mahasiswa.create')
    <!--end::Modal - Add Mahasiswa-->
    <!--begin::Modal - Edit Mahasiswa-->
    @include('pages.mahasiswa.edit')
    <!--end::Modal - Edit Mahasiswa-->

    @push('modal-js')
        @if ($errors->any())
            <script>
                var myModal = new bootstrap.Modal(document.querySelector('.modal'), {
                    keyboard: false
                })
                myModal.show()
                $('.modal').on('hidden.bs.modal', function() {
                    window.location.reload();
                });
                // refresh page
            </script>
        @endif
    @endpush
@endsection

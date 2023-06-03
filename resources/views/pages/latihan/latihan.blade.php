@extends('layouts.primary-layout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Table-->
        <div class="card card-flush">


            <a href="{{ route('latihan.create') }}"><button class="btn btn-success">Tambah</button></a>

            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Project Spendings</h3>
                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
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
                            <tr>
                                <th class="min-w-250px">No</th>
                                <th class="min-w-150px">Nama</th>
                                <th class="min-w-90px">Jenis Kelamin</th>
                                <th class="min-w-90px">alamat</th>
                                <th class="min-w-50px text-end">Aksi</th>
                            </tr>
                        </thead>
                        <!--end::Head-->
                        <!--begin::Body-->
                        <tbody class="fs-6">
                            @foreach ($all as $item)
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href=""
                                                    class="fs-6 text-gray-800 text-hover-primary">{{ $item->id }}</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        @if ($condition = $item->jenis_kelamin == 'L')
                                            Laki-laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                    <td>{{ $item->alamat }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('latihan.edit', $item->id) }}"
                                            class="btn btn-light btn-sm">Edit</a>
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
@endsection

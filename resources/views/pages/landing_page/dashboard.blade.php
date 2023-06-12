@extends('layouts.primary-layout')
@section('title', 'dashboard')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <i class="ri-shield-user-fill" style="font-size: 2.5rem"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">Admin</div>
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">1</div>
                        {{-- <div class="fw-bold text-gray-400">Lands, Houses, Ranchos, Farms</div> --}}
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <i class="ri-graduation-cap-fill text-white" style="font-size: 2.5rem"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Student</div>
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ $total_data }}</div>
                        {{-- <div class="fw-bold text-white">Flats, Shared Rooms, Duplex</div> --}}
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <i class="ri-presentation-fill text-white" style="font-size: 2.5rem"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Teacher</div>
                        <div class="fw-bold text-gray-100">-</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Stats-->
        <div class="row g-6 g-xl-9">
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bolder">{{ $total_data }}</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">student status information</div>
                        <!--end::Heading-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                <canvas id="kt_project_list_chart"></canvas>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto fw-bolder text-gray-700">{{ $aktif }}</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-400">Non-Active</div>
                                    <div class="ms-auto fw-bolder text-gray-700">{{ $nonaktif }}</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center">
                                    <div class="bullet bg-warning me-3"></div>
                                    <div class="text-gray-400">Cuti</div>
                                    <div class="ms-auto fw-bolder text-gray-700">{{ $cuti }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Budget-->
                <div class="card h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bolder">$3,290.00</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Project Finance</div>
                        <div class="fs-6 d-flex justify-content-between mb-4">
                            <div class="fw-bold">Avg. Project Budget</div>
                            <div class="d-flex fw-bolder">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->$6,570
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between my-4">
                            <div class="fw-bold">Lowest Project Check</div>
                            <div class="d-flex fw-bolder">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr006.svg-->
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M13.4 14.8L5.3 6.69999C4.9 6.29999 4.9 5.7 5.3 5.3C5.7 4.9 6.29999 4.9 6.69999 5.3L14.8 13.4L13.4 14.8Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M19.8 8.5L8.5 19.8H18.8C19.4 19.8 19.8 19.4 19.8 18.8V8.5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->$408
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between mt-4">
                            <div class="fw-bold">Ambassador Page</div>
                            <div class="d-flex fw-bolder">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->$920
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Budget-->
            </div>
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Clients-->
                <div class="card h-100">
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bolder">49</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Metronic Clients</div>
                        <!--end::Heading-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover mb-9">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/150-12.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/150-13.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Francis Mitcham">
                                <img alt="Pic" src="assets/media/avatars/150-5.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/150-3.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-info text-inverse-info fw-bolder">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                        <!--begin::Actions-->
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">All Clients</a>
                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_users_search">Invite New</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Clients-->
            </div>
        </div>
        <!--end::Stats-->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript"></script>
    <script>
        "use strict";
        var KTProjectList = {
            init: function() {
                ! function() {
                    var t = document.getElementById("kt_project_list_chart");
                    // json_encode() adalah fungsi bawaan laravel untuk mengubah data array menjadi json
                    var status = {!! json_encode($status_label) !!};
                    var statusTotal = {!! json_encode($status_total) !!};

                    if (t) {
                        var e = t.getContext("2d");
                        new Chart(e, {
                            type: "doughnut",
                            data: {
                                datasets: [{
                                    // total status
                                    data: statusTotal,
                                    backgroundColor: ["#34B625", "#BB0C0F", "#FFD966"]
                                }],
                                // total label
                                labels: status
                            },
                            options: {
                                chart: {
                                    fontFamily: "inherit"
                                },
                                cutout: "75%",
                                cutoutPercentage: 65,
                                responsive: !0,
                                maintainAspectRatio: !1,
                                title: {
                                    display: !1
                                },
                                animation: {
                                    animateScale: !0,
                                    animateRotate: !0
                                },
                                tooltips: {
                                    enabled: !0,
                                    intersect: !1,
                                    mode: "nearest",
                                    bodySpacing: 5,
                                    yPadding: 10,
                                    xPadding: 10,
                                    caretPadding: 0,
                                    displayColors: !1,
                                    backgroundColor: "#20D489",
                                    titleFontColor: "#ffffff",
                                    cornerRadius: 4,
                                    footerSpacing: 0,
                                    titleSpacing: 0
                                },
                                plugins: {
                                    legend: {
                                        display: !1
                                    }
                                }
                            }
                        })
                    }
                }()
            }
        };
        KTUtil.onDOMContentLoaded((function() {
            KTProjectList.init()
        }));
    </script>
@endpush

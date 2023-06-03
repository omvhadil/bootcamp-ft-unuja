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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">Shopping Cart</div>
                        <div class="fw-bold text-gray-400">Lands, Houses, Ranchos, Farms</div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Appartments</div>
                        <div class="fw-bold text-white">Flats, Shared Rooms, Duplex</div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5"
                                    fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                    rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5"
                                    fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Sales Stats</div>
                        <div class="fw-bold text-gray-100">50% Increased for FY20</div>
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
                        <div class="fs-2hx fw-bolder">237</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Current Projects</div>
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
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto fw-bolder text-gray-700">30</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Completed</div>
                                    <div class="ms-auto fw-bolder text-gray-700">45</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-400">Yet to start</div>
                                    <div class="ms-auto fw-bolder text-gray-700">25</div>
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
                                        <path opacity="0.3"
                                            d="M19.8 8.5L8.5 19.8H18.8C19.4 19.8 19.8 19.4 19.8 18.8V8.5Z"
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

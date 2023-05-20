@extends('layouts.main')
@section('title', 'list dosen')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Tables Widget 13-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">List Dosen</span>
                    {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> --}}
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Click to add a user">
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
                        <!--end::Svg Icon-->Add Dosen
                    </a>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Modal - add Dosen-->
            <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_new_address_form">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_new_address_header">
                                <h2>Add New Dosen</h2>
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    {{-- nim --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="required fs-5 fw-bold mb-2">NIM</label>
                                        <input class="form-control form-control-solid" placeholder="" name="address2" />
                                    </div>
                                    {{-- fullame --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="required fs-5 fw-bold mb-2">Full Name</label>
                                        <input class="form-control form-control-solid" placeholder="" name="city" />
                                    </div>
                                    {{-- jurusan --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Jurusan</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="silahkan pilih jurusan yang kamu sukai"></i>
                                        </label>
                                        <select name="country" data-control="select2"
                                            data-dropdown-parent="#kt_modal_new_address"
                                            data-placeholder="Select a Country..." class="form-select form-select-solid">
                                            <option value="">Pilih Jurusan...</option>
                                            <option value="IF">Tehnik Informatika</option>
                                            <option value="TE">Tehnik Elektro</option>
                                            <option value="TI">Tehnik Informasi</option>
                                        </select>
                                    </div>
                                    {{-- semester --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Semester</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Masukkan Semester"></i>
                                        </label>
                                        <select name="country" data-control="select2"
                                            data-dropdown-parent="#kt_modal_new_address"
                                            data-placeholder="Select a Country..." class="form-select form-select-solid">
                                            <option value="">Pilih Semester...</option>
                                            <option value="1">1 </option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    {{-- tgl lahir --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="required fs-5 fw-bold mb-2">Tanggal Lahir</label>
                                        <input class="form-control form-control-solid" placeholder="" name="address2" />
                                    </div>
                                    {{-- jenis kelamin --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Jenis Kelamin</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="pilih jenis kelamin"></i>
                                        </label>
                                        <select name="country" data-control="select2"
                                            data-dropdown-parent="#kt_modal_new_address"
                                            data-placeholder="Select a Country..." class="form-select form-select-solid">
                                            <option value="">Pilih Jenis Kelamin...</option>
                                            <option value="laki-laki">Laki-laki </option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    {{-- email --}}
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <label class="required fs-5 fw-bold mb-2">Email</label>
                                        <input class="form-control form-control-solid" placeholder="" name="address2" />
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_new_address_cancel"
                                    class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - add Dosen-->

            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                    </div>
                                </th>
                                <th class="min-w-120px">NIM</th>
                                <th class="min-w-280px">Nama</th>
                                <th class="min-w-120px">Jurusan</th>
                                <th class="min-w-220px">ALamat</th>
                                <th class="min-w-120px">Total</th>
                                <th class="min-w-220px">No Tlfn</th>
                                <th class="min-w-120px">Tgl Lahir</th>
                                <th class="min-w-180px">JK</th>
                                <th class="min-w-120px">Email</th>
                                <th class="min-w-120px">Thn Masuk</th>
                                <th class="min-w-120px">Status</th>
                                <th class="min-w-240px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary fs-6">1921400053</a>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">Fadilatur
                                        Rohman</a>
                                </td>
                                <td>
                                    <a href="#"
                                        class="text-dark text-hover-primary d-block mb-1 fs-6">Informatika</a>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">Alassumur
                                        Kulon</a>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">8</a>
                                </td>
                                <td>
                                    <a href="#"
                                        class="text-dark text-hover-primary d-block mb-1 fs-6">0821-4699-9031</a>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">10/5/2001</a>
                                </td>
                                <td>
                                    <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">Laki-laki</a>
                                </td>
                                <td>
                                    <a href="#"
                                        class="text-dark text-hover-primary d-block mb-1 fs-6">fadil.yoi@gmail.com</a>
                                </td>
                                <td>
                                    <a href="#"
                                        class="text-dark text-hover-primary d-block mb-1 fs-6">10/11/2019</a>
                                </td>
                                <td>
                                    <span class="badge badge-light-success">Active</span>
                                </td>
                                <td class="text-end">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
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
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 13-->
    </div>
@endsection

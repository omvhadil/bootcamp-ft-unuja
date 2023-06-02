<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('mahasiswa.create') }}" method="post" id="kt_modal_new_address_form">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <h2>Add New Mahasiswa</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                            <input
                                class="form-control form-control-solid @error('nim') is-invalid border-1 border-danger @enderror"
                                placeholder="NIM" name="nim" value="{{ old('nim') }}" />
                            @error('nim')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- fullame --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">Full Name</label>
                            <input class="form-control form-control-solid" placeholder="Full Name" name="name"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- email --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">Email</label>
                            <input class="form-control form-control-solid" placeholder="Email" name="email"
                                value="{{ old('email') }}" />
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- alamat --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">Alamat</label>
                            <input class="form-control form-control-solid" placeholder="Alamat" name="alamat"
                                value="{{ old('alamat') }}" />
                            @error('alamat')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- semester --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Semester</span>
                            </label>
                            <select data-control="select2" data-dropdown-parent="#kt_modal_new_address"
                                data-placeholder="Pilih Semester..." name="semester"
                                class="form-select form-select-solid" value="{{ old('semester') }}" />
                            <option disabled selected>Pilih Semester...</option>
                            @foreach ($semester as $item)
                                <option value="{{ $item }}">{{ $item }} </option>
                            @endforeach
                            </select>
                            @error('semester')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- no_Hp --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">No Hp</label>
                            <input class="form-control form-control-solid" placeholder="No Hp" type="text"
                                name="no_hp" value="{{ old('no_hp') }}" />
                            @error('no_hp')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- tempat lahir --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">Tempat Lahir</label>
                            <input class="form-control form-control-solid" placeholder="Tempat Lahir" type="text"
                                name="tempat_lahir" value="{{ old('tempat_lahir') }}" />
                            @error('tempat_lahir')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- jenis kelamin --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Jenis Kelamin</span>
                            </label>
                            <select data-control="select2" data-dropdown-parent="#kt_modal_new_address"
                                data-placeholder="Pilih Jenis Kelamin..." class="form-select form-select-solid"
                                name="jk" value="{{ old('jk') }}" />
                            <option disabled selected>Pilih Jenis Kelamin...</option>
                            <option value="1">Laki-laki </option>
                            <option value="0">Perempuan</option>
                            </select>
                            @error('jk')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Tahun Masuk --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Tahun Masuk</span>
                            </label>
                            <select data-control="select2" data-dropdown-parent="#kt_modal_new_address"
                                data-placeholder="Pilih Jenis Kelamin..." class="form-select form-select-solid"
                                name="tahun_masuk" value="{{ old('tahun_masuk') }}" />
                            <option disabled selected>Pilih Jenis Kelamin...</option>
                            @foreach ($years as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                            </select>
                            @error('tahun_masuk')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- jurusan --}}
                        {{-- <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Jurusan</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="silahkan pilih jurusan yang kamu sukai"></i>
                            </label>
                            <select name="country" data-control="select2"
                                data-dropdown-parent="#kt_modal_new_address" data-placeholder="Pilih Jurusan..."
                                class="form-select form-select-solid">
                                <option value="">Pilih Jurusan...</option>
                                <option value="IF">Tehnik Informatika</option>
                                <option value="TE">Tehnik Elektro</option>
                                <option value="TI">Tehnik Informasi</option>
                            </select>
                        </div> --}}
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

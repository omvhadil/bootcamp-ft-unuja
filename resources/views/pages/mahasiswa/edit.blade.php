<div class="modal fade" id="kt_modal_edit_mahasiswa{{ $student->nim }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('mahasiswa.update', $student->nim) }}" method="post"
                id="kt_modal_new_address_form">
                @csrf
                @method('put')
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <h2>Edit Mahasiswa</h2>
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
                                placeholder="NIM" name="nim" value="{{ $student->nim }}" />
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
                                value="{{ $student->name }}" />
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
                                value="{{ $student->email }}" />
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
                                value="{{ $student->alamat }}" />
                            @error('alamat')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- no_Hp --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">No Hp</label>
                            <input class="form-control form-control-solid" placeholder="No Hp" type="text"
                                name="no_hp" value="{{ $student->no_hp }}" />
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
                                name="tempat_lahir" value="{{ $student->tempat_lahir }}" />
                            @error('tempat_lahir')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- jurusan --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Jurusan</span>
                            </label>
                            <select name="major_id" data-control="select2" data-placeholder="Pilih Jurusan..."
                                class="form-select form-select-solid">
                                <option value="">Jurusan... </option>
                                @foreach ($majors as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('major_id', $student->major_id === $item->id) ? 'selected' : '' }}>
                                        {{ $item->major_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- semester --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Semester</span>
                            </label>
                            <select name="semester" data-control="select2" data-placeholder="Pilih Semester..."
                                class="form-select form-select-solid" />
                            <option value="">Semester... </option>
                            @foreach ($semester as $item)
                                <option value="{{ $item }}"
                                    {{ old('semester', $student->semester === $item ? 'selected' : '') }}>
                                    {{ $item }} </option>
                            @endforeach
                            </select>
                            @error('semester')
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
                            <select name="jk" data-control="select2" data-placeholder="Pilih Jenis Kelamin..."
                                class="form-select form-select-solid" />
                            <option value="">Jenis Kelamin... </option>
                            <option value="1" {{ old('jk', $student->jk === 1 ? 'selected' : '') }}>Laki-laki
                            </option>
                            <option value="0" {{ old('jk', $student->jk === 0 ? 'selected' : '') }}>Perempuan
                            </option>
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
                            <select data-control="select2"
                                data-dropdown-parent="#kt_modal_edit_mahasiswa{{ $student->nim }}"
                                data-placeholder="Pilih Semester..." name="tahun_masuk"
                                class="form-select form-select-solid" />
                            <option disabled selected>Pilih Semester...</option>
                            @foreach ($years as $item)
                                <option value="{{ $item }}"
                                    {{ $student->tahun_masuk == $item ? 'selected' : '' }}>{{ $item }}
                                </option>
                            @endforeach
                            </select>
                            @error('semester')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Status --}}
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Status</span>
                            </label>
                            <select name="status" data-control="select2" data-placeholder="Jurusan... "
                                class="form-select form-select-solid" />
                            <option value="aktif"
                                {{ old('status', $student->status === 'aktif' ? 'selected' : '') }}>
                                Aktif</option>
                            <option value="nonaktif"
                                {{ old('status', $student->status === 'nonaktif' ? 'selected' : '') }}>Nonaktif
                            </option>
                            <option value="cuti" {{ old('status', $student->status === 'cuti' ? 'selected' : '') }}>
                                Cuti</option>
                            </select>
                            @error('status')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
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

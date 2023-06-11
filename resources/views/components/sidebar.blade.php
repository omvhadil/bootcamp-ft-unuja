<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        <!--begin::User-->
        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-50px">
                <img src="assets/media/avatars/150-26.jpg" alt="" />
            </div>
            <!--end::Symbol-->
            <!--begin::Wrapper-->
            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <!--begin::Section-->
                <div class="d-flex">
                    <!--begin::Info-->
                    <div class="flex-grow-1 me-2">
                        <!--begin::Username-->
                        <a href="#"
                            class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->fullname }}</a>
                        <!--end::Username-->
                        <!--begin::Description-->
                        {{-- <span class="text-gray-600 fw-bold d-block fs-8 mb-1">Laravel Dev</span> --}}
                        <!--end::Description-->
                        <!--begin::Label-->
                        <div class="d-flex align-items-center text-success fs-9">
                            <span class="bullet bullet-dot bg-success me-1"></span>online
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::User-->
        <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                {{-- begin::Title Dashboard --}}
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                    </div>
                </div>
                {{-- end::Title Dashboard --}}
                {{-- begin::Landing page --}}
                <div class="menu-item">
                    <a class="menu-link {{ Request::url() == url('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="ri-dashboard-fill" style="font-size: 1.3rem"></i>
                            </span>
                        </span>
                        <span class="menu-title">Landing Page</span>
                    </a>
                </div>
                {{-- end::Landing Page --}}
                {{-- begin::Data Dosen --}}
                <div class="menu-item">
                    <a class="menu-link {{ Request::url() == url('dosen') ? 'active' : '' }}"
                        href="{{ route('dosen') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="ri-presentation-fill" style="font-size: 1.3rem"></i>
                            </span>
                        </span>
                        <span class="menu-title">Teacher Data</span>
                    </a>
                </div>
                {{-- end::Data Dosen --}}
                {{-- begin::Data Mahasiswa --}}
                <div class="menu-item">
                    <a class="menu-link {{ Request::url() == url('mahasiswa') ? 'active' : '' }}"
                        href="{{ route('mahasiswa') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="ri-graduation-cap-fill" style="font-size: 1.3rem;"></i>
                            </span>
                        </span>
                        <span class="menu-title">Student Data</span>
                    </a>
                </div>
                {{-- end::Data Mahasiswa --}}
                {{-- begin::Title Crafted --}}
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">crafted</span>
                    </div>
                </div>
                {{-- end::Title Crafted --}}
                {{-- begin::CRUD --}}
                {{-- <div class="menu-item">
                    <a class="menu-link {{ Request::url() == url('latihan') ? 'active' : '' }}"
                        href="{{ route('latihan.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="ri-archive-fill" style="font-size: 1.3rem;"></i>
                            </span>
                        </span>
                        <span class="menu-title">CRUD</span>
                    </a>
                </div> --}}
                {{-- end::CRUD --}}
                {{-- begin::Profile --}}
                <div class="menu-item">
                    <a class="menu-link {{ Request::url() == url('profile') ? 'active' : '' }}"
                        href="{{ route('profile') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="ri-shield-user-fill" style="font-size: 1.3rem"></i>
                            </span>
                        </span>
                        <span class="menu-title">Profile</span>
                    </a>
                </div>
                {{-- end::Profile --}}
                {{-- begin::logout --}}
                <div class="menu-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="menu-link bg-transparent border-0">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <i class="ri-logout-box-fill" style="font-size: 1.3rem"></i>
                                </span>
                            </span>
                            <span class="menu-title">Logout</span>
                        </button>
                    </form>
                </div>
                {{-- end::Logout --}}
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>

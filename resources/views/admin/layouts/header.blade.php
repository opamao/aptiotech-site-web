<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}" style="background: #000C33">
    <div class="app-container container-fluid d-flex align-items-center justify-content-between "
        id="kt_app_header_container">
        <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <a href="{{ asset('back') }}/index.html">
                <img alt="Logo" src="{{ asset('back') }}/assets/media/logos/demo3-dark.svg"
                    class="h-35px theme-light-show" />
                <img alt="Logo" src="{{ asset('back') }}/assets/media/logos/demo3-dark.svg"
                    class="h-35px theme-dark-show" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
                class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ $nomPage }}
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        {{ $descriPage }} </li>
                </ul>
            </div>

            <div class="d-flex">
                <div class="app-navbar flex-shrink-0">
                    <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <div class="d-none d-md-block text-end me-4">
                            <a href='#' class="fs-6 fw-semibold text-white text-hover-primary">Théodore
                                YAPI</a>
                            {{-- <span class="fs-7 fw-semibold text-gray-600 d-block">Ad Expert</span> --}}
                        </div>
                        <div class="cursor-pointer symbol " data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img class="h-40px w-40px w-lg-45px h-lg-45px"
                                src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg"
                                alt="user" />
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            Théodore YAPI
                                        </div>

                                        <a href="#"
                                            class="fw-semibold text-muted text-hover-primary fs-7">
                                            theodoreyapi@gmail.com </a>
                                    </div>
                                </div>
                            </div>

                            <div class="separator my-2"></div>

                            <div class="menu-item px-5">
                                <a href="#" class="menu-link px-5">
                                    Mon Profil
                                </a>
                            </div>

                            <div class="separator my-2"></div>

                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">
                                        Mode

                                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                            <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span></i>
                                            <i class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span><span
                                                        class="path7"></span><span class="path8"></span><span
                                                        class="path9"></span><span class="path10"></span></i> </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i> </span>
                                            <span class="menu-title">
                                                System
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item px-5">
                                <a href="{{ url('aptiotech') }}" class="menu-link px-5" style="color: red">
                                    Se déconnecter
                                </a>
                            </div>

                        </div>
                    </div>
                    @stack('btnadd')
                </div>
            </div>
        </div>
    </div>
</div>

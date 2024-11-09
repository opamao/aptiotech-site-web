<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: KeenProduct Version: 3.0.8
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="logistics.html" />
    <link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!--begin::Header-->
            <div id="kt_app_header" class="app-header " data-kt-sticky="true"
                data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: false, lg: '300px'}">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-center justify-content-between "
                    id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>

                        <!--begin::Logo image-->
                        <a href="../index.html">
                            <img alt="Logo" src="../assets/media/logos/demo3-dark.svg"
                                class="h-35px theme-light-show" />
                            <img alt="Logo" src="../assets/media/logos/demo3-dark.svg"
                                class="h-35px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Sidebar toggle-->

                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">


                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
                            class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                            <!--begin::Title-->
                            <h1
                                class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                                Logistics
                            </h1>
                            <!--end::Title-->


                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../index.html" class="text-muted text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    Dashboards </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Wrapper-->
                        <div class="d-flex">

                            <!--begin::Navbar-->
                            <div class="app-navbar flex-shrink-0">
                                <!--begin::User menu-->
                                <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Username-->
                                    <div class="d-none d-md-block text-end me-4">
                                        <a href='logistics.html#'
                                            class="fs-6 fw-semibold text-white text-hover-primary">Paul Melone</a>
                                        <span class="fs-7 fw-semibold text-gray-600 d-block">Ad Expert</span>
                                    </div>
                                    <!--end::Username-->

                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol "
                                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <img class="h-40px w-40px w-lg-45px h-lg-45px"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg"
                                            alt="user" />
                                    </div>

                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo"
                                                        src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bold d-flex align-items-center fs-5">
                                                        Max Smith <span
                                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                    </div>

                                                    <a href="logistics.html#"
                                                        class="fw-semibold text-muted text-hover-primary fs-7">
                                                        max@kt.com </a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../account/overview.html" class="menu-link px-5">
                                                My Profile
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../apps/projects/list.html" class="menu-link px-5">
                                                <span class="menu-text">My Projects</span>
                                                <span class="menu-badge">
                                                    <span
                                                        class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                            <a href="logistics.html#" class="menu-link px-5">
                                                <span class="menu-title">My Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/referrals.html" class="menu-link px-5">
                                                        Referrals
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/billing.html" class="menu-link px-5">
                                                        Billing
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/statements.html" class="menu-link px-5">
                                                        Payments
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/statements.html"
                                                        class="menu-link d-flex flex-stack px-5">
                                                        Statements

                                                        <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                            title="View your statements">
                                                            <i class="ki-duotone ki-information-5 fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i> </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications" />
                                                            <span class="form-check-label text-muted fs-7">
                                                                Notifications
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../account/statements.html" class="menu-link px-5">
                                                My Statements
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                            <a href="logistics.html#" class="menu-link px-5">
                                                <span class="menu-title position-relative">
                                                    Mode

                                                    <span
                                                        class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                        <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span><span
                                                                class="path6"></span><span
                                                                class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span><span class="path10"></span></i>
                                                        <i class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </span>
                                            </a>

                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-0">
                                                    <a href="logistics.html#" class="menu-link px-3 py-2"
                                                        data-kt-element="mode" data-kt-value="light">
                                                        <span class="menu-icon" data-kt-element="icon">
                                                            <i class="ki-duotone ki-night-day fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span><span
                                                                    class="path6"></span><span
                                                                    class="path7"></span><span
                                                                    class="path8"></span><span
                                                                    class="path9"></span><span
                                                                    class="path10"></span></i> </span>
                                                        <span class="menu-title">
                                                            Light
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-0">
                                                    <a href="logistics.html#" class="menu-link px-3 py-2"
                                                        data-kt-element="mode" data-kt-value="dark">
                                                        <span class="menu-icon" data-kt-element="icon">
                                                            <i class="ki-duotone ki-moon fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i> </span>
                                                        <span class="menu-title">
                                                            Dark
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-0">
                                                    <a href="logistics.html#" class="menu-link px-3 py-2"
                                                        data-kt-element="mode" data-kt-value="system">
                                                        <span class="menu-icon" data-kt-element="icon">
                                                            <i class="ki-duotone ki-screen fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i> </span>
                                                        <span class="menu-title">
                                                            System
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->

                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                            <a href="logistics.html#" class="menu-link px-5">
                                                <span class="menu-title position-relative">
                                                    Language

                                                    <span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                        English <img class="w-15px h-15px rounded-1 ms-2"
                                                            src="../assets/media/flags/united-states.svg"
                                                            alt="" />
                                                    </span>
                                                </span>
                                            </a>

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/settings.html"
                                                        class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="../assets/media/flags/united-states.svg"
                                                                alt="" />
                                                        </span>
                                                        English
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="../assets/media/flags/spain.svg"
                                                                alt="" />
                                                        </span>
                                                        Spanish
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="../assets/media/flags/germany.svg"
                                                                alt="" />
                                                        </span>
                                                        German
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="../assets/media/flags/japan.svg"
                                                                alt="" />
                                                        </span>
                                                        Japanese
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="../assets/media/flags/france.svg"
                                                                alt="" />
                                                        </span>
                                                        French
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5 my-1">
                                            <a href="../account/settings.html" class="menu-link px-5">
                                                Account Settings
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../authentication/layouts/corporate/sign-in.html"
                                                class="menu-link px-5">
                                                Sign Out
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->

                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User menu-->

                                <!--begin::New campaign-->
                                <div class="app-navbar-item ms-2 ms-lg-9">
                                    <a class="btn btn-warning d-flex flex-center h-40px h-lg-45px"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">New
                                        <span class="d-none d-md-block ps-2">Campaign</span>
                                    </a>
                                </div>
                                <!--end::New campaign-->
                            </div>
                            <!--end::Navbar-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">






                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

                    <!--begin::Logo-->
                    <div class="app-sidebar-logo d-none d-md-block pt-7 px-8 pt-xl-11 mb-2" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="../index.html">
                            <img alt="Logo" src="../assets/media/logos/demo3.svg"
                                class="h-35px theme-light-show" />
                            <img alt="Logo" src="../assets/media/logos/demo3-dark.svg"
                                class="h-35px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu app-sidebar-menu-arrow overflow-hidden flex-column-fluid mb-5"
                        id="kt_app_sidebar_menu">
                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 mx-3"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                            <!--begin::Menu-->
                            <div class="
                menu
                menu-column
                menu-rounded
                menu-sub-indention
                menu-active-bg
            "
                                id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-black-right fs-3"></i></span><span
                                            class="menu-title">Dashboards</span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="../index.html"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Default</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="projects.html"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Projects</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="ecommerce.html"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">eCommerce</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="marketing.html"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Marketing</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                        <div class="menu-inner flex-column collapse show"
                                            id="kt_app_sidebar_menu_dashboards_collapse"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="social.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Social</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="bidding.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Bidding</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="online-courses.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Online
                                                        Courses</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                                    href="logistics.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Logistics</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div>
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <a class="btn btn-flex btn-color-gray-500 btn-icon-gray-500 d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible active"
                                                    data-bs-toggle="collapse"
                                                    href="logistics.html#kt_app_sidebar_menu_dashboards_collapse"
                                                    data-kt-toggle-text="Show 4 More">
                                                    <span data-kt-toggle-text-target="true">Show Less</span> <i
                                                        class="ki-duotone ki-minus-square toggle-on fs-2 me-0 pe-0"><span
                                                            class="path1"></span><span class="path2"></span></i><i
                                                        class="ki-duotone ki-plus-square toggle-off fs-2 me-0 pe-0"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-black-right fs-3"></i></span><span
                                            class="menu-title">Pages</span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">User Profile</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/overview.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Overview</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/projects.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Projects</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/campaigns.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Campaigns</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/documents.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Documents</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/followers.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Followers</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/user-profile/activity.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Activity</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Account</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/overview.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Overview</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/settings.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Settings</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/security.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Security</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/activity.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Activity</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/billing.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Billing</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/statements.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Statements</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/referrals.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Referrals</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/api-keys.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">API Keys</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../account/logs.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Logs</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Authentication</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Corporate</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/layouts/corporate/sign-in.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Sign-In</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/layouts/corporate/sign-up.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Sign-Up</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/layouts/corporate/two-factor.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Two-Factor</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/layouts/corporate/reset-password.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Reset
                                                                    Password</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/layouts/corporate/new-password.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">New
                                                                    Password</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/extended/multi-steps-sign-up.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Multi-Steps
                                                                    Sign-Up</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/extended/two-factor-auth.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Two Factor
                                                                    Auth</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Email Templates</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/welcome-message.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Welcome
                                                                    Message</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/reset-password.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Reset
                                                                    Password</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/subscription-confirmed.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Subscription
                                                                    Confirmed</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/card-declined.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Credit Card
                                                                    Declined</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/promo-1.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Promo
                                                                    1</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/promo-2.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Promo
                                                                    2</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../authentication/email/promo-3.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Promo
                                                                    3</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/welcome.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Welcome
                                                            Message</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/verify-email.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Verify
                                                            Email</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/coming-soon.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Coming
                                                            Soon</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/password-confirmation.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Password
                                                            Confirmation</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/account-deactivated.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Account
                                                            Deactivation</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/error-404.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Error 404</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/error-500.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Error 500</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../authentication/general/maintenance.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Maintenance</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Corporate</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/about.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">About</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/team.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Our Team</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/faq.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">FAQ</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/contact.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Contact
                                                            Us</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/pricing.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Pricing</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/licenses.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Licenses</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/sitemap.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Sitemap</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Social</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/social/feeds.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Feeds</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/social/activity.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Activty</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/social/followers.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Followers</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/social/settings.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Settings</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Blog</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/blog/home.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Blog Home</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/blog/post.html"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Blog Post</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Careers</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/careers/list.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Careers
                                                            List</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../pages/careers/apply.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Careers
                                                            Apply</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item"><!--begin:Menu link--><span
                                        class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-black-right fs-3"></i></span><span
                                            class="menu-title">Apps</span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Projects</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/list.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">My
                                                            Projects</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/project.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View
                                                            Project</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/targets.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Targets</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/budget.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Budget</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/users.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Users</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/files.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Files</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/activity.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Activity</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/projects/settings.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Settings</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">eCommerce</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Catalog</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/products.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Products</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/categories.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Categories</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/add-product.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Product</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/edit-product.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Edit
                                                                    Product</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/add-category.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Category</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/catalog/edit-category.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Edit
                                                                    Category</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Sales</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/sales/listing.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Orders
                                                                    Listing</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/sales/details.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Order
                                                                    Details</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/sales/add-order.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Order</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/sales/edit-order.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Edit
                                                                    Order</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customers</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/customers/listing.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Customer
                                                                    Listing</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/customers/details.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Customer
                                                                    Details</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Reports</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/reports/view.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Products
                                                                    Viewed</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/reports/sales.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Sales</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/reports/returns.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Returns</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/reports/customer-orders.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Customer
                                                                    Orders</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/ecommerce/reports/shipping.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Shipping</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/ecommerce/settings.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Settings</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Contacts</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/contacts/getting-started.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Getting
                                                            Started</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/contacts/add-contact.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Add
                                                            Contact</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/contacts/edit-contact.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Edit
                                                            Contact</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/contacts/view-contact.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View
                                                            Contact</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Support Center</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/support-center/overview.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Overview</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item menu-accordion mb-1"><!--begin:Menu link--><span
                                                        class="menu-link"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Tickets</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/support-center/tickets/list.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Tickets
                                                                    List</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/support-center/tickets/view.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">View
                                                                    Ticket</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item menu-accordion mb-1"><!--begin:Menu link--><span
                                                        class="menu-link"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Tutorials</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/support-center/tutorials/list.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Tutorials
                                                                    List</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/support-center/tutorials/post.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Tutorial
                                                                    Post</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/support-center/faq.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">FAQ</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/support-center/licenses.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Licenses</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/support-center/contact.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Contact
                                                            Us</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">User Management</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click"
                                                    class="menu-item menu-accordion mb-1"><!--begin:Menu link--><span
                                                        class="menu-link"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Users</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/user-management/users/list.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Users
                                                                    List</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/user-management/users/view.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">View
                                                                    User</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Roles</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/user-management/roles/list.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Roles
                                                                    List</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/user-management/roles/view.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">View
                                                                    Role</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/user-management/permissions.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Permissions</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Customers</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/customers/getting-started.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Getting
                                                            Started</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/customers/list.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customer
                                                            Listing</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/customers/view.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customer
                                                            Details</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Subscription</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/subscriptions/getting-started.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Getting
                                                            Started</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/subscriptions/list.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Subscription
                                                            List</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/subscriptions/add.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Add
                                                            Subscription</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/subscriptions/view.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View
                                                            Subscription</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Invoice Manager</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View Invoices</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/invoices/view/invoice-1.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Invoice
                                                                    1</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/invoices/view/invoice-2.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Invoice
                                                                    2</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../apps/invoices/view/invoice-3.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Invoice
                                                                    3</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/invoices/create.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Create
                                                            Invoice</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">File Manager</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/file-manager/folders.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Folders</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/file-manager/files.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Files</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/file-manager/blank.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Blank
                                                            Directory</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/file-manager/settings.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Settings</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Inbox</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/inbox/listing.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Messages</span><span
                                                            class="menu-badge"><span
                                                                class="badge badge-success">3</span></span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/inbox/compose.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Compose</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/inbox/reply.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View &
                                                            Reply</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Chat</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/chat/private.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Private
                                                            Chat</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/chat/group.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Group
                                                            Chat</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../apps/chat/drawer.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Drawer
                                                            Chat</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="../apps/calendar.html"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item"><!--begin:Menu link--><span
                                        class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-black-right fs-3"></i></span><span
                                            class="menu-title">Utilities</span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Modals</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">General</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/general/invite-friends.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Invite
                                                                    Friends</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/general/view-users.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">View
                                                                    Users</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/general/select-users.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Select
                                                                    Users</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/general/upgrade-plan.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Upgrade
                                                                    Plan</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/general/share-earn.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Share &
                                                                    Earn</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Forms</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/forms/new-target.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">New
                                                                    Target</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/forms/new-card.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">New
                                                                    Card</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/forms/new-address.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">New
                                                                    Address</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/forms/create-api-key.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Create API
                                                                    Key</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/forms/bidding.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Bidding</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Wizards</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/create-app.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Create
                                                                    App</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/create-campaign.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Create
                                                                    Campaign</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/create-account.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Create Business
                                                                    Acc</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/create-project.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Create
                                                                    Project</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/top-up-wallet.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Top Up
                                                                    Wallet</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/offer-a-deal.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Offer a
                                                                    Deal</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/wizards/two-factor-authentication.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Two Factor
                                                                    Auth</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Search</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/search/users.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Users</span></a><!--end:Menu link-->
                                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                                        <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="../utilities/modals/search/select-location.html"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Select
                                                                    Location</span></a><!--end:Menu link--></div>
                                                        <!--end:Menu item-->
                                                    </div><!--end:Menu sub-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Wizards</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/horizontal.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Horizontal</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/vertical.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Vertical</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/two-factor-authentication.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Two Factor
                                                            Auth</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/create-app.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Create
                                                            App</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/create-campaign.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Create
                                                            Campaign</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/create-account.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Create
                                                            Account</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/create-project.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Create
                                                            Project</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/modals/wizards/top-up-wallet.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Top Up
                                                            Wallet</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/wizards/offer-a-deal.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Offer a
                                                            Deal</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Search</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/search/horizontal.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Horizontal</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/search/vertical.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Vertical</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/search/users.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Users</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="../utilities/search/select-location.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Location</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-black-right fs-3"></i></span><span
                                            class="menu-title">Help</span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="https://preview.keenthemes.com/html/keen/docs/base/utilities"
                                                target="_blank" title="Check out over 200 in-house components"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-dismiss="click" data-bs-placement="right"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Components</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="https://preview.keenthemes.com/html/keen/docs" target="_blank"
                                                title="Check out the complete documentation"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-dismiss="click" data-bs-placement="right"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Documentation</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="../layout-builder.html"
                                                title="Build your layout and export HTML for server side integration"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-dismiss="click" data-bs-placement="right"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Layout Builder</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="https://preview.keenthemes.com/html/keen/docs/getting-started/changelog"
                                                target="_blank"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Changelog v3.0.8</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="../authentication/layouts/corporate/sign-in.html"><span
                                            class="menu-icon"><i class="ki-duotone ki-entrance-right fs-3"><span
                                                    class="path1"></span><span
                                                    class="path2"></span></i></span><span
                                            class="menu-title">Logout</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::sidebar menu-->
                    <!--begin::Footer-->
                    <div class="app-sidebar-footer position-relative bg-light flex-column-auto m-6 mb-10 rounded-4"
                        id="kt_app_sidebar_footer">
                        <!--begin::Wrapper-->
                        <div class="text-center p-9">
                            <!--begin::Title-->
                            <h6 class="text-gray-600 text-center fw-semibold mb-7 lh-base">
                                Our support team is available<br />
                                to give you answers fast
                            </h6>
                            <!--end::Title-->

                            <!--begin::Action-->
                            <a href='../apps/support-center/tickets/list.html' class="btn btn-sm btn-primary">
                                Submit Feedback
                            </a>
                            <!--begin::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">


                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">


                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-fluid ">
                                <!--begin::Row-->
                                <div class="row gy-5 gx-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">

                                        <!--begin::Engage widget 1-->
                                        <div class="card h-md-100" dir="ltr">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column flex-center">
                                                <!--begin::Heading-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                                        Quick form to <br />
                                                        <span class="fw-bolder"> Bid a New Shipment</span>
                                                    </h1>
                                                    <!--end::Title-->

                                                    <!--begin::Illustration-->
                                                    <div class="py-10 text-center">
                                                        <img src="../assets/media/svg/illustrations/easy/3.svg"
                                                            class="theme-light-show w-200px" alt="" />
                                                        <img src="../assets/media/svg/illustrations/easy/3-dark.svg"
                                                            class="theme-dark-show w-200px" alt="" />
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Links-->
                                                <div class="text-center mb-1">
                                                    <!--begin::Link-->
                                                    <a class="btn btn-sm btn-primary me-2"
                                                        data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">
                                                        Start Now </a>
                                                    <!--end::Link-->

                                                    <!--begin::Link-->
                                                    <a class="btn btn-sm btn-light"
                                                        href="../apps/invoices/view/invoice-2.html">
                                                        Quick Guide </a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Links-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 1-->

                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-8 mb-5 mb-xl-10">
                                        <!--begin::Row-->
                                        <div class="row g-lg-5 g-xl-10">
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                                                <!--begin::Card widget 12-->
                                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                                    <!--begin::Card body-->
                                                    <div
                                                        class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                        <!--begin::Statistics-->
                                                        <div class="mb-4 px-9">
                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center mb-2">


                                                                <!--begin::Value-->
                                                                <span
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                                                <!--end::Value-->

                                                                <!--begin::Label-->
                                                                <span
                                                                    class="d-flex align-items-end text-gray-500 fs-6 fw-semibold">
                                                                    Tons </span>

                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->

                                                            <!--begin::Description-->
                                                            <span class="fs-6 fw-semibold text-gray-500">Total Online
                                                                Sales</span>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Statistics-->

                                                        <!--begin::Chart-->
                                                        <div id="kt_card_widget_12_chart" class="min-h-auto"
                                                            style="height: 125px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card widget 12-->


                                                <!--begin::Card widget 10-->
                                                <div class="card card-flush h-md-50 mb-lg-10">
                                                    <!--begin::Header-->
                                                    <div class="card-header pt-5">
                                                        <!--begin::Title-->
                                                        <div class="card-title d-flex flex-column">
                                                            <!--begin::Amount-->
                                                            <span
                                                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                                            <!--end::Amount-->

                                                            <!--begin::Subtitle-->
                                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected
                                                                Earnings This Month</span>
                                                            <!--end::Subtitle-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex align-items-end pt-0">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <!--begin::Chart-->
                                                            <div class="d-flex me-7 me-xxl-10">
                                                                <div id="kt_card_widget_10_chart" class="min-h-auto"
                                                                    style="height: 78px; width: 78px"
                                                                    data-kt-size="78" data-kt-line="11">
                                                                </div>
                                                            </div>
                                                            <!--end::Chart-->

                                                            <!--begin::Labels-->
                                                            <div
                                                                class="d-flex flex-column content-justify-center flex-grow-1">
                                                                <!--begin::Label-->
                                                                <div
                                                                    class="d-flex fs-6 fw-semibold align-items-center">
                                                                    <!--begin::Bullet-->
                                                                    <div
                                                                        class="bullet w-8px h-6px rounded-2 bg-success me-3">
                                                                    </div>
                                                                    <!--end::Bullet-->

                                                                    <!--begin::Label-->
                                                                    <div
                                                                        class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                        Used Truck freight</div>
                                                                    <!--end::Label-->

                                                                    <!--begin::Separator-->
                                                                    <div
                                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                                    </div>
                                                                    <!--end::Separator-->

                                                                    <!--begin::Stats-->
                                                                    <div
                                                                        class="ms-auto fw-bolder text-gray-700 text-end">
                                                                        45%</div>
                                                                    <!--end::Stats-->
                                                                </div>
                                                                <!--end::Label-->

                                                                <!--begin::Label-->
                                                                <div
                                                                    class="d-flex fs-6 fw-semibold align-items-center my-1">
                                                                    <!--begin::Bullet-->
                                                                    <div
                                                                        class="bullet w-8px h-6px rounded-2 bg-primary me-3">
                                                                    </div>
                                                                    <!--end::Bullet-->

                                                                    <!--begin::Label-->
                                                                    <div
                                                                        class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                        Used Ship freight</div>
                                                                    <!--end::Label-->

                                                                    <!--begin::Separator-->
                                                                    <div
                                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                                    </div>
                                                                    <!--end::Separator-->

                                                                    <!--begin::Stats-->
                                                                    <div
                                                                        class="ms-auto fw-bolder text-gray-700 text-end">
                                                                        21%</div>
                                                                    <!--end::Stats-->
                                                                </div>
                                                                <!--end::Label-->

                                                                <!--begin::Label-->
                                                                <div
                                                                    class="d-flex fs-6 fw-semibold align-items-center">
                                                                    <!--begin::Bullet-->
                                                                    <div class="bullet w-8px h-6px rounded-2 me-3"
                                                                        style="background-color: #E4E6EF"></div>
                                                                    <!--end::Bullet-->

                                                                    <!--begin::Label-->
                                                                    <div
                                                                        class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                        Used Plane freight</div>
                                                                    <!--end::Label-->

                                                                    <!--begin::Separator-->
                                                                    <div
                                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                                    </div>
                                                                    <!--end::Separator-->

                                                                    <!--begin::Stats-->
                                                                    <div
                                                                        class="ms-auto fw-bolder text-gray-700 text-end">
                                                                        34%</div>
                                                                    <!--end::Stats-->
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Labels-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card widget 10-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">

                                                <!--begin::Card widget 13-->
                                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                                    <!--begin::Card body-->
                                                    <div
                                                        class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                        <!--begin::Statistics-->
                                                        <div class="mb-4 px-9">
                                                            <!--begin::Statistics-->
                                                            <div class="d-flex align-items-center mb-2">


                                                                <!--begin::Value-->
                                                                <span
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                                                <!--end::Value-->

                                                                <!--begin::Label-->

                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Statistics-->

                                                            <!--begin::Description-->
                                                            <span class="fs-6 fw-semibold text-gray-500">Total
                                                                Shipments</span>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Statistics-->

                                                        <!--begin::Chart-->
                                                        <div id="kt_card_widget_13_chart" class="min-h-auto"
                                                            style="height: 125px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card widget 13-->




                                                <!--begin::Card widget 7-->
                                                <div class="card card-flush h-md-50 mb-lg-10">
                                                    <!--begin::Header-->
                                                    <div class="card-header pt-5">
                                                        <!--begin::Title-->
                                                        <div class="card-title d-flex flex-column">
                                                            <!--begin::Amount-->
                                                            <span
                                                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                                            <!--end::Amount-->

                                                            <!--begin::Subtitle-->
                                                            <span class="text-gray-500 pt-1 fw-semibold fs-6">New
                                                                Customers This Month</span>
                                                            <!--end::Subtitle-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Card body-->
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-end pe-0">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                                                            Heroes</span>
                                                        <!--end::Title-->

                                                        <!--begin::Users group-->
                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Alan Warden">
                                                                <span
                                                                    class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Michael Eberon">
                                                                <img alt="Pic"
                                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-11.jpg" />
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Susan Redwood">
                                                                <span
                                                                    class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Melody Macy">
                                                                <img alt="Pic"
                                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-2.jpg" />
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Perry Matthew">
                                                                <span
                                                                    class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="tooltip" title="Barry Walter">
                                                                <img alt="Pic"
                                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <a href="logistics.html#"
                                                                class="symbol symbol-35px symbol-circle"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_view_users">
                                                                <span
                                                                    class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                                            </a>
                                                        </div>
                                                        <!--end::Users group-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card widget 7-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row gy-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">

                                        <!--begin::List widget 10-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Shipment
                                                        History</span>
                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active
                                                        Shipments</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="logistics.html#" class="btn btn-sm btn-light"
                                                        data-bs-toggle='tooltip' data-bs-dismiss='click'
                                                        data-bs-custom-class="tooltip-inverse"
                                                        title="Logistics App is coming soon">View All</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Nav-->
                                                <ul
                                                    class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                                    <!--begin::Item-->
                                                    <li class="nav-item col-4 mx-0 p-0">
                                                        <!--begin::Link-->
                                                        <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                                            data-bs-toggle="pill"
                                                            href="logistics.html#kt_list_widget_10_tab_1">
                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                                Notable
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item col-4 mx-0 px-0">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                            data-bs-toggle="pill"
                                                            href="logistics.html#kt_list_widget_10_tab_2">
                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                                Delivered
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item col-4 mx-0 px-0">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                            data-bs-toggle="pill"
                                                            href="logistics.html#kt_list_widget_10_tab_3">
                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                                Shipping
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                                    <!--end::Bullet-->
                                                </ul>
                                                <!--end::Nav-->

                                                <!--begin::Tab Content-->
                                                <div class="tab-content">

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade show active"
                                                        id="kt_list_widget_10_tab_1">

                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Ship
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                            Harbor</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Sicily,
                                                                            Italy</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                            Container Hotel</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Tallin,
                                                                            EST</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Truck
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                            van Rotterdam</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                            Netherlands</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Brussels,
                                                                            Belgium</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-delivery text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Delivery
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                            St - Zayed Port</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span class="fs-6 fw-bold text-gray-800">Abu
                                                                            Dhabi, UAE</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                            Drydock Boston</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Boston,
                                                                            USA</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Plane
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-danger fw-bold my-2 fs-8">Delayed</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Schipol
                                                                            Airport, Amsterdam</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Changi
                                                                            Airport, Singapore</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->


                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_list_widget_10_tab_2">

                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Plane
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Schipol
                                                                            Airport, Amsterdam</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Changi
                                                                            Airport, Singapore</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Truck
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                            van Rotterdam</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                            Netherlands</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Brussels,
                                                                            Belgium</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Ship
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                            St - Zayed Port</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span class="fs-6 fw-bold text-gray-800">Abu
                                                                            Dhabi, UAE</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                            Drydock Boston</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Boston,
                                                                            USA</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Ship
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                            Harbor</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Sicily,
                                                                            Italy</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                            Container Hotel</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Tallin,
                                                                            EST</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->


                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_list_widget_10_tab_3">

                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Ship
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                            St - Zayed Port</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span class="fs-6 fw-bold text-gray-800">Abu
                                                                            Dhabi, UAE</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                            Drydock Boston</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Boston,
                                                                            USA</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Plane
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Schipol
                                                                            Airport, Amsterdam</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                            Cargo</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Changi
                                                                            Airport, Singapore</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Ship
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                            Harbor</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Sicily,
                                                                            Italy</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                            Container Hotel</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Tallin,
                                                                            EST</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed my-6"></div>
                                                        <!--end::Separator-->


                                                        <!--begin::Item-->
                                                        <div class="m-0">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-sm-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45px me-4">
                                                                    <span class="symbol-label bg-primary">
                                                                        <i
                                                                            class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <div class="flex-grow-1 me-2">
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-500 fs-6 fw-semibold">Truck
                                                                            Freight</a>

                                                                        <span
                                                                            class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                                    </div>

                                                                    <span
                                                                        class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Timeline-->
                                                            <div class="timeline">
                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center mb-7">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line mt-1 mb-n6 mb-sm-n7">
                                                                    </div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                            van Rotterdam</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                            Netherlands</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->

                                                                <!--begin::Timeline item-->
                                                                <div class="timeline-item align-items-center">
                                                                    <!--begin::Timeline line-->
                                                                    <div class="timeline-line"></div>
                                                                    <!--end::Timeline line-->

                                                                    <!--begin::Timeline icon-->
                                                                    <div class="timeline-icon">
                                                                        <i
                                                                            class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Timeline icon-->

                                                                    <!--begin::Timeline content-->
                                                                    <div class="timeline-content m-0">
                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                        <!--end::Title-->

                                                                        <!--begin::Title-->
                                                                        <span
                                                                            class="fs-6 fw-bold text-gray-800">Brussels,
                                                                            Belgium</span>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline content-->
                                                                </div>
                                                                <!--end::Timeline item-->
                                                            </div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        <!--end::Item-->


                                                    </div>
                                                    <!--end::Tap pane-->

                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::List widget 10-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-8 mb-5 mb-xl-10">
                                        <!--begin::Row-->
                                        <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                                            <!--begin::Col-->
                                            <div class="col-xxl-6">
                                                <!--begin::Chart widget 6-->
                                                <div class="card card-flush h-lg-100">
                                                    <!--begin::Header-->
                                                    <div class="card-header py-7 mb-3">
                                                        <!--begin::Title-->
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800">Top Selling
                                                                Categories</span>
                                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">8k
                                                                social visitors</span>
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Toolbar-->
                                                        <div class="card-toolbar">
                                                            <a href="../apps/ecommerce/sales/listing.html"
                                                                class="btn btn-sm btn-light">View All</a>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-0 ps-6 mt-n12">
                                                        <div id="kt_charts_widget_6"></div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Chart widget 6-->


                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-xxl-6 mb-5 mb-xl-0">

                                                <!--begin::List widget 8-->
                                                <div class="card card-flush h-lg-100">
                                                    <!--begin::Header-->
                                                    <div class="card-header pt-7 mb-5">
                                                        <!--begin::Title-->
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800">Visits by
                                                                Country</span>
                                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">20
                                                                countries share 97% visits</span>
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Toolbar-->
                                                        <div class="card-toolbar">
                                                            <a href="../apps/ecommerce/sales/listing.html"
                                                                class="btn btn-sm btn-light">View All</a>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body pt-0">
                                                        <!--begin::Items-->
                                                        <div class="m-0">

                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/united-states.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                                                            States</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                            link clicks</span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-success fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                2.6%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->


                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/brazil.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All
                                                                            Social Channels </span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-danger fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                0.4%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->


                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/turkey.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                                            Campaigns</span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-success fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                0.2%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->


                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/france.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                                            Radius visits</span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-success fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                4.1%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->


                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/india.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many
                                                                            Sources</span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-danger fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                8.3%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->


                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Flag-->
                                                                <img src="../assets/media/flags/sweden.svg"
                                                                    class="me-4 w-25px" style="border-radius: 4px"
                                                                    alt="" />
                                                                <!--end::Flag-->

                                                                <!--begin::Section-->
                                                                <div
                                                                    class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                                    <!--begin::Content-->
                                                                    <div class="me-5">
                                                                        <!--begin::Title-->
                                                                        <a href="logistics.html#"
                                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                                                        <!--end::Title-->

                                                                        <!--begin::Desc-->
                                                                        <span
                                                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                            Network</span>
                                                                        <!--end::Desc-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Number-->
                                                                        <span
                                                                            class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                                        <!--end::Number-->

                                                                        <!--begin::Label-->
                                                                        <div class="m-0">
                                                                            <!--begin::Label-->
                                                                            <span
                                                                                class="badge badge-light-success fs-base">
                                                                                <i
                                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span></i>
                                                                                1.9%
                                                                            </span>
                                                                            <!--end::Label-->

                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->


                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::LIst widget 8-->


                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                        <!--begin::Row-->
                                        <div class="row h-xxl-50">
                                            <!--begin::Col-->
                                            <div class="col">


                                                <!--begin::Chart widget 10-->
                                                <div class="card card-flush h-xxl-100">
                                                    <!--begin::Header-->
                                                    <div class="card-header pt-7">
                                                        <!--begin::Title-->
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800">Freight
                                                                Tonnage</span>
                                                            <span
                                                                class="text-gray-500 mt-1 fw-semibold fs-6">3,567,457
                                                                tons</span>
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Toolbar-->
                                                        <div class="card-toolbar">
                                                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                                            <div data-kt-daterangepicker="true"
                                                                data-kt-daterangepicker-opens="left"
                                                                class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                                <!--begin::Display range-->
                                                                <div class="text-gray-600 fw-bold">
                                                                    Loading date range...
                                                                </div>
                                                                <!--end::Display range-->

                                                                <i
                                                                    class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span><span
                                                                        class="path6"></span></i>
                                                            </div>
                                                            <!--end::Daterangepicker-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                                                        <!--begin::Nav-->
                                                        <ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
                                                            <!--begin::Item-->
                                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                                <!--begin::Link-->
                                                                <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        active"
                                                                    data-bs-toggle="pill"
                                                                    id="kt_charts_widget_10_tab_1"
                                                                    href="logistics.html#kt_charts_widget_10_tab_content_1">
                                                                    <!--begin::Icon-->
                                                                    <div class="nav-icon mb-3">
                                                                        <i class="ki-duotone ki-ship fs-1 p-0"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i>
                                                                    </div>
                                                                    <!--end::Icon-->

                                                                    <!--begin::Title-->
                                                                    <span
                                                                        class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                        Ship </span>
                                                                    <!--end::Title-->

                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                                    <!--end::Bullet-->
                                                                </a>
                                                                <!--end::Link-->
                                                            </li>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                                <!--begin::Link-->
                                                                <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        "
                                                                    data-bs-toggle="pill"
                                                                    id="kt_charts_widget_10_tab_2"
                                                                    href="logistics.html#kt_charts_widget_10_tab_content_2">
                                                                    <!--begin::Icon-->
                                                                    <div class="nav-icon mb-3">
                                                                        <i class="ki-duotone ki-truck fs-1 p-0"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </div>
                                                                    <!--end::Icon-->

                                                                    <!--begin::Title-->
                                                                    <span
                                                                        class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                        Truck </span>
                                                                    <!--end::Title-->

                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                                    <!--end::Bullet-->
                                                                </a>
                                                                <!--end::Link-->
                                                            </li>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                                <!--begin::Link-->
                                                                <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        "
                                                                    data-bs-toggle="pill"
                                                                    id="kt_charts_widget_10_tab_3"
                                                                    href="logistics.html#kt_charts_widget_10_tab_content_3">
                                                                    <!--begin::Icon-->
                                                                    <div class="nav-icon mb-3">
                                                                        <i
                                                                            class="ki-duotone ki-airplane-square fs-1 p-0"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Icon-->

                                                                    <!--begin::Title-->
                                                                    <span
                                                                        class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                        Plane </span>
                                                                    <!--end::Title-->

                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                                    <!--end::Bullet-->
                                                                </a>
                                                                <!--end::Link-->
                                                            </li>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                                <!--begin::Link-->
                                                                <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
                        "
                                                                    data-bs-toggle="pill"
                                                                    id="kt_charts_widget_10_tab_4"
                                                                    href="logistics.html#kt_charts_widget_10_tab_content_4">
                                                                    <!--begin::Icon-->
                                                                    <div class="nav-icon mb-3">
                                                                        <i class="ki-duotone ki-bus fs-1 p-0"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </div>
                                                                    <!--end::Icon-->

                                                                    <!--begin::Title-->
                                                                    <span
                                                                        class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                        Train </span>
                                                                    <!--end::Title-->

                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                                    <!--end::Bullet-->
                                                                </a>
                                                                <!--end::Link-->
                                                            </li>
                                                            <!--end::Item-->

                                                        </ul>
                                                        <!--end::Nav-->

                                                        <!--begin::Tab Content-->
                                                        <div class="tab-content ps-4 pe-6">
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade active show"
                                                                id="kt_charts_widget_10_tab_content_1">
                                                                <!--begin::Chart-->
                                                                <div id="kt_charts_widget_10_chart_1"
                                                                    class="min-h-auto" style="height: 270px"></div>
                                                                <!--end::Chart-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade "
                                                                id="kt_charts_widget_10_tab_content_2">
                                                                <!--begin::Chart-->
                                                                <div id="kt_charts_widget_10_chart_2"
                                                                    class="min-h-auto" style="height: 270px"></div>
                                                                <!--end::Chart-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade "
                                                                id="kt_charts_widget_10_tab_content_3">
                                                                <!--begin::Chart-->
                                                                <div id="kt_charts_widget_10_chart_3"
                                                                    class="min-h-auto" style="height: 270px"></div>
                                                                <!--end::Chart-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade "
                                                                id="kt_charts_widget_10_tab_content_4">
                                                                <!--begin::Chart-->
                                                                <div id="kt_charts_widget_10_chart_4"
                                                                    class="min-h-auto" style="height: 270px"></div>
                                                                <!--end::Chart-->
                                                            </div>
                                                            <!--end::Tap pane-->

                                                        </div>
                                                        <!--end::Tab Content-->
                                                    </div>
                                                    <!--end: Card Body-->
                                                </div>
                                                <!--end::Chart widget 10-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row gy-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4">

                                        <!--begin::List widget 11-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7 mb-3">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Our Fleet
                                                        Tonnage</span>
                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 1,247
                                                        vehicles</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="logistics.html#" class="btn btn-sm btn-light"
                                                        data-bs-toggle='tooltip' data-bs-dismiss='click'
                                                        data-bs-custom-class="tooltip-inverse"
                                                        title="Logistics App is coming soon">Review Fleet</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-4">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-ship text-gray-600 fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="logistics.html#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Ships</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">234
                                                                Ships</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-500 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-800 fw-bold fs-6 d-block">2,345,500</span>
                                                        <!--end::Number-->

                                                        Tons
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Separator-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-truck text-gray-600 fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="logistics.html#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Trucks</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">1,460
                                                                Trucks</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-500 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-800 fw-bold fs-6 d-block">457,200</span>
                                                        <!--end::Number-->

                                                        Tons
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Separator-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i
                                                                    class="ki-duotone ki-airplane-square text-gray-600 fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="logistics.html#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Planes</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">8
                                                                Aircrafts</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-500 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">1,240</span>
                                                        <!--end::Number-->

                                                        Tons
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Separator-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="ki-duotone ki-bus text-gray-600 fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="logistics.html#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Trains</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">36
                                                                Trains</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-500 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-800 fw-bold fs-6 d-block">804,300</span>
                                                        <!--end::Number-->

                                                        Tons
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->




                                                <div class="text-center pt-9">
                                                    <a href="../apps/ecommerce/catalog/add-product.html"
                                                        class="btn btn-primary">Add Vehicle</a>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 11-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-8">
                                        <!--begin::Chart widget 17-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-900">Sales
                                                        Statistics</span>

                                                    <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling
                                                        Countries</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span></i>
                                                    </button>

                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="logistics.html#" class="menu-link px-3">
                                                                Remove
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="logistics.html#" class="menu-link px-3">
                                                                Mute
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="logistics.html#" class="menu-link px-3">
                                                                Settings
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Chart container-->
                                                <div id="kt_charts_widget_16_chart" class="w-100 h-350px"></div>
                                                <!--end::Chart container-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 17-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->

                    </div>
                    <!--end::Content wrapper-->


                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer ">



                        <!--begin::Footer container-->
                        <div
                            class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2024&copy;</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a
                                        href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/"
                                        target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->


            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->


    <!--begin::App layout builder-->
    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '380px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_app_layout_builder_toggle" data-kt-drawer-close="#kt_app_layout_builder_close">

        <!--begin::Card-->
        <div class="card border-0 shadow-none rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header"
                style="background-image:url('../assets/media/misc/layout/customizer-header-bg.jpg')">

                <!--begin::Card title-->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Keen Builder

                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                        Get your product deeply customized
                    </small>
                </h3>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                        id="kt_app_layout_builder_close">
                        <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                <!--begin::Content-->
                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5"
                    data-kt-scroll="true" data-kt-scroll-height="auto"
                    data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                    data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Form-->
                    <form class="form" method="POST" id="kt_app_layout_builder_form"
                        action="https://preview.keenthemes.com/keen/demo3/index.php">
                        <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]" />

                        <!--begin::Card body-->
                        <div class="card-body p-0">

                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-gray-900">Theme Mode</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                        Enjoy Dark & Light modes.

                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/keen/docs/getting-started/dark-mode"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="row " data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image,.form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="../assets/media/preview/demos/demo3/light-ltr.png"
                                                    class="form-check-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="light"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_light" />

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="../assets/media/preview/demos/demo3/dark-ltr.png"
                                                    class="form-check-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="dark"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_dark" />

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-gray-900">RTL Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Change Language Direction.

                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/keen/docs/getting-started/rtl"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                        <input type="hidden" value="false"
                                            name="layout-builder[layout][app][general][rtl]" />

                                        <input class="form-check-input w-45px h-30px" type="checkbox"
                                            value="true" name="layout-builder[layout][app][general][rtl]" />
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-gray-900">Width Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex gap-7">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" checked value="default"
                                            id="kt_layout_builder_page_width_default"
                                            name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_default">
                                            Default </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fluid"
                                            id="kt_layout_builder_page_width_fluid"
                                            name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_fluid">
                                            Fluid </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fixed"
                                            id="kt_layout_builder_page_width_fixed"
                                            name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_fixed">
                                            Fixed </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-gray-900">KeenIcons Style</h4>

                                    <div>
                                        <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/keen/docs/icons/keenicons"
                                            target="_blank">Learn more</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex flex-stack gap-3 " data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image,.form-check-input">

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="duotone" checked
                                                name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="outline"
                                                name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="solid"
                                                name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-gray-900">Sticky Header</h4>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Enable sticky header.

                                        <a href="../layout-builder.html" class="fw-semibold">
                                            More layout options.
                                        </a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-solid form-check-custom form-check-success form-switch">
                                        <input type="hidden" value="false"
                                            name="layout-builder[layout][app][header][default][sticky][enabled]" />
                                        <input class="form-check-input w-45px h-30px" type="checkbox" checked
                                            value="true"
                                            name="layout-builder[layout][app][header][default][sticky][enabled]"
                                            id="kt_builder_enabled" />

                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_builder_header"></label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->

                        </div>
                        <!--end::Card body-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
                <button type="button" id="kt_app_layout_builder_preview"
                    class="btn btn-primary flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Preview</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>

                <button type="button" id="kt_app_layout_builder_reset"
                    class="btn btn-light flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Reset</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::App layout builder-->

    <!--begin::App settings toggle-->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
        title="Keen Builder" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip"
        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
        <i class="ki-duotone ki-setting-4 fs-4 me-1"></i> Customize
    </button>
    <!--end::App settings toggle-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus
                                        Mobile App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-14.jpg"
                                                alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="../apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div
                                            class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-2.jpg"
                                                    alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-14.jpg"
                                                    alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="../apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="../apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="../assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="../apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4">
                                <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
                                        speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg"
                                                alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="logistics.html#"
                                        class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming
                                        Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="../assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3"
                                                src="../assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/keen/demo3/apps/projects/project.html" class="w-30px me-3"
                                                src="../assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="logistics.html#"
                                                    class="fs-6 text-hover-primary fw-bold">Client UAT Testing
                                                    Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/keen/demo3/apps/projects/project.html" class="w-30px me-3"
                                                src="../assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="logistics.html#"
                                                    class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="logistics.html#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="logistics.html#"
                                            class="text-primary fw-bold me-1">#45890</a> in “Ads Pro Admin Dashboard
                                        project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-14.jpg"
                                                alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            title="Marcus Dotson">
                                            <img src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-2.jpg"
                                                alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="logistics.html#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="logistics.html#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="logistics.html#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="logistics.html#"
                                            class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="logistics.html#" class="text-primary fw-bold me-1">Alice
                                                Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="../assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to
                                                    make sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="logistics.html#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="logistics.html#"
                                            class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="logistics.html#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="../pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span
                            class="path1"></span><span class="path2"></span></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="logistics.html#"
                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i> </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="logistics.html#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="logistics.html#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="logistics.html#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="logistics.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="logistics.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="logistics.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="logistics.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a
                                    href="https://keenthemes.com">Keenthemes.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="logistics.html#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
        data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="logistics.html#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="logistics.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="logistics.html#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers--> <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
    <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_engage_demos_header">
                <h3 class="card-title fw-bold text-gray-700">
                    Demos
                </h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                        id="kt_engage_demos_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_engage_demos_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
                    data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">

                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                        <div class="mb-7">
                            <div class="d-flex flex-stack">
                                <h3 class="mb-0">Keen Licenses</h3>

                                <a href="https://themes.getbootstrap.com/licenses/" class="fw-semibold"
                                    target="_blank">
                                    License FAQs
                                </a>
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Standard
                                            License</div>

                                        <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client in a single site which end users are not charged for">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For single site used by you or one client</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-gray-900 fs-1 fw-bold">49</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Multisite
                                            License</div>

                                        <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For unlimited sites used by you or one client</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-gray-900 fs-1 fw-bold">129</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended
                                            License</div>

                                        <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-gray-900 fs-1 fw-bold">429</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->

                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom
                                            License</div>
                                    </div>
                                    <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                </div>

                                <div class="text-nowrap">
                                    <a href="https://keenthemes.com/contact" class="btn btn-sm btn-success"
                                        target="_blank">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->

                        <!--begin::Purchase-->
                        <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/"
                            class="btn btn-primary fw-bold mb-15 w-100">
                            Buy Now
                        </a>
                        <!--end::Purchase-->

                        <!--begin::Demos-->
                        <div class="mb-0">
                            <h3 class="fw-bold text-center mb-6">
                                9
                                Keen
                                Demos
                            </h3>

                            <!--begin::Row-->
                            <div class="row g-5">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo1/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo1/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 1 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo2/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo2/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 2 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo3/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../index.html" class="btn btn-sm btn-success shadow">
                                                Demo 3 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo4/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo4/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 4 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo5/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo5/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 5 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo6/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo6/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 6 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo7/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo7/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 7 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo8/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo8/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 8 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="../assets/media/preview/demos/demo9/light-ltr.png"
                                                alt="demo" class="w-100" />
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/keen/demo9/index.html"
                                                class="btn btn-sm btn-success shadow">
                                                Demo 9 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Demos-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Demos drawer-->



    <!--begin::Help drawer-->
    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Learn & Get Inspired
                </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                        id="kt_help_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">

                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com"
                                class="">devs.keenthemes.com</a></h2>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question
                                and help others.</span>
                            <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Link-->
                        <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
                            Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->

                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/keen/docs"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Documentation </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    From guides and how-tos, to live demos and code examples to get started right away.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/keen/docs/base/utilities"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Plugins & Components </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Check out our 300+ in-house components and customized 3rd-party plugins. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="../layout-builder.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <i class="ki-duotone ki-design text-info fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Layout Builder </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Build your layout, preview it and export the HTML for server side integration.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/keen/docs/getting-started/changelog"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    What's New ? </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Latest features and improvements added with our users feedback in mind. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Help drawer--><!--end::Engage drawers-->

    <!--begin::Engage toolbar-->
    <div
        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">

        <!--begin::Demos drawer toggle-->
        <button id="kt_engage_demos_toggle"
            class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
            title="Check out 9 more demos" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">

            <span id="kt_engage_demos_label">
                Demos
            </span>
        </button>
        <!--end::Demos drawer toggle-->


        <!--begin::Help drawer toggle-->
        <button id="kt_help_toggle" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
            title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
            data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
            Help
        </button>
        <!--end::Help drawer toggle-->


    </div>
    <!--end::Engage toolbar--><!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->
    <!--begin::Modal - Create Campaign-->
    <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content modal-rounded">
                <!--begin::Modal header-->
                <div class="modal-header py-7 d-flex justify-content-between">
                    <!--begin::Modal title-->
                    <h2>Create Campaign</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Campaign Details
                                </h3>
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Creative Uploads
                                </h3>
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Audiences
                                </h3>
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Budget Estimates
                                </h3>
                            </div>
                            <!--end::Step 4-->

                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Completed
                                </h3>
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->

                        <!--begin::Form-->
                        <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                            id="kt_modal_create_campaign_stepper_form">

                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-gray-900">
                                            Setup Campaign Details


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Campaign name will be used as reference within your campaign reports">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span>
                                        </h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please check out
                                            <a href="logistics.html#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label mb-3">Campaign Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text"
                                            class="form-control form-control-lg form-control-solid"
                                            name="campaign_name" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">
                                            <span class="required">Company Logo</span>


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="E.g. Select a logo to represent the company that's running the campaign.">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Image input placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('../assets/media/svg/files/blank-image.svg');
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('../assets/media/svg/files/blank-image-dark.svg');
                                            }
                                        </style>
                                        <!--end::Image input placeholder-->

                                        <!--begin::Image input-->
                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder"
                                            data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"></div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <!--end::Cancel-->

                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->

                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                        <!--end::Label-->

                                        <!--begin::Roles-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role"
                                                    type="radio" value="0"
                                                    id="kt_modal_update_role_option_0" checked='checked' />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bold text-gray-800">Get more visitors</div>
                                                    <div class="text-gray-600">Increase impression traffic onto the
                                                        platform</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div> <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role"
                                                    type="radio" value="1"
                                                    id="kt_modal_update_role_option_1" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                    <div class="text-gray-600">Increase community interaction and
                                                        communication</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div> <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role"
                                                    type="radio" value="2"
                                                    id="kt_modal_update_role_option_2" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bold text-gray-800">Get more calls</div>
                                                    <div class="text-gray-600">Boost telecommunication feedback to
                                                        provide precise and accurate information</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div> <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role"
                                                    type="radio" value="3"
                                                    id="kt_modal_update_role_option_3" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bold text-gray-800">Get more likes</div>
                                                    <div class="text-gray-600">Increase positive interactivity on
                                                        social media platforms</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div> <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role"
                                                    type="radio" value="4"
                                                    id="kt_modal_update_role_option_4" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bold text-gray-800">Lead generation</div>
                                                    <div class="text-gray-600">Collect contact information for
                                                        potential customers</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <!--end::Roles-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Upload Files</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="logistics.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-file-up fs-3hx text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files
                                                        here or click to upload.</h3>
                                                    <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                        files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                        <!--End::Label-->

                                        <!--begin::Files-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/pdf.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
                                                            Specifications</a>
                                                        <div class="fw-semibold text-muted">230kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/tif.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Creative Poster</a>
                                                        <div class="fw-semibold text-muted">2.4mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/folder-document.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Landing Page Source</a>
                                                        <div class="fw-semibold text-muted">1.12mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/css.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
                                                            Page Styling</a>
                                                        <div class="fw-semibold text-muted">85kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/ai.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                            Source Files</a>
                                                        <div class="fw-semibold text-muted">48mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex flex-stack py-4 ">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="../assets/media/svg/files/doc.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="logistics.html#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Plan Document</a>
                                                        <div class="fw-semibold text-muted">27kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                        </div>
                                        <!--end::Files-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Configure Audiences</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="logistics.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Gender


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Show your ads to either men or women, or select 'All' for both">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--End::Label-->

                                        <!--begin::Row-->
                                        <div class="row g-9" data-kt-buttons="true"
                                            data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="campaign_gender" value="1"
                                                            checked="checked" />
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="campaign_gender" value="2" />
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="campaign_gender" value="3" />
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Age


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Select the minimum and maximum age of the people who will find your ad relevant.">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--End::Label-->

                                        <!--begin::Slider-->
                                        <div class="d-flex flex-stack">
                                            <div id="kt_modal_create_campaign_age_min"
                                                class="fs-7 fw-semibold text-muted"></div>
                                            <div id="kt_modal_create_campaign_age_slider"
                                                class="noUi-sm w-100 ms-5 me-8"></div>
                                            <div id="kt_modal_create_campaign_age_max"
                                                class="fs-7 fw-semibold text-muted"></div>
                                        </div>
                                        <!--end::Slider-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Location


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Enter one or more location points for more specific targeting.">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--End::Label-->

                                        <!--begin::Tagify-->
                                        <input class="form-control d-flex align-items-center" value=""
                                            id="kt_modal_create_campaign_location"
                                            data-kt-flags-path="/keen/demo3/assets/media/flags/" />
                                        <!--end::Tagify-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Budget Estimates</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="logistics.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Campaign Duration


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Choose how long you want your ad to run for">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Duration option-->
                                        <div class="d-flex gap-9 mb-7">
                                            <!--begin::Button-->
                                            <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
                                                id="kt_modal_create_campaign_duration_all">
                                                Continuous duration<br />
                                                <span class="fs-7">Your ad will run continuously for a daily
                                                    budget.</span>
                                            </button>
                                            <!--end::Button-->

                                            <!--begin::Button-->
                                            <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
                                                id="kt_modal_create_campaign_duration_fixed">
                                                Fixed duration<br />
                                                <span class="fs-7">Your ad will run on the specified dates
                                                    only.</span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Duration option-->

                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid d-none"
                                            placeholder="Pick date & time"
                                            id="kt_modal_create_campaign_datepicker" />
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input group-->


                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Daily Budget


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Choose the budget allocated for each day. Higher budget will generate better results">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Slider-->
                                        <div class="d-flex flex-column text-center">
                                            <div class="d-flex align-items-start justify-content-center mb-7">
                                                <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                                <span class="fw-bold fs-3x"
                                                    id="kt_modal_create_campaign_budget_label"></span>
                                                <span class="fw-bold fs-3x">.00</span>
                                            </div>
                                            <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
                                        </div>
                                        <!--end::Slider-->

                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12 text-center">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Campaign Created!</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="fw-semibold text-muted fs-4">
                                            You will receive an email with with the summary of your newly created
                                            campaign!
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center pb-20">
                                        <button id="kt_modal_create_campaign_create_new" type="button"
                                            class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                                            Create New Campaign
                                        </button>

                                        <a href="logistics.html" class="btn btn-lg btn-primary"
                                            data-bs-toggle="tooltip" title="Coming Soon">
                                            View Campaign
                                        </a>
                                    </div>
                                    <!--end::Actions-->

                                    <!--begin::Illustration-->
                                    <div class="text-center px-4">
                                        <img src="../assets/media/illustrations/sketchy-1/9.png" alt=""
                                            class="mww-100 mh-350px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1"><span
                                                class="path1"></span><span class="path2"></span></i> Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">
                                        Continue
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span
                                                class="path1"></span><span class="path2"></span></i> </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--begin::Modal body-->
            </div>
        </div>
    </div>
    <!--end::Modal - Create Campaign--><!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_bidding_form" class="form" action="logistics.html#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Place your bids</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                If you need more info, please check <a href="logistics.html#"
                                    class="fw-bold link-primary">Bidding Guidelines</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Bid Amount</span>


                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="Specify the bid amount to place in.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <!--begin::Bid options-->
                            <div class="d-flex flex-stack gap-5 mb-3">
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">10</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">50</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">100</button>
                            </div>
                            <!--begin::Bid options-->

                            <input type="text" class="form-control form-control-solid"
                                placeholder="Enter Bid Amount" name="bid_amount" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Currency Type</span>


                                <span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true" name="currency_type"
                                data-placeholder="Select a Currency Type" name="currency_type">
                                <option value=""></option>
                                <option value="dollar" selected>Dollar</option>
                                <option value="crypto">Crypto</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->


                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Currency</span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Dollar type-->
                            <div class="" data-kt-modal-bidding-type="dollar">
                                <!--begin::Select2-->
                                <select name="currency_dollar" aria-label="Select a Currency"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="flags/united-states.svg"
                                        value="USD" selected><b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg"
                                        value="GBP"><b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                    <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
                                        <b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
                                        <b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                                    <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
                                        <b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                    <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
                                        <b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/switzerland.svg"
                                        value="CHF"><b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Dollar type-->

                            <!--begin::Crypto type-->
                            <div class="d-none" data-kt-modal-bidding-type="crypto">
                                <!--begin::Select2-->
                                <select name="currency_crypto" aria-label="Select a Coin"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1"
                                        selected>Bitcoin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg"
                                        value="2">Binance</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg"
                                        value="3">Chainlink</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">
                                        Coin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg"
                                        value="5">Ethereum</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg"
                                        value="6">Filecoin</option>

                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Crypto type-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Notice-->

                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-wallet fs-2tx text-primary me-4"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i> <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Top up funds</h4>

                                    <div class="fs-6 text-gray-700 "> Not enough funds in your wallet? <a
                                            href="../utilities/modals/wizards/top-up-wallet.html"
                                            class="text-bolder">Top up wallet</a>.</div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
    <!--begin::Modal - View Users-->
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Browse Users</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out our
                            <a href="logistics.html#" class="link-primary fw-bold">Users Directory</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Users-->
                    <div class="mb-15">
                        <!--begin::List-->
                        <div class="mh-375px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Smith

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Art Director </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Melody Macy

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Analytic </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$50,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Max Smith

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Enginer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$75,900</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Sean Bean

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Developer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$10,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Brian Cox

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                UI/UX Designer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$20,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Mikaela Collins

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Head Of Marketing </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$9,300</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Francis Mitcham

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Arcitect </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$15,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Olivia Wild

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                System Admin </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Neil Owen

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Account Manager </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,800</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Dan Wilson

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Desinger </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$90,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Bold

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Corporate Finance </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$5,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Ana Crown

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Customer Relationship </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$70,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="logistics.html#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Robert Doe

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Executive </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Label-->
                        <div class="fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>

                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value=""checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                        data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                            autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                    class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value=""
                                placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="logistics.html#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="logistics.html#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="logistics.html#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="logistics.html#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="logistics.html#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="logistics.html#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset"
                                        data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit"
                                        class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...
                                    </div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="../assets/media/illustrations/sketchy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="logistics.html#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="../assets/media/svg/brand-logos/google-icon.svg"
                            class="h-20px me-3" />
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="https://preview.keenthemes.com/keen/demo3/assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="logistics.html#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "/keen/demo3/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="../assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../assets/js/widgets.bundle.js"></script>
    <script src="../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="../assets/js/custom/utilities/modals/bidding.js"></script>
    <script src="../assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
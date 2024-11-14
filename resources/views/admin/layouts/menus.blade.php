<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <div class="app-sidebar-logo d-none d-md-block pt-7 px-8 pt-xl-11 mb-2" id="kt_app_sidebar_logo">
        <a href="#">
            <img alt="Logo" src="{{ asset('back') }}/assets/media/logos/logo.png"
                class="h-35px theme-light-show" />
            <img alt="Logo" src="{{ asset('back') }}/assets/media/logos/logo-dark.png"
                class="h-35px theme-dark-show" />
        </a>
    </div>
    <div class="app-sidebar-menu app-sidebar-menu-arrow overflow-hidden flex-column-fluid mb-5"
        id="kt_app_sidebar_menu">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 mx-3" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <div data-kt-menu-trigger="click"
                    class="menu-item here {{ Request::is('dashboard') ? 'show' : '' }} menu-accordion">
                    <span class="menu-link"><span class="menu-icon"><i
                                class="ki-duotone ki-black-right fs-3"></i></span><span class="menu-title">Tableau de
                            bord</span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item"><a class="menu-link {{ Request::is('dashboard') ? 'active' : '' }}"
                                href="{{ url('dashboard') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Tableau de
                                    bord</span></a>
                        </div>
                    </div>
                </div>
                <br>
                <small class="text-gray-600 fw-semibold lh-base">
                    Site web
                </small>
                <div data-kt-menu-trigger="click"
                    class="menu-item here {{ Request::is('slide') ? 'show' : '' }} menu-accordion">
                    <span class="menu-link"><span class="menu-icon"><i
                                class="ki-duotone ki-black-right fs-3"></i></span><span
                            class="menu-title">Accueil</span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item"><a class="menu-link {{ Request::is('slide') ? 'active' : '' }}"
                                href="{{ url('slide') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Slide</span></a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item here {{ Request::is('contacts') ? 'show' : '' }}{{ Request::is('messages') ? 'show' : '' }} menu-accordion">
                    <span class="menu-link"><span class="menu-icon"><i
                                class="ki-duotone ki-black-right fs-3"></i></span><span
                            class="menu-title">Contacts</span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item"><a class="menu-link {{ Request::is('contacts') ? 'active' : '' }}"
                                href="{{ url('contacts') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Nos
                                    contacts</span></a>
                        </div>
                        <div class="menu-item"><a class="menu-link {{ Request::is('messages') ? 'active' : '' }}"
                                href="{{ url('messages') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Message</span></a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('clients') ? 'active' : '' }}"
                        href="{{ url('clients') }}"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">
                            Nos clients</span></a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('membres') ? 'active' : '' }}" href="{{ url('membres') }}"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">Équipes</span></a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('candidature') ? 'active' : '' }}"
                        href="{{ url('candidature') }}"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Candidature</span></a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('footer') ? 'active' : '' }}" href="{{ url('footer') }}"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">Footer</span></a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('realisation') ? 'active' : '' }}" href="{{ url('realisation') }}"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">Projets</span></a>
                </div>
                <br><br><br>
                <div class="menu-item">
                    <a class="menu-link" href="{{ url('aptiotech') }}">
                        <span class="menu-icon"><i class="ki-duotone ki-entrance-right fs-3" style="color: red">
                                <span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <span class="menu-title" style="color: red">Se déconnecter</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="app-sidebar-footer position-relative bg-light flex-column-auto m-6 mb-10 rounded-4"
        id="kt_app_sidebar_footer">
        <div class="text-center p-9">
            <small class="text-gray-600 text-center fw-semibold mb-7 lh-base">
                Ensemble, créons des applications qui marquent
            </small>
        </div>
    </div>
</div>

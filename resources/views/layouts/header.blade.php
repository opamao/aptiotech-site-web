 <!-- Header Start  -->
 <div id="header" class="section header-section">

    <div class="header-bottom-section">
        <div class="container">
            <!-- Header Wrap Start  -->
            <div class="header-wrap">

                <div class="header-logo">
                    <a href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
                </div>

                <div class="header-menu d-none d-lg-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ Request::is('/') ? 'active-menu' : '' }}"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="{{ Request::is('about') ? 'active-menu' : '' }}"><a href="{{ url('about') }}">Apropos</a></li>
                                <li class="{{ Request::is('teams') ? 'active-menu' : '' }}"><a href="{{ url('teams') }}">Équipe</a></li>
                                <li class="{{ Request::is('carrier') ? 'active-menu' : '' }}{{ Request::is('carrier-detail') ? 'active-menu' : '' }}"><a href="{{ url('carrier') }}">Carrière</a></li>
                                <li class="{{ Request::is('projects') ? 'active-menu' : '' }}"><a href="{{ url('projects') }}">Projets</a></li>
                                <li class="{{ Request::is('contact') ? 'active-menu' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Header Wrap End  -->
        </div>
    </div>
</div>
<!-- Header End -->

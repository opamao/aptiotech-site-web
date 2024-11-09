@extends('layouts.master', [
    'titre' => 'Accueil',
])
@section('content')
    <!-- Hero Start -->
    <div class="section blusion-hero-section d-flex align-items-center"
        style="background-image: url(assets/images/hero.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <p class="text" data-aos="fade-up" data-aos-delay="800" style="font-size: 35px">Nous construisons des
                            produits </p>
                        <div class="hero-list-wrap" data-aos="fade-up" data-aos-delay="900">
                            <div class="list-item">
                                <p style="font-size: 35px">exceptionnels</p>
                            </div>
                        </div>
                        <h2 class="title" data-aos-delay="600" data-aos="fade-up">
                            Applications Web & Mobiles
                        </h2>
                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="1000">
                            <a class="btn" href="{{ url('contact') }}">Travaillons ensemble</a>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="section blusion-service-section section-padding-02">
        <div class="container">
            <!-- Service Wrap Start -->
            <div class="service-wrap">
                <div class="section-title">
                    <span class="sub-title">Considérez-nous comme une extension de votre équipe.</span>
                    <h2 class="title">Ce que nous faisons</h2>
                </div>
                <div class="service-content-wrap">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Service Item Start -->
                            <div class="service-item">
                                <div class="shape-1">
                                    <img src="assets/images/shape/ser-sh1.png" alt="">
                                </div>
                                <div class="service-icon">
                                    <img src="assets/images/ser-icon1.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="#">Développement d'applications</a></h3>
                                    <p>
                                        Nous sommes fiers d'être des développeurs axés sur les tests qui se concentrent sur
                                        l'écriture de code propre et maintenable. Nos développeurs apprennent constamment de
                                        nouvelles techniques et de nouveaux concepts qui leur permettent d'avoir une
                                        longueur d'avance et peuvent vous aider à partager ces connaissances avec votre
                                        équipe. Le jumelage et le mobbing sont des pratiques que nous utilisons
                                        quotidiennement car nous sommes fiers de notre travail et nous apprécions
                                        l'opportunité d'enseigner et d'apprendre avec nos pairs.
                                    </p>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Service Item Start -->
                            <div class="service-item">
                                <div class="shape-1">
                                    <img src="assets/images/shape/ser-sh2.png" alt="">
                                </div>
                                <div class="service-icon">
                                    <img src="assets/images/ser-icon1.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="#">Leadership technique</a></h3>
                                    <p>
                                        Nous sommes fiers de fournir un code exceptionnel et nous facilitons cela lorsque
                                        nous travaillons avec nos clients. Notre équipe est composée d'experts qui vous
                                        aideront à guider votre équipe dans la création de produits dont vous pouvez être
                                        fier.
                                    </p>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Service Item Start -->
                            <div class="service-item">
                                <div class="shape-1">
                                    <img src="assets/images/shape/ser-sh3.png" alt="">
                                </div>
                                <div class="service-icon">
                                    <img src="assets/images/ser-icon1.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="#">Conception de produit</a>
                                    </h3>
                                    <p>
                                        Nous pratiquons une conception centrée sur l'utilisateur. Lors de la planification,
                                        de la conception et de la construction, nous nous efforçons de résoudre d'abord le
                                        problème de l'utilisateur, afin que vos objectifs commerciaux soient atteints.
                                        Ainsi, vos utilisateurs bénéficieront d'un logiciel à la fois intuitif et
                                        esthétique.
                                    </p>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Wrap End -->
        </div>
    </div>
    <!-- Service End -->

    <!-- Marquee Start -->
    <div class="section blusion-marquee-section section-padding-02">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="slider__marquee">
                <div class="marquee_mode">
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="index.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Business</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <div class="item">
                        <a href="index.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Consulting</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="index.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Research</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="index.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Analysis</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Marquee End -->

    <!-- Brand Logo Start -->
    <div class="section blusion-brand-section section-padding-02">
        <div class="section-title2 text-center">
            <h2 class="title"> Nos clients </h2>
            <h4 class="">
                Nous avons travaillé avec des clients de toutes tailles : de la start-up à l'entreprise, en passant par
                toutes les autres. Voici quelques-uns de nos clients.
            </h4>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <!-- Brand Wrapper Start -->
            <div class="brand-wrapper text-center">
                <!-- Brand Active Start -->
                <div class="brand-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-1.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-2.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-3.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-4.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-5.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-2.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                        </div>
                    </div>
                </div>
                <!-- Brand Active End -->
            </div>
            <!-- Brand Wrapper End -->
        </div>
        <br>
        <br>
        <br>
    </div>
    <!-- Brand Logo End -->
    <br>
    <!-- Subscribe Start -->
    <div class="section blusion-subscribe-section">
        <div class="container">
            <div class="subscribe-wrap">
                <div class="shape-1">
                    <img src="assets/images/shape/subs-sh1.png" alt="">
                </div>
                <div class="shape-2">
                    <img src="assets/images/shape/subs-sh2.png" alt="">
                </div>
                <div class="align-items-center">
                    <div class="col-lg-12">
                        <div class="subscribe-content text-center">
                            <h3 class="title">Cela semble intéressant ?</h3>
                            <h4>
                                AptioTech recrute activement des développeurs.
                                Rejoignez-nous pour un appel de bienvenue dès aujourd'hui !
                            </h4>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12 text-center">
                        <a class="btn" href="{{ url('carrier-detail') }}">Travaillez avec nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- Blog Start -->
    <div class="section blusion-blog-section section-padding">
    </div>
    <!-- Blog End -->
@endsection

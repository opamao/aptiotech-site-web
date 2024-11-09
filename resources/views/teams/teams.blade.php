@extends('layouts.master', [
    'titre' => 'Notre equipe',
])
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section">
        <div class="container">
            <div class="page-banner-wrap">
                <div class="shape-1">
                    <img src="assets/images/shape/banner-sh1.png" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Banner Content Start -->
                        <div class="page-banner">
                            <h2 class="title">Notre équipe</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu" aria-current="page">Notre équipe</li>
                            </ul>
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Subscribe Start -->
    <div class="section blusion-subscribe-section blusion-subscribe-section-02 section-padding">
        <div class="container">
            <div class="subscribe-wrap">
                <div class="shape-1">
                    <img src="assets/images/shape/subs-sh1.png" alt="">
                </div>
                <div class="shape-2">
                    <img src="assets/images/shape/subs-sh2.png" alt="">
                </div>
                <div class=" align-items-center">
                    <div class="col-lg-12">
                        <div class="subscribe-content text-center">
                            <h3 class="title">Notre équipe</h3>
                            <h4>
                                Nous sommes une communauté de développeurs et de designers, unis par une passion commune
                                pour la création de produits logiciels de qualité, où chaque membre apporte sa pierre à
                                l'édifice.
                            </h4>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12 text-center">
                        <a class="btn" href="{{ url('carrier-detail') }}">Rejoignez notre équipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- Team Start -->
    <div class="section blusion-team-section blusion-team-section-02 section-padding">
        <div class="container">
            <!-- Team Wrap Start -->
            <div class="team-wrap team-grid-wrap">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <!-- Single Team Start -->
                        <div class="single-team-02">
                            <div class="team-image">
                                <a href="#"><img src="assets/images/team/team-5.jpg" alt="team"></a>
                            </div>
                            <div class="team-content">
                                <h4 class="name"><a href="#">Théodore YAPI</a></h4>
                                <p class="designation">Directeur Technique</p>
                            </div>
                        </div>
                        <!-- Single Team End -->
                    </div>
                </div>
            </div>
            <!-- Team Wrap End -->
        </div>
    </div>
    <!-- Team End -->
@endsection

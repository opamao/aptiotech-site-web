@extends('layouts.master', [
    'titre' => 'Emplois',
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
                            <h2 class="title">Emplois</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu" aria-current="page">Emplois</li>
                            </ul>
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <div class="section blusion-about-section-02 section-padding-02">
        <div class="container">
            <div style="border: groove;border-radius: 10px;padding: 20px;">
                <h3 class="title">Emplois</h3>
                <p>
                    AptioTech investit dans ses clients et ses employés. Si vous êtes quelqu'un désireux d'apprendre, de
                    collaborer avec les autres et de produire d'excellents résultats, alors postulez dès aujourd'hui pour
                    rejoindre notre équipe en pleine croissance !
                </p>
            </div>
        </div>
    </div>

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
                            <h3 class="title">Promoteur</h3>
                            <h4>
                                En tant que nouveau membre de notre équipe, vous contribuerez à la création des interfaces,
                                des comportements, de l'architecture et de la qualité du code d'applications Web et mobiles
                                haut de gamme. Vous suivrez les projets des clients nouveaux et existants du début à la fin
                                tout en travaillant en étroite collaboration avec ces clients ainsi qu'avec votre équipe.
                                Chez AptioTech, la programmation en groupe est une grande partie de nos processus et de notre
                                façon de travailler. Vous travaillerez quotidiennement avec d'autres développeurs de notre
                                équipe pour produire un code propre avec efficacité et finesse.
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
@endsection

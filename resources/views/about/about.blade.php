@extends('layouts.master', [
    'titre' => 'Apropos',
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
                            <h2 class="title">Apropos de nous</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu">Apropos de nous</li>
                            </ul>
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- About Start -->
    <div class="section blusion-about-section section-padding">
        <div class="container">
            <!-- About Wrap Start -->
            <div class="about-wrap">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- About Content Start -->
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title">Apropos de nous</span>
                                <h2 class="title">Ce que nous faisons</h2>
                            </div>
                            <p class="text">
                                Nous sommes une société de conseil en logiciels. Nous
                                créons des applications Web & Mobiles de premier ordre écrites avec des frameworks
                                populaires tels que
                                Laravel, Express, NestJS, Vue et Flutter. Considérez-nous comme une extension de votre
                                équipe.
                            </p>
                        </div>
                        <!-- About Content End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- About Image Start -->
                        <div class="about-img-wrap">
                            <div class="about-img image-1">
                                <div class="shape-1">
                                    <img src="assets/images/shape/ab-shape1.png" alt="">
                                </div>
                                <img src="assets/images/ab-img1.jpg" alt="">
                            </div>
                            <div class="about-img image-2">
                                <img src="assets/images/ab-img2.jpg" alt="">
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
            <!-- About Wrap End -->
        </div>
    </div>
    <!-- About End -->

    <!-- Counter Start -->
    <div class="section blusion-counter-section section-padding"
        style="background-image: url(assets/images/bg/counter-bg2.jpg);">
        <div class="container">
            <!-- Counter Wrap Start -->
            <div class="counter-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Counter Left Start -->
                        <div class="counter-left">
                            <div class="section-title">
                                <h2 class="title">Comment nous travaillons </h2>
                            </div>
                            <p class="text">
                                L'équipe de AptioTech travaille en collaboration au quotidien pour produire des résultats
                                tangibles et de qualité. Jetez un œil à la façon dont nous travaillons pour accomplir le
                                travail et progresser au fil du temps.
                            </p>
                        </div>
                        <!-- Counter Left End -->
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-content-wrap">
                            <h3 class="title">Notre processus</h3>
                            <p>
                                Nous offrons un environnement bienveillant qui permet à notre équipe de se concentrer sur la
                                croissance et de travailler en collaboration pour fournir un code de haute qualité.
                            </p>
                            <div class="skill-bar-wrap">
                                <!--  Skill Item Start  -->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h5 class="skill-title">1. Bienveillance</h5>
                                    </div>
                                </div>
                                <!--  Skill Item End  -->
                                <!--  Skill Item Start  -->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h5 class="skill-title">2. Croissance</h5>
                                    </div>
                                </div>
                                <!--  Skill Item End  -->
                                <!--  Skill Item Start  -->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h5 class="skill-title">3. Livraison</h5>
                                    </div>
                                </div>
                                <!--  Skill Item End  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Wrap End -->
        </div>
    </div>
    <!-- Counter End -->

    <!-- Marquee Start -->
    <div class="section blusion-marquee-section section-padding-02">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="slider__marquee">
                <div class="marquee_mode">
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="about.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Business</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <div class="item">
                        <a href="about.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Consulting</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="about.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Research</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                    <!-- Marquee Item Start -->
                    <div class="item">
                        <a href="about.html#"><img src="assets/images/shape/line-sh.png" alt="img">
                            <span class="text-stroke"> Analysis</span>
                        </a>
                    </div>
                    <!-- Marquee Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Marquee End -->

    <div class="section blusion-about-section-02 section-padding-02">
        <div class="container">
            <!-- About Wrap Start -->
            <div class="about-wrap">
                <div class="section-title2 text-center">
                    <h2 class="title"> Bienveillance </h2>
                    <h4 class="">
                        L'attention est la base d'un état d'esprit de croissance. C'est grâce à un feedback
                        constant et à un environnement favorable que notre équipe et nos clients se sentent
                        appréciés et entendus.
                    </h4>
                </div>
                <div class="about-content-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <img src="assets/images/ab-img3.jpg" alt="">
                            </div>
                            <!-- About Image End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <h3 class="title"> Une équipe avec nos clients </h3>
                                <br>
                                <p class="text">
                                    En tant que client, notre objectif est de faire en sorte que votre équipe soit perçue
                                    comme une superstar par vos parties prenantes ! Nous agissons comme une seule équipe
                                    avec vous et partageons votre succès.
                                    <br>
                                    <br>
                                    Nous fournissons des commentaires constructifs et un environnement favorable qui permet
                                    aux membres de notre équipe de produire d'excellents résultats.
                                </p>
                            </div>
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>
                <div class="about-content-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <h3 class="title"> Construire une carrière </h3>
                                <br>
                                <p class="text">
                                    En tant que développeur, vous travaillerez dans un environnement où vous apprendrez
                                    constamment et bénéficierez d'une équipe qui vous accompagnera dans votre évolution.
                                    Grâce à nos possibilités de stage et d'emploi, nous visons à offrir un travail
                                    enrichissant qui aide les étudiants, les diplômés et les professionnels à développer les
                                    compétences dont ils ont besoin pour poursuivre leurs objectifs professionnels dans un
                                    environnement passionnant.
                                    <br>
                                    <br>
                                    Vous réfléchirez chaque semaine avec votre chef d'équipe pour exprimer ce que vous
                                    pensez du projet actuel sur lequel vous travaillez, de l'environnement dans lequel vous
                                    travaillez et des autres intérêts que vous pourriez avoir.
                                    <br>
                                    <br>
                                    Nous commençons et terminons nos journées avec ces valeurs en tête, et nous souhaitons
                                    que ceux qui rejoignent notre équipe et ceux qui travaillent avec nous partagent cet
                                    état d’esprit.
                                </p>
                            </div>
                            <!-- About Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <img src="assets/images/carriere.jpeg" alt="">
                            </div>
                            <!-- About Image End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Wrap End -->
        </div>
    </div>

    <div class="section blusion-about-section-02 section-padding-02">
        <div class="container">
            <!-- About Wrap Start -->
            <div class="about-wrap">
                <div class="section-title2 text-center">
                    <h2 class="title"> Croissance </h2>
                    <h4 class="">
                        La croissance est l’investissement quotidien que nous faisons pour améliorer notre expertise
                        collective tout en construisant des relations durables.
                    </h4>
                </div>
                <div class="about-content-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="skill-content-wrap" style="border: groove;">
                                <h3 class="title">Séances de croissance</h3>
                                <p>
                                    Chaque jour, nous consacrons entre une heure et une heure et demie au développement
                                    personnel ou en équipe. Les séances de croissance peuvent être axées sur un projet, sur
                                    des défis ou sur une séance qui favorise la croissance, l'apprentissage et le partage
                                    des connaissances avec les membres de notre équipe.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-content-wrap" style="border: groove;">
                                <h3 class="title">Collaboration</h3>
                                <p>
                                    La collaboration est au cœur du travail d'équipe, et chez AptioTech, nous aspirons à
                                    partager cette approche avec nos clients.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="skill-content-wrap row">
                            <h3 class="title">Les 3 rôles sont</h3>
                            <div class="col-lg-4">
                                <div class="skill-content-wrap" style="border: groove;">
                                    <h4 class="">Navigateur</h4>
                                    <p>
                                        Fournit des orientations de haut niveau au conducteur.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="skill-content-wrap" style="border: groove;">
                                    <h4 class="">Conducteur</h4>
                                    <p>
                                        Utilise le dispositif d'entrée intelligent pour mettre en œuvre les intentions du
                                        navigateur.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="skill-content-wrap" style="border: groove;">
                                    <h4 class="">Équipe</h4>
                                    <p>
                                        Le reste du groupe qui observe et intervient si nécessaire.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h5>
                            Les rôles alternent tout au long de la séance, et chaque rotation dure de 2 à 10 minutes.
                            <br>
                            <br>
                            Nous sommes fiers de nos séances de collaboration quotidiennes, car elles facilitent le
                            transfert de connaissances, réduisent les blocages pour les développeurs et ajoutent plusieurs
                            perspectives nouvelles à un projet ou à une tâche.
                        </h5>
                    </div>
                </div>
            </div>
            <!-- About Wrap End -->
        </div>
    </div>

    <div class="section blusion-about-section-02 section-padding-02">
        <div class="container">
            <!-- About Wrap Start -->
            <div class="about-wrap">
                <div class="section-title2 text-center">
                    <h2 class="title"> Livraison </h2>
                    <h4 class="">
                        La livraison est le code propre et le travail de conception cohérent que nous apportons à nos
                        clients.
                    </h4>
                </div>
                <div class="about-content-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <img src="assets/images/livre.png" alt="">
                            </div>
                            <!-- About Image End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <h3 class="title"> Comment nous livrons </h3>
                                <br>
                                <p class="text">
                                    AptioTech agit comme une extension d'autres équipes de développement. Nous créons des
                                    applications Web & Mobiles de premier ordre en mettant l'accent sur le développement
                                    piloté par
                                    les tests.
                                    <br>
                                    <br>
                                    Nous collaborons avec nos clients et utilisons la programmation en équipe pour fournir
                                    un code de qualité à un rythme soutenu. Travailler ensemble nous permet d'éliminer
                                    rapidement les obstacles et de réduire le temps de révision du code. Chaque semaine,
                                    nous nous concentrons sur la livraison de fonctionnalités apportant une réelle valeur
                                    commerciale aux parties prenantes.
                                </p>
                            </div>
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Wrap End -->
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
@endsection

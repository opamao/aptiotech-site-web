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

    @include('layouts.status')

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
            <h3 class="title">Promoteur</h3>
            <p>
                En tant que nouveau membre de notre équipe, vous contribuerez à la création des interfaces, des
                comportements, de l'architecture et de la qualité du code d'applications Web et mobiles haut de gamme. Vous
                suivrez les projets des clients nouveaux et existants du début à la fin tout en travaillant en étroite
                collaboration avec ces clients ainsi qu'avec votre équipe. Chez AptioTech, la programmation en groupe est
                une
                grande partie de nos processus et de notre façon de travailler. Vous travaillerez quotidiennement avec
                d'autres développeurs de notre équipe pour produire du code propre avec efficacité et finesse. En tant que
                société de conseil en logiciels spécialisée dans PHP et JavaScript, nous recherchons une personne ayant de
                l'expérience dans l'utilisation des outils, langages et frameworks suivants :
                <br>
                <br>
                <li>HTML, CSS</li>
                <li>JavaScript, TypeScript, Flutter, Vue, Node, Nest, Express</li>
                <li>PHP, Laravel</li>
                <li>NoSQL, SQL, MySql</li>
            </p>
            <br><br>
            <h3 class="title">Le quotidien d'un développeur chez AptioTech</h3>
            <p>
                <li>Se concentrer sur la mise en œuvre du développement ; l'intégration continue, la révision du code, la
                    programmation en binôme, la programmation en groupe, etc.</li>
                <li>Développer et maintenir des applications Web et mobiles de bout en bout; de ce que l'utilisateur voit
                    au code sur le serveur</li>
                <li>Participez quotidiennement aux séances de croissance de AptioTech - un espace créatif qui favorise la
                    croissance, l'apprentissage et le partage des connaissances</li>
                <li>Mise en œuvre des fonctionnalités de l'application, des API RESTful et des modifications de l'interface
                    utilisateur</li>
                <li>Écrivez du code propre et maintenable à l'aide de TDD</li>
                <li>Compiler, comprendre et analyser les besoins de nos clients</li>
                <li>Excellentes compétences en communication verbale et écrite avec la capacité de présenter des
                    informations techniques complexes</li>
                <li>Participer aux réunions clients</li>
                <li>Valider et vérifier si les applications nouvellement développées sont conformes aux intentions du
                    projet, restent cohérentes avec le code actuel et optimisent si nécessaire</li>
                <li>Documenter les avancées clés pour permettre un transfert fluide des connaissances entre les autres
                    développeurs et le client afin de comprendre la nouvelle application et ses fonctionnalités</li>
                <li>Mentorat, orientation et travail avec les développeurs</li>

            </p>
            <br><br>
            <h3 class="title">Qualifications</h3>
            <p>
                <li>Connaissance approfondie des composants back-end et du développement front-end</li>
                <li>Expérience en composition d'interfaces, gestion d'état, bon sens du design</li>
                <li>Capacité à comprendre et à prendre en compte les besoins des utilisateurs</li>
                <li>Ingéniosité, initiative et capacité à résoudre les problèmes grâce à des solutions élégantes et
                    innovantes</li>
                <li>Dévouement à la production d'un travail de qualité démontré tout au long du cycle de développement</li>
                <li>Solides compétences interpersonnelles et de communication</li>
                <li>Capacité à travailler en équipe</li>
                <li>Capacité d'adaptation au changement</li>
                <li>Axé sur les résultats</li>
            </p>
            <br><br>
            <h3 class="title">Agréables à avoir</h3>
            <p>
                <li>Expérience avec les technologies de conteneurs et l'orchestration ; Docker, Kubernetes, etc.</li>
                <li>Compréhension des problèmes de performance et d'évolutivité dans les applications</li>
                <li>Expérience de travail avec des systèmes distribués</li>
                <li>Un membre actif de la communauté ; défenseur des développeurs dans les communautés en ligne et locales
                </li>
                <li>Capacité à diriger et à participer aux réunions clients en agissant en tant que chef de projet et
                    porte-parole de l'équipe de développement</li>
            </p>
            <br><br>
            <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6">
                    <div class="single-form">
                        <input required name="nom" type="text" placeholder="Votre nom *">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="single-form">
                        <input name="email" required type="email" placeholder="E-mail *">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="single-form">
                        <input type="text" name="github" placeholder="Github">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="single-form">
                        <input type="text" name="linkedin" placeholder="LinkedIn">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="single-form">
                        <label for="cv">Votre CV *</label>
                        <input required id="cv" type="file" name="cv" placeholder="cv">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="single-form">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-btn">
                        <button class="btn" type="submit">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.master', [
    'titre' => 'Projets',
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
                            <h2 class="title">Project</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu" aria-current="page">Projets</li>
                            </ul>
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Project Start -->
    <div class="section blusion-project-section blusion-project-section-03 section-padding">
        <div class="container">
            <!-- Project Wrap Start -->
            <div class="project-wrap">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Project Left Start -->
                        <div class="project-left-side">
                            <!-- Project Item Start -->
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="assets/images/pro-1.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Take & Go</a></h3>

                                </div>
                            </div>
                            <!-- Project Item End -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Project Item Start -->
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="assets/images/pro-2.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                        </div>
                                    </div>
                                    <!-- Project Item End -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Project Item Start -->
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="assets/images/pro-3.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                        </div>
                                    </div>
                                    <!-- Project Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Project Left End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Project Right Start -->
                        <div class="project-right-side">
                            <!-- Project Item Start -->
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="assets/images/pro-4.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                </div>
                            </div>
                            <!-- Project Item End -->
                            <!-- Project Item Start -->
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="assets/images/pro-5.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        <!-- Project Right End -->
                    </div>
                    <div class="col-lg-8">
                        <!-- Project Left Start -->
                        <div class="project-left-side">
                            <!-- Project Item Start -->
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="assets/images/pro-8.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        <!-- Project Left End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Project Right Start -->
                        <div class="project-right-side">
                            <!-- Project Item Start -->
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="assets/images/pro-9.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Optimize Your Business</a></h3>

                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        <!-- Project Right End -->
                    </div>
                </div>
            </div>
            <!-- Project Wrap End -->
        </div>
    </div>
    <!-- Project End -->
@endsection

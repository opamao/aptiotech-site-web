@extends('layouts.master', [
    'titre' => 'Contact',
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
                            <h2 class="title">Contact</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu" aria-current="page">Contact</li>
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
    <!-- Contact Start -->
    <div class="section blusion-contact-section section-padding">
        <div class="container">
            <!-- Contact Wrap Start -->
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <!-- Contact Info Wrap Start -->
                        <div class="contact-info-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Single Contact Info Start -->
                                    <div class="single-contact-info text-center">
                                        <div class="info-icon">
                                            <i class="flaticon-send"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">E-mail</h5>
                                            <p>{{ $contact->email_cont }}</p>
                                        </div>
                                    </div>
                                    <!--Single Contact Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!--Single Contact Info Start -->
                                    <div class="single-contact-info text-center">
                                        <div class="info-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Contacts</h5>
                                            <p>{{ $contact->phone_cont }}</p>
                                        </div>
                                    </div>
                                    <!--Single Contact Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!--Single Contact Info Start -->
                                    <div class="single-contact-info text-center">
                                        <div class="info-icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Date</h5>
                                            <p>{{ $contact->travail_cont }}</p>
                                        </div>
                                    </div>
                                    <!--Single Contact Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!--Single Contact Info Start -->
                                    <div class="single-contact-info text-center">
                                        <div class="info-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Localisation</h5>
                                            <p>{{ $contact->local_cont }}</p>
                                        </div>
                                    </div>
                                    <!--Single Contact Info End -->
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Wrap End -->
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <div class="contact-form-wrap">
                                <h3 class="title">Envoyez un message</h3>
                                <form action="{{ route('messages.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input name="nom" type="text" placeholder="Votre nom">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input required name="email" type="email" placeholder="E-mail *">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input name="phone" type="text" placeholder="Téléphone">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <textarea required name="message" placeholder="Ecris ton message *"></textarea>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!--  Single Form Start -->
                                            <div class="form-btn">
                                                <button class="btn" type="submit">Envoyez le message</button>
                                            </div>
                                            <!--  Single Form End -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
            <!-- Contact Wrap End -->
        </div>
    </div>
    <!-- Contact End -->

    <!-- Contact Map Start -->
    <div class="section contact-map-section">
        <div class="contact-map-wrap">
            <iframe id="gmap_canvas"
                src="{{ $contact->map_cont }}"></iframe>
        </div>
    </div>

    <!-- Contact Map End -->
@endsection

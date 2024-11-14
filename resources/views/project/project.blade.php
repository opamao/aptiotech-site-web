@extends('layouts.master', [
    'titre' => 'Projets',
])
@section('content')
    <div class="section page-banner-section">
        <div class="container">
            <div class="page-banner-wrap">
                <div class="shape-1">
                    <img src="assets/images/shape/banner-sh1.png" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner">
                            <h2 class="title">Project</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="breadcrumb-item active-menu" aria-current="page">Projets</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section blusion-project-section blusion-project-section-03 section-padding">
        <div class="container">
            <div class="project-wrap">
                <div class="row">
                    @foreach ($projet as $item)
                        <div class="col-lg-6">
                            <div class="project-left-side">
                                <div class="project-item">
                                    <div class="project-img">
                                        <a href="#"><img src="{{ asset('projets') . '/' . $item->photo_pro }}"
                                                alt=""></a>
                                    </div>
                                    <div class="project-content">
                                        <h3 class="title"><a href="#">{{ $item->libelle_pro }}</a></h3>
                                        {{ $item->descripton_pro }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

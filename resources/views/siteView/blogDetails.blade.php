@extends('siteView.app')

@section('title', 'Blog Details')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Détails de l'article</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('') }}">Accueil</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">{{ $post->titre }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="single-main text-center">
                    <div class="news-head mb-4">
                        <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article" class="img-fluid rounded">
                    </div>
                    <h1 class="news-title mb-3">{{ $post->titre }}</h1>
                    <div class="news-text text-start">
                        <p>{{ $post->contenu }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

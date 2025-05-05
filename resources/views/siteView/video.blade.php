@extends('siteView.app')

@section('title', 'Video')

@section('content')

<!-- Breadcrumbs -->

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Video</h2>
                    <ul class="bread-list">
                        <li><a href="index.php">Accueil</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Video</li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- Start Video -->

<section class="video section">
    @foreach($videos as $video)
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="video-inner">
                    <div class="video-content">
                        <h3>{{ $video->titre }}</h3>
                        <p>{{ $video->content }}</p>
                    </div>
                    <div class="video-box">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/{{ basename($video->url) }}"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    @endforeach
</section>  
<!-- End Video -->

@endsection
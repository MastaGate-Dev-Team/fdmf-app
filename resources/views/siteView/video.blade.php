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

<!-- Start Video -->
<section class="blog section" id="videos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Vidéos</h2>
                    <p>Nos vidéos explicatives</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($videos as $video)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Video Card -->
                <div class="single-news h-100">
                    <div class="news-head">
                        <iframe width="100%" height="215"
                            src="https://www.youtube.com/embed/{{ basename($video->url) }}"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <h2><strong>{{ $video->titre }}</strong></h2>
                            <p class="text">{{ $video->content }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Video Card -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Video -->
  
<!-- End Video -->

@endsection
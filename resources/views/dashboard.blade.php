@extends('layouts.app')

@section('title', 'DashBord')

@section('content')
<!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Membre Enregistrés</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{ $nbrVolunteer }})</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Video</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{ $nbrVideo }})</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-video fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Article
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">({{ $nbrArticle }})</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Articles récents en ligne -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Articles Récents</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Conteneur scroll horizontal -->
                                    <div class="d-flex overflow-auto" style="gap: 1rem;">
                                        @foreach($recentArticles as $post)
                                            <div class="card flex-shrink-0" style="min-width: 250px; max-width: 250px;">
                                                <img src="{{ asset('images/' . $post->image) }}" class="card-img-top" alt="Image Article">
                                                <div class="card-body">
                                                    <h6 class="card-title"><strong>{{ $post->titre }}</strong></h6>
                                                    <p class="card-text text-truncate">{{ $post->contenu }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 3 Recent Videos -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Vidéos Récentes</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    @foreach($recentVideos->take(3) as $video)
                                        <div class="card mb-3">
                                            <div class="card-body p-2">
                                                <div class="video-box mb-2">
                                                    <iframe width="100%" height="150"
                                                        src="https://www.youtube.com/embed/{{ basename($video->url) }}"
                                                        frameborder="0" allowfullscreen></iframe>
                                                </div>
                                                <h6 class="text-dark text-center">{{ $video->titre }}</h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

@endsection
@extends('layouts.app')

@section('title', 'UpdateArticle')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Card Form Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier une vidéo</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('video.update', $video->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="titre">Titre de le vidéo</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre', $video->titre) }}" placeholder="Entrez le titre" required>
                </div>

                <div class="form-group">
                    <label for="url">Url de le vidéo</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $video->url) }}" placeholder="Entrez l'url" required>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

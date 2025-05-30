@extends('layouts.app')

@section('title', 'AddVideo')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Card Form Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter une vidéo</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('video.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="titre">Titre de la vidéo</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre" required>
                </div>

                <div class="form-group">
                    <label for="url">Url de la vidéo</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Entrez l'url" required>
                </div>

                <div class="form-group">
                    <label for="content">Contenu de la vidéo</label>
                    <input type="text" class="form-control" id="content" name="content" placeholder="Entrez le contenu" required>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

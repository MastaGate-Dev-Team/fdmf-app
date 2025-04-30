@extends('layouts.app')

@section('title', 'AddArticle')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Card Form Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter un article</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('article.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="titre">Titre de l'article</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre" required>
                </div>

                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea class="form-control" id="contenu" name="contenu" rows="5" placeholder="Entrez le contenu" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

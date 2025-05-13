@extends('siteView.app')

@section('title', 'Inscription')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Inscription</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('') }}">Accueil</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Inscription -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Rejoignez-nous</h2>
                    <img src="{{ asset('fdmf.mastagate.com/img/section-img.png') }}" alt="#">
                    <p>En soumettant votre candidature, vous reconnaissez avoir pris connaissance des statuts
                        et du règlement d'ordre intérieur de la FDMF, et vous vous engagez à respecter toutes les obligations stipulées.</p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card shadow"><!-- 
                <div class="card-header text-center bg-primary text-white">
                    <h4>FICHE D’ADHÉSION - FDMF</h4>
                </div> -->
                <div class="card-body">
                    <form action="{{ route('volunteer.store') }}" method="POST">
                        @csrf

                        <h5 class="mb-3">Informations personnelles</h5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Post-nom</label>
                                <input type="text" name="postNom" class="form-control" value="{{ old('postNom') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Nationalité</label>
                                <input type="text" name="nationalite" class="form-control" value="{{ old('nationalite') }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Sexe</label>
                                <br>
                                <select class="form-select" name="sexe">
                                    <option value="Masculin" {{ old('sexe') == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                    <option value="Féminin" {{ old('sexe') == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" name="dateNaiss" class="form-control" value="{{ old('dateNaiss') }}" required>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label class="form-label">Lieu de naissance</label>
                                <input type="text" name="lieuNaiss" class="form-control" value="{{ old('lieuNaiss') }}">
                            </div>
                        </div>

                        <h5 class="mb-3">Adresse physique & Contacts</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Avenue</label>
                                <input type="text" name="avenue" class="form-control" value="{{ old('avenue') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Commune</label>
                                <input type="text" name="commune" class="form-control" value="{{ old('commune') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Ville</label>
                                <input type="text" name="ville" class="form-control" value="{{ old('ville') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" name="telephone" class="form-control" value="{{ old('telephone') }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <h5 class="mb-3">Contact en cas d’urgence</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nom et numéro</label>
                                <input type="text" name="personneUrgence" class="form-control" value="{{ old('personneUrgence') }}">
                            </div>
                        </div>

                        <h5 class="mb-3">Informations professionnelles</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Niveau d’études</label>
                                <input type="text" name="niveauEtude" class="form-control" value="{{ old('niveauEtude') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Statut</label>
                                <br>
                                <select class="form-select" name="statut">
                                    @foreach(['Cadre salarié', 'Entrepreneur', 'Fonctionnaire', 'Sans emploi', 'Libéral', 'Enseignant', 'Médecin'] as $statut)
                                        <option value="{{ $statut }}" {{ old('statut') == $statut ? 'selected' : '' }}>{{ $statut }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Domaine</label>
                                <input type="text" name="domaine" class="form-control" value="{{ old('domaine') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Fonction</label>
                                <input type="text" name="fonction" class="form-control" value="{{ old('fonction') }}">
                            </div>
                        </div>

                        <div class="form-check mb-4 text-center">
                            <label class="form-check-label" for="consentement">
                            ( Vou serez recontacté une fois l'examen de votre candidature est terminée )
                            </label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!-- End Inscription -->

@endsection

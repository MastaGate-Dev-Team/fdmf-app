<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fiche d'Adhésion FDMF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header text-center bg-primary text-white">
        <h4>FICHE D’ADHÉSION - FDMF</h4>
        <!-- <p class="mb-0">La santé buccodentaire est notre souci quotidien qu’on se le dise</p> -->
      </div>
      <div class="card-body">
        <form action="{{ route('volunteer.store') }}" method="POST">
            @csrf
          <!-- Informations personnelles -->
          <h5 class="mb-3">Informations personnelles</h5>
          <div class="row mb-3">
            <div class="col-md-4">
              <label class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Post-nom</label>
              <input type="text" name="postNom" class="form-control">
            </div>
            <div class="col-md-4">
            <label class="form-label">Prénom</label>
              <input type="text" name="prenom" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4">
              <label class="form-label">Nationalité</label>
              <input type="text" name="nationalite" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Sexe</label>
              <select class="form-select" name="sexe">
                <option>Masculin</option>
                <option>Féminin</option>
              </select>
            </div>  
            <div class="col-md-4">
              <label class="form-label">Date de naissance</label>
              <input type="date" name="dateNaiss" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Lieu de naissance</label>
              <input type="text" name="lieuNaiss" class="form-control">
            </div>
          </div>

          <!-- Adresse -->
          <h5 class="mb-3">Adresse physique & Contacts</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Avenue</label>
              <input type="text" name="avenue" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Commune</label>
              <input type="text" name="commune" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
          <div class="col-md-4">
              <label class="form-label">Ville</label>
              <input type="text" name="ville" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Téléphone</label>
              <input type="tel" name="telephone" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
          </div>

          <!-- Urgence -->
           <br>
          <h5 class="mb-3">Contact en cas d’urgence</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Nom</label>
              <input type="text" name="personneUrgence" class="form-control">
            </div>
            <!-- <div class="col-md-6">
              <label class="form-label">Téléphone</label>
              <input type="tel" class="form-control">
            </div> -->
          </div>

          <!-- Informations professionnelles -->
          <h5 class="mb-3">Informations professionnelles</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Niveau d’études</label>
              <input type="text" name="niveauEtude" class="form-control">
             </div>
            <div class="col-md-6">
              <label class="form-label">Statut</label>
              <select class="form-select" name="statut">
                <option>Cadre salarié</option>
                <option>Entrepreneur</option>
                <option>Fonctionnaire</option>
                <option>Sans emploi</option>
                <option>Libéral</option>
                <option>Enseignant</option>
                <option>Médecin</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Domaine</label>
              <input type="text" name="domaine" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Fonction</label>
              <input type="text" name="fonction" class="form-control">
            </div>
          </div>

          <!-- Engagement -->
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="consentement">
            <label class="form-check-label" for="consentement">
              Je déclare avoir pris connaissance des statuts de la FDMF et m’engage à respecter les obligations.
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

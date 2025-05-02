<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Mon Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Mon Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBlog">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarBlog">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Articles</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Container -->
<div class="container mt-5">
  <h1 class="mb-4 text-center">Derniers articles</h1>
  
  @foreach($posts as $post)
  <!-- Article Card -->
  <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title"> {{ $post->titre }} </h4>
      <p class="card-text">{{ $post->contenu }}</p>
      <a href="{{ url('blog', $post->id) }}" class="btn btn-primary">Lire plus</a>
    </div>
    <!-- <div class="card-footer text-muted">
      Publié le 28 avril 2025 par Jean Dupont
    </div> -->
  </div>
    @endforeach
  <!-- Deuxième article -->
  <!-- <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title">Un autre article intéressant</h4>
      <p class="card-text">Cet article explore les tendances web en 2025. Découvrez les dernières nouveautés du design moderne.</p>
      <a href="#" class="btn btn-primary">Lire plus</a>
    </div>
    <div class="card-footer text-muted">
      Publié le 26 avril 2025 par Clara Martin
    </div>
  </div> -->

  <!-- Troisième article -->
  <!-- <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title">Tech et IA : ce qu’il faut savoir</h4>
      <p class="card-text">L’intelligence artificielle bouleverse nos vies. Mais comment en tirer profit sans danger ?</p>
      <a href="#" class="btn btn-primary">Lire plus</a>
    </div>
    <div class="card-footer text-muted">
      Publié le 22 avril 2025 par Admin
    </div>
  </div> -->
</div> 

<!-- Footer -->
<footer class="bg-dark text-light text-center py-4 mt-5">
  <div class="container">
    <p class="mb-0">© 2025 Mon Blog. Tous droits réservés.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Article - Mon Blog</title>
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
        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Article</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10 col-lg-8">

      <h1 class="mb-3">{{ $post->titre }}</h1>
      <p class="text-muted">Publié le 28 avril 2025 par <strong>Jean Dupont</strong></p>

      <img src="https://via.placeholder.com/900x400" class="img-fluid rounded mb-4" alt="Image article">

      <p>
        {{ $post->contenu }}
      </p>

      <p>
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec bibendum
        tellus vitae turpis iaculis, at convallis lorem pretium. Aliquam erat volutpat. Quisque in mauris lorem.
      </p>

      <blockquote class="blockquote my-4">
        <p class="mb-0">“L'écriture est la peinture de la voix.”</p>
        <footer class="blockquote-footer">Voltaire</footer>
      </blockquote>

      <p>
        Fusce a congue urna. Aenean facilisis, turpis non fringilla dictum, risus arcu lobortis sapien, vel fermentum
        erat neque non est. Sed bibendum sapien et justo ultrices, a elementum nulla interdum.
      </p>

      <div class="mt-5">
        <a href="{{ url('blog') }}" class="btn btn-outline-primary">&larr; Retour aux articles</a>
      </div>
    </div>
  </div>
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

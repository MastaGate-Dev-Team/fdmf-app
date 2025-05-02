@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center">
        <div class="spinner-border text-primary" role="status" style="width: 5rem; height: 5rem;"></div>
        <h4 class="mt-3">Connexion en cours...</h4>
    </div>
</div>

<script>
    // Rediriger vers la page d'accueil après 2 secondes
    setTimeout(function() {
        window.location.href = "{{ route('dashboard') }}"; // ou route vers ta page d'accueil
    }, 2000);
</script>
@endsection

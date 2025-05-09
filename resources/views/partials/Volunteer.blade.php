@extends('layouts.app')

@section('title', 'Membres')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Message de succès -->
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
            @if(session('volunteer'))
                <br><strong>Membre ajouté :</strong> {{ session('volunteer')->nom }}
            @endif
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des membres</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>Post-Nom</th>
                            <th>Pré-Nom</th>
                            <th>Nationalité</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>nom</th>
                            <th>Post-Nom</th>
                            <th>Pré-Nom</th>
                            <th>Nationalité</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if(count($volunteers) == 0)
                            <tr>
                                <td colspan="3" class="text-center">Aucun membre</td>
                            </tr>
                        @endif
                        @foreach ($volunteers as $volunteer)
                            <tr>
                                <td>{{ $volunteer->nom }}</td>
                                <td>{{ $volunteer->postNom }}</td>
                                <td>{{ $volunteer->preNom }}</td>
                                <td>{{ $volunteer->nationalite }}</td>
                                <td>{{ $volunteer->telephone }}</td>
                                <td>{{ $volunteer->email }}</td>
                                <td class="text-center">
                                    <!-- Icône Modifier -->
                                    <!-- <a href="{{ url('UpdateVideo', $volunteer->id) }}" class="btn btn-sm btn-primary" title="Modifier">
                                        <i class="bi bi-pencil-square"></i>
                                    </a> -->
                                    <!-- Icône Supprimer -->
                                    <form action="{{ route('video.destroy', $volunteer->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette vidéo ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Supprimer">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('scripts')
<script>
    // Disparition automatique de l'alerte après 4 secondes
    setTimeout(function() {
        let alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.transition = "opacity 0.5s ease-out";
            alert.style.opacity = 0;
            setTimeout(() => alert.remove(), 500);
        }
    }, 4000);
</script>
@endpush

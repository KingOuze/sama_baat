@extends('layouts.menu.menuAdmin')

@section('content')
    <div class="container  mt-5">
        @if (session('success'))
            <div class="alert alert-success mt-3"> {{ session('success') }}</div>
        @endif
        <div class="card">
            <div class="card-header bg-info text-white text-center"><h1>LISTE DES CANDIDATS</h1></div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>N°</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Parti</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($candidats as $candidat)
                        <tr>
                            <td>{{ $candidat->id }} </td>
                            <td>{{ $candidat->prenom }} </td>
                            <td>{{ $candidat->nom }} </td>
                            <td>{{ $candidat->email }} </td>
                            <td>{{ $candidat->parti }} </td>
                            <td>
                                <a href="{{ route('edit', $candidat->id) }}" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce candidat !??');" href="{{ route('destroy', $candidat->id) }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
            
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
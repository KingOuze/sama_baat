@extends('layouts.menu.menuAdmin')

@section('content')
    <div class="container  mt-5">
        @if (session('success'))
            <div class="alert alert-success mt-3"> {{ session('success') }}</div>
        @endif
        <div class="card">
            <div class="card-header bg-info text-white text-center"><h1>LISTE DES ELECTEURS</h1></div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>N°</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($electeurs as $electeur)
                        <tr>
                            <td>{{ $electeur->id }} </td>
                            <td>{{ $electeur->prenom }} </td>
                            <td>{{ $electeur->nom }} </td>
                            <td>{{ $electeur->email }} </td>
                            <td>
                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce candidat !??');" href="{{ route('destroy', $electeur->id) }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
            
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.menu.menuAdmin')

@section('content')

    <div class="container mt-5">
       @if (session('success'))
            <div class="alert alert-success mt-3"> {{ session('success') }}</div>
       @endif
        <div class="card">
            <div class="card-header bg-info text-white  text-center">
                <h1>Ajouter un Candidat</h1>
            </div>

            <div class="card-body">
                <form action="{{ route('store.candidat') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Parti:</label>
                        <input type="text" name="parti" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Enrigistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
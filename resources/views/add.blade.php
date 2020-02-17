@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter une competence</div>
                    <form method="POST" style="text-align: center;">
                    @csrf
                        <input type="text" name="nom" placeholder="Nom"required style="margin-bottom: 10px; padding: 5px;">
                        <br />
                        <input type="text" name="description" placeholder="Description"required style="margin-bottom: 10px; padding: 5px;">
                        <br />
                        <input type="text" name="source" placeholder="Source"required style="margin-bottom: 10px; padding: 5px;">
                        <br />
                        <input class="btn btn-success" type="submit" name="add" value="Ajouter" style="margin-bottom: 10px;">
                    </form>
                    
                    <a class="btn btn-secondary" href="{{ url('/skills') }}">Retour</a>
                    
            </div>
        </div>
    </div>
</div>
@endsection
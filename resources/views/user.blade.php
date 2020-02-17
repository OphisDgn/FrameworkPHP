@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informations</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="padding: 15px;">
                    <h2> Utilisateur </h2>
                    <p> Id : {{ $user->id }} </p>
                    <p> First name : {{ $user->firstname }} </p>
                    <p> Last name : {{ $user->lastname }} </p>
                    <p> E-mail : {{ $user->email }} </p>
                    
                    <h2> Competences </h2>
                    @foreach($user->skills as $ski)
                      
                      <p> {{$ski->nom}}, de niveau {{$ski->pivot->niveau}} </p>
                      <a class="btn btn-danger" href="{{ route('delete', ['id'=>$ski->id]) }}" style="margin-bottom: 5px;">Supprimer cette competence</a>
                      
                    @endforeach
                    </div>
                    
                    <a class="btn btn-light" href="{{ route('adding') }}">Ajouter une competence</a>
                    <a class="btn btn-light" href="{{ route('edit') }}">Modifier une competence</a>
                    
                    <a class="btn btn-secondary" href="{{ url('/home') }}">Retour</a>
                    
            </div>
        </div>
    </div>
</div>
@endsection
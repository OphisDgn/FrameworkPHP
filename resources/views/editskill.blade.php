@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier une competence</div>
                    <form method="POST" style="text-align: center;">
                    @csrf
                      <select type="text" name="skill" placeholder="Competences"required>
                        @foreach ($user->skills as $ski)
                        <option value={{$ski->id}}>{{$ski->nom}}</option>
                        @endforeach
                        </select>
                        <br />
                        <br />
                        <input type="number" style="width:100px;" max="5" min="1" name="niveau" placeholder="Niveau"required>
                        <input type="submit" name="edit" value="Modifier">
                    </form>
                    
                    <a class="btn btn-secondary" href="{{ url('/users') }}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
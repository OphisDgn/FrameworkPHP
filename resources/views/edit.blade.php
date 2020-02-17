@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier une competence</div>
                    <form method="POST" style="text-align: center;">
                    @csrf
                      <select type="text" name="skill" placeholder="Competences"required style="margin-bottom: 10px; padding: 5px; margin-top: 5px;">
                        @foreach ($skills as $ski)
                        <option value={{$ski->id}}>{{$ski->nom}}</option>
                        @endforeach
                        </select>
                        <br />
                        <input type="text" name="description" placeholder="Description"required style="margin-bottom: 10px; padding: 5px; width: 250px;">
                        <br />
                        <input type="text" name="source" placeholder="Source"required style="margin-bottom: 10px; padding: 5px;">
                        <br />
                        <input type="submit" name="edit" value="Modifier" style="margin-bottom: 10px;">
                    </form>
                    
                    <a class="btn btn-secondary" href="{{ url('/skills') }}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
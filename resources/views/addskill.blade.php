@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter une competence</div>
                    <form method="POST" style="text-align: center;">
                    @csrf
                      <select type="text" name="skill" placeholder="Competences"required>
                        @foreach($skis as $skill)
                        <option value={{$skill->id}}>{{$skill->id}}. {{$skill->nom}}</option>
                        @endforeach
                        </select>
                        <br />
                        <br />
                        <input type="number" style="width:100px;" max="5" min="1" name="niveau" placeholder="Niveau"required>
                        <input type="submit" name="add" value="Ajouter">
                    </form>
                    
                    <a class="btn btn-secondary" href="{{ url('/users') }}">Retour</a>
                    
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listes des competences</div>
                    
                    <a class="btn btn-secondary" href="{{ url('/') }}">Retour</a>
                    <br />
                    <a class="btn btn-success" href="{{ route('skillsAdd') }}" style="margin-bottom: 10px;">Ajouter</a>
                    
                    <table style="padding: 10px; margin-left: 15px; margin-bottom: 15px;">
                      <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Biography </th>
                        <th> Image source </th>
                        <th style="text-align: center;"> Options </th>
                      </tr>
                      @foreach($skills as $sk)
                          <tr>
                            <td> {{ $sk->id }} </td>
                            <td> {{ $sk->nom }} </td>
                            <td> {{ $sk->description }} </td>
                            <td> {{ $sk->src }}</td>
                            <td>
                              <a class="btn btn-light" href="{{ route('skillsEdit') }}">Modifier</a>
                              <a class="btn btn-danger" href="{{ route('destroy', ['id'=>$sk->id]) }}">Supprimer</a>
                            </td>
                          </tr>
                      @endforeach
                      
                    </table>
                    
                    
            </div>
        </div>
    </div>
</div>
@endsection
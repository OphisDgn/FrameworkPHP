@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Coucou et bienvenue ! 
                    <br />
                    <a class="btn btn-secondary" href="{{ url('/users') }}">Informations et competences</a>
                    <a class="btn btn-secondary" href="{{ url('/userlist') }}">Listes des utilisateurs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

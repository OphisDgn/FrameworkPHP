@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier un utilisateur</div>
                    <form method="POST" style="text-align: center;">
                    @csrf
                        <br />
                        <input type="text" name="name" placeholder="Name"required style="margin-bottom: 10px; padding: 5px;" value={{$user->name}}>
                        <br />
                        <input type="text" name="firstname" placeholder="Firstname"required style="margin-bottom: 10px; padding: 5px;" value={{$user->firstname}}>
                        <br />
                        <input type="text" name="lastname" placeholder="Lastname"required style="margin-bottom: 10px; padding: 5px;" value={{$user->lastname}}>
                        <br />
                        <input type="text" name="email" placeholder="E-mail Address"required style="margin-bottom: 10px; padding: 5px;" value={{$user->email}}>
                        <br />
                        <input type="text" name="biography" placeholder="Biography"required style="margin-bottom: 10px; padding: 5px;" value={{$user->bio}}>
                        <br />
                        <input type="submit" name="edit" value="Modifier" style="margin-bottom: 10px;">
                    </form>
                    
                    <a class="btn btn-secondary" href="{{ url('/skills') }}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
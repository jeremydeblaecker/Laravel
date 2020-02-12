@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">
                    @if ($admin == true)
                        <p>Vous êtes admin</p>
                        <a href="{{route('home')}}">Retour à l'accueil</a>  
                        <form method="post" action="{{route('admin/connexion')}}">
                            <label for="user-select">Utilisateurs</label>

                            <select name="user">
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit">Modifier</button>
                        </form>
                        <h1>Données</h1>
                        <div id="données">
                            
                        </div>

                    @else
                        <p>Vous n'êtes pas admin</p>
                    <div class="alert alert-dark">
                        <a href="{{route('home')}}">Retour à l'accueil</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

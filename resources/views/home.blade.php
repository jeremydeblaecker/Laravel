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

                    Vous êtes connecté !
                    <div class="alert alert-dark">
                        <a href="{{route('admin')}}">Accédez à l'espace admin</a>
                    </div>

                    <br>
                    @foreach ($users as $user)
                        <div class="mark">
                            <p>Name: {{$user['name']}}</p>
                            <p>Firstname: {{$user['firstname']}}</p>
                            <p>Lastname: {{$user['lastname']}}</p>
                            <p>Email: {{$user['email']}}</p>
                            <p>Amdin: {{$user['admin']}}</p>
                            <p>Compétences: </p>
                            @foreach ($user->skills as $skill)
                            <div class="alert alert-info">
                                <p>Nom compétences : {{$skill['name'] }}</p>  
                                <p>Level: {{$skill['pivot']['level'] }}</p>
                            </div>
                            @endforeach

                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

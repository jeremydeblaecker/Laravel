@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">
                    @if ($admin == true)
                        <p>Vous êtes admin</p>
                        <a href="{{route('home')}}">Retour à l'accueil</a>  
                    <div class="row">

                    <div class="col-lg-12 margin-tb">

                        <div class="pull-left">

                            <h2>CRUD Users</h2>

                        </div>

                        <div class="pull-right">

                            <a class="btn btn-success" href="{{ route('users.create') }}"> Créer un nouvel utilisateur</a>

                        </div>

                    </div>

                </div>

               

                @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                @endif

               

                <table class="table table-bordered">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Bio</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th width="280px">Action</th>
                    </tr>

                    @foreach ($users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->bio }}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ $user->admin }}</td>
                        <td>

                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

               

                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Afficher</a>

                

                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

               

                                @csrf

                                @method('DELETE')

                  

                                <button type="submit" class="btn btn-danger">Supprimer</button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </table>

            

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
@endsection

@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>
        My users
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Add User</a>
    </h1>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" onsubmit="return confirm('Are you really wish to continue?')" class="btn btn-sm btn-info">Edit</a>

                            @if($loggedId !== intval($user->id))
                            <form class="d-inline" method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links() }}

@endsection

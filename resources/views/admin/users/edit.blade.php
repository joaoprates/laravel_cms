@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit user</h1>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5> <i class="icon fas fa-ban"></i> Ops! Something its wrong. </h5>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.update', ['user'=>$user->id]) }}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Full name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">New password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Password confirmation</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group float-right">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10 float-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

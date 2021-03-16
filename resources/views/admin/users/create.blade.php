@extends('adminlte::page')

@section('title', 'New User')

@section('content_header')
    <h1>New user</h1>
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
                <form action="{{ route('users.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Password</label>
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

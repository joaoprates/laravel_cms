@extends('adminlte::page')

@section('title', 'Settings')

@section('content_header')
    <h1>Settings</h1>
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

    @if(session('warning'))
        <div class="alert alert-success">
            {{ session('warning') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('settings.save') }}" method="POST" class="form-horizontal">

                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" value="{{ $settings['title'] }}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Subtitle</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" value="{{ $settings['subtitle'] }}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Contact e-mail</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ $settings['email'] }}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Background color</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" value="{{ $settings['bgcolor'] }}" class="form-control" style="width: 50px">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Text color</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" value="{{ $settings['textcolor'] }}" class="form-control"  style="width: 50px">
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

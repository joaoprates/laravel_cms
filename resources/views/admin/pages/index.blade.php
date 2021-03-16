@extends('adminlte::page')

@section('title', 'Pages')

@section('content_header')
    <h1>
        Pages
        <a href="{{ route('pages.create') }}" class="btn btn-sm btn-success">Add a page</a>
    </h1>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>
                            <a href="" target="_blank" class="btn btn-sm btn-success">See</a>
                            <a href="{{ route('pages.edit', ['page' => $page->id]) }}" onsubmit="return confirm('Are you really wish to continue?')" class="btn btn-sm btn-info">Edit</a>

                                <form class="d-inline" method="POST" action="{{ route('pages.destroy', ['page' => $page->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $pages->links() }}

@endsection

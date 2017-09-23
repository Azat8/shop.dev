@extends('admin.layouts.admin-layout')
@section('admin-content')
    @if(session()->has('saved'))
        <div class="alert alert-success">
            Category <b>{{ session()->get('saved') }}</b> successfully created!
        </div>
    @endif
    @if(session()->has('delete-massage'))
        <div class="alert alert-success">
            Deleted category <b>"{{ session()->get('delete-massage') }}"</b>
        </div>
    @endif
    @if(session()->has('update-massage'))
        <div class="alert alert-success">
            {{ session()->get('update-massage') }}
        </div>
    @endif
    <h1>category index</h1>
    <table class="table table-bordered table-hover table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($model as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td style="width: 75%;">{{ $category->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('category.update', [$category->id])}}"><i
                                class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a class="btn btn-danger" href="{{ route('category.delete', [$category->id]) }}"><i
                                class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
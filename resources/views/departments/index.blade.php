@extends('layouts.main')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departments</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>

                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('departments.index') }}">
                            <div class="form-row align-items-center">

                                <div class="col">

                                    <input class="form-control mb-2" type="search" name="search" id="autoSizingCheck"
                                        placeholder="IT Dept">

                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div>
                        <a class="btn btn-primary mb-2" href="{{ route('departments.create') }}">Create</a>

                    </div>
                </div>


            </div>
            <div class="card-body">
                <table class="table caption-top">
                    <caption>List of Departments</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                           
                            <th scope="col">Department Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $dept)
                            <tr>

                                <td>{{ $dept->id }}</td>                               
                                <td>{{ $dept->name }}</td>
                                <td>
                                    
                                    <a class="btn btn-success" href="{{ route('departments.edit', $dept->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('departments.destroy', $dept->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><span class="fa fa-trash"></span> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

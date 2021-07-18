@extends('layouts.main')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">States</h1>
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
                        <form method="GET" action="{{ route('states.index') }}">
                            <div class="form-row align-items-center">

                                <div class="col">

                                    <input class="form-control mb-2" type="search" name="search" id="autoSizingCheck"
                                        placeholder="N limo">

                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div>
                        <a class="btn btn-primary mb-2" href="{{ route('states.create') }}">Create</a>

                    </div>
                </div>


            </div>
            <div class="card-body">
                <table class="table caption-top">
                    <caption>List of states</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Country Code</th>
                            <th scope="col">State Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($states as $state)
                            <tr>

                                <td>{{ $state->id }}</td>
                                <td>{{ $state->country->country_code }}</td>
                                <td>{{ $state->name }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('states.edit', $state->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

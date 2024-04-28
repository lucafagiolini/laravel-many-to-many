@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('admin.project.create') }}" class="btn btn-sm btn-outline-success">crate a new project</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            @foreach ($project as $project)
                <tbody>
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->category->title }}</td>
                        <td> {{ $project->description }}</td>



                        <td scope="col">
                            <a href="{{ route('admin.project.show', $project->id) }}">
                                <button class="btn btn-outline-success">Details</button>
                            </a>
                        </td>


                    </tr>
                </tbody>
            @endforeach

        </table>

    </div>
@endsection

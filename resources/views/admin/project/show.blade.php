@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column align-items-center p-5 ">

            <h1 class="p-3">Project Details of {{ $project->title }}</h1>

            <div class="card mb-3 bg-dark-subtle" style="max-width: 32rem;">
                <div>
                    <div>
                        <img src="{{ asset('storage/' . $project->cover_image) }}" class="img-top rounded-top"
                            alt="{{ $project->title }} img " style="max-width: 31rem;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="width: 31rem;">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item">
                                    <h5 class="card-title text-capitalize">title: {{ $project->title }}</h5>

                                </li>


                                <li class="list-group-item">
                                    <p class="card-text text-capitalize">category: {{ $project->category->title }}</p>

                                </li>

                                <li class="list-group-item">
                                    <small class="text-body-secondary text-capitalize">
                                        <p class="card-text text-capitalize">description: {{ $project->description }}</p>
                                    </small>

                                </li>

                                <li class="list-group-item">
                                    <p class="card-text text-capitalize">
                                        <small class="text-body-secondary text-capitalize">
                                            tecnologies: {{ $project->tecnologies }}
                                        </small>
                                    </p>
                                </li>
                                <li class="list-group-item">
                                    <p class="card-text">
                                        <small class="text-body-secondary">
                                            Project link:
                                            <link rel="stylesheet" href="{{ $project->link }}">
                                            {{ $project->link }}
                                        </small>
                                    </p>
                                </li>
                                <li class="list-group-item">
                                    <p class="card-text">
                                        <small class="text-body-secondary text-capitalize">
                                            Created: {{ $project->created_at }}
                                        </small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="delete_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Project</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            If you delete this project, you will not be able to recover it.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card text-center">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body d-flex justify-content-center gap-3">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete
                        Project</button>
                    <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning">Update Project</a>
                </div>
                <div class="card-footer text-body-secondary">
                    last time updated: {{ $project->updated_at }}
                </div>
            </div>

        </div>
    </div>
@endsection

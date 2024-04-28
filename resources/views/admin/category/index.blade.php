@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-outline-success">crate a new category</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

            @foreach ($categories as $category)
                <tbody>
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->title }}</td>
                        <td> {{ $category->description }}</td>

                        <td scope="col">
                            <a href="{{ route('admin.category.show', $category->id) }}">
                                <button class="btn btn-outline-success">Details</button>
                            </a>
                        </td>


                    </tr>
                </tbody>
            @endforeach

        </table>

    </div>
@endsection

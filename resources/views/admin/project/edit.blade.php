@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update the {{ $project->title }} project</h1>

        <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <button type="submit" class="btn btn-warning">Update</button>



            {{-- title input --}}
            <div class="mb-4 pt-4">

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name='title'
                    placeholder="" value="{{ old('title') }} {{ $project->title }}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- description input --}}
            <div class="mb-4">
                <label for="description" class="form-label">Project description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name='description'
                    rows="3">{{ old('description') }} {{ $project->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- img input --}}
            <div class="mb-4 pt-4">
                <label for="cover_image" class="form-label">Project image</label>
                <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name='cover_image' placeholder="" value="{{ $project->cover_image }}">
                @error('cover_image')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- tecnology input --}}
            <ul class="list-group">
                <li class="d-flex flex-wrap justify-content-center gap-5 list-group-item" for=''
                    style='list-style-type: none;'>
                    @foreach ($technology as $technology)
                        <div>
                            <label class="form-check-label text-capitalize" for="{{ $technology->title }}">
                                {{ $technology->title }}
                            </label>
                            <input class="form-check-input me-1" type="checkbox" value="{{ $technology->id }}"
                                id="{{ $technology->title }}" name='tecnologies[]'>
                        </div>
                    @endforeach
                </li>
            </ul>

            {{-- Project url input --}}
            <div class="mb-4 pt-4">
                <label for="link" class="form-label">Project link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name='link'
                    placeholder="" value="{{ old('link') }} {{ $project->link }}">
                @error('link')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- category input --}}
            <div class="mb-4">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name='category_id'>


                    <option value=""></option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
                            {{ $category->title }}</option>
                    @endforeach
            </div>



        </form>


    </div>
@endsection

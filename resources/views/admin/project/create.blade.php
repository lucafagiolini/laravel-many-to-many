@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a new project</h1>

        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="btn btn-primary">create</button>

            {{-- title input --}}
            <div class="mb-4 pt-4">

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name='title'
                    placeholder="" value="{{ old('title') }}">

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
                    rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- img input --}}
            <div class="mb-4">
                <label for="cover_image" class="form-label">Project image</label>
                <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name='cover_image' placeholder="">
                @error('cover_image')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- tecnology input --}}
            <ul class="list-group">
                <li class="d-flex flex-wrap gap-5 list-group-item" for='' style='list-style-type: none;'>
                    @foreach ($technologies as $technology)
                        <div>
                            <label class="form-check-label text-uppercase" for="{{ $technology->title }}">
                                {{ $technology->title }}
                            </label>
                            <input class="form-check-input me-1" type="checkbox" value="{{ $technology->id }}"
                                id="{{ $technology->title }}" name='technologies[]'
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                        </div>
                    @endforeach
                </li>
            </ul>

            {{-- Project url input --}}
            <div class="mb-4 pt-4">
                <label for="link" class="form-label">Project link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name='link'
                    placeholder="" {{ old('link') }}>
                @error('link')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- category input --}}
            <div class="mb-4">
                <label for="category_id @error('category_id') is-invalid @enderror" class="form-label">Category</label>
                <select class="form-select" id="category_id" name='category_id'>

                    <option value="0"></option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach


                    @error('category_id')
                        <div class="invalid-feedback ">
                            {{ $message }}
                        </div>
                    @enderror
            </div>


    </div>
@endsection

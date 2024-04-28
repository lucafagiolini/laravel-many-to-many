@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
                <div class="d-flex justify-content-center p-5 gap-2">
                    <a href="{{ route('admin.project.index') }}" class="btn btn-danger btn-sm">Project Management</a>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-warning btn-sm">Category Management</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

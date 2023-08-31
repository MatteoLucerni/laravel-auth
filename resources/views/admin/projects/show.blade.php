@extends('layouts.app')

@section('content')
    <div class="card mt-5 bg-light p-5">
        <div class="card-header rounded border-0 mb-4 d-flex justify-content-between align-content-center ">
            <h2 class="m-0 d-flex align-items-center">
                {{ $project->title }}
            </h2>
            @if ($project->is_public)
                <div class="alert alert-success m-0">
                    Open-source
                </div>
            @endif
        </div>
        <div class="card-body d-flex">
            <img src="{{ $project->image }}" alt="{{ $project->title }}">
            <div class="ms-5">
                <p>
                    {{ $project->description }}
                </p>
                <ul>
                    <li>
                        Main Language: {{ $project->main_lang }}
                    </li>
                    <li>
                        Other Languages: {{ $project->other_langs }}
                    </li>
                    <li>
                        Stars: {{ $project->n_stars }} <i class="fas fa-star"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between mt-3 align-items-center border-0 bg-light">
            <div class="buttons">
                <a href="#" class="btn btn-warning mx-2">Edit project</a>
                <a href="#" class="btn btn-danger">Delete project</a>
            </div>
            <div class="text-end">
                <strong>Creazione:</strong> {{ $project->created_at }} <br>
                <strong>Ultima Modifica:</strong> {{ $project->updated_at }}
            </div>
        </div>
    </div>
    <footer class="text-center">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mx-2 mt-5">Go back to the projects list</a>
    </footer>
@endsection

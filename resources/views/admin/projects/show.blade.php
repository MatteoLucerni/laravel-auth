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
            <img style="width: 300px"
                src="https://i0.wp.com/www.giacomocusano.com/wp-content/uploads/2016/07/coastal-wash-web.jpg?resize=1024%2C675&ssl=1"
                alt="{{ $project->title }}">
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
                Creazione: {{ $project->created_at }} <br>
                Ultima Modifica: {{ $project->updated_at }}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="card bg-light p-5">
        <div class="card-header rounded border-0 mb-4 d-flex justify-content-between align-content-center ">
            <h2 class="m-0 d-flex align-items-center">
                {{ $proj->title }}
            </h2>
            @if ($proj->is_public)
                <div class="alert alert-success m-0">
                    Open-source
                </div>
            @endif
        </div>
        <div class="card-body">
            <p class="">
                {{ $proj->description }}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between mt-3 align-items-center border-0 bg-light">
            <div class="buttons">
                <a href="#" class="btn btn-primary">More details</a>
                <a href="#" class="btn btn-warning mx-2">Edit Project</a>
                <a href="#" class="btn btn-danger">Delete Project</a>
            </div>
            <div class="text-end">
                Creazione: {{ $proj->created_at }} <br>
                Ultima Modifica: {{ $proj->updated_at }}
            </div>
        </div>
    </div>

    {{-- <img src="{{ $proj->image }}" alt="{{ $proj->title }}">
    <ul>
        <li>
            Main Language: {{ $proj->main_lang }}
        </li>
        <li>
            Other Languages: {{ $proj->other_langs }}
        </li>
        <li>
            Stars: {{ $proj->n_stars }}
        </li>
    </ul> --}}
@endsection

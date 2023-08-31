@extends('layouts.app')

@section('title', 'Projects List')


@section('content')
    <h1 class="text-center mt-5">Discover My Projects</h1>
    <ul class="list-unstyled">
        @forelse ($projects as $proj)
            <li class="my-5">
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
                            <a href="#" class="btn btn-success">Click</a>
                            <a href="#" class="btn btn-success">Click</a>
                            <a href="#" class="btn btn-success">Click</a>
                            <a href="#" class="btn btn-success">Click</a>
                        </div>
                        <div class="text-end">
                            Creazione: {{ $proj->created_at }} <br>
                            Ultima Modifica: {{ $proj->updated_at }}
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <h4 class="alert alert-danger mt-5 text-center">Non ci sono progetti disponibili</h4>
        @endforelse
    </ul>
@endsection

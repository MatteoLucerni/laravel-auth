@extends('layouts.app')

@section('title', 'Projects List')


@section('content')
    <h1 class="text-center mt-5">Discover My Projects</h1>
    <ul class="list-unstyled">
        @forelse ($projects as $proj)
            <li class="my-5">
                <div class="card p-5">
                    <div class="card-header rounded border-0 mb-4 d-flex justify-content-between align-content-center ">
                        <h2 class="m-0">
                            {{ $proj->title }}
                        </h2>
                        @if ($proj->is_public)
                            <div class="alert alert-success m-0">
                                Open-source
                            </div>
                        @endif
                    </div>
                    <div class="card-body d-flex">
                        <img src="{{ $proj->image }}" alt="{{ $proj->title }}">
                        <div class="flex-end ms-5">
                            <p class="">
                                {{ $proj->description }}
                            </p>
                            <ul>
                                <li>
                                    Main Language: {{ $proj->main_lang }}
                                </li>
                                <li>
                                    Other Languages: {{ $proj->other_langs }}
                                </li>
                                <li>
                                    Main Language: {{ $proj->main_lang }}
                                </li>
                                <li>
                                    Stars: {{ $proj->n_stars }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer border-0 bg-white text-end ">
                        Creazione: {{ $proj->created_at }} <br>
                        Ultima Modifica: {{ $proj->updated_at }}
                    </div>
                </div>
            </li>
        @empty
            <h4 class="alert alert-danger mt-5 text-center">Non ci sono progetti disponibili</h4>
        @endforelse
    </ul>
@endsection

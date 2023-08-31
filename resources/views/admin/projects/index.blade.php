@extends('layouts.app')

@section('title', 'Projects List')


@section('content')
    <h1 class="text-center mt-5">Discover My Projects</h1>
    <ul class="list-unstyled">
        @forelse ($projects as $proj)
            <li class="my-5">
                <div class="card p-5">
                    <h2>
                        {{ $proj->title }}
                    </h2>
                </div>
            </li>
        @empty
            <h4 class="alert alert-danger mt-5 text-center">Non ci sono progetti disponibili</h4>
        @endforelse
    </ul>
@endsection

@extends('layouts.app')

@section('title', 'Projects List')


@section('content')
    <h1 class="text-center mt-5">Projects List</h1>
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
        @endforelse
    </ul>
@endsection

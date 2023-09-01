@extends('layouts.app')

@section('title', 'Create new project')

@section('content')
    <h1 class="text-center mt-5">Create a new project</h1>
    @include('includes.form')
@endsection

@section('scripts')
    @vite('resources/js/slug-gen.js')
@endsection

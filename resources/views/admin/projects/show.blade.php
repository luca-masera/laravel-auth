@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success ">Modifica</a>
    </section>
@endsection

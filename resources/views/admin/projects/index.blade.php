@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Lista Posts</h1>
        @foreach ($projects as $project)
            <p><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a></p>
        @endforeach
    </section>
@endsection

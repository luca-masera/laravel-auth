@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Lista Posts</h1>
        <table class="table">
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-success ">Mostra</a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}">
                                <button type="submit">Elimina</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection

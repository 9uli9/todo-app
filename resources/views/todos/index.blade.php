@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('To-Dos') }}
</h2>
@endsection


@section('content')

<h2>Todos</h2>
<a href="{{route('todos.create')}}">Create</a>
<table>

    <thead>

        <tr>

            <th>Title</th>

            <th>Snippet</th>

            <th>Created</th>

            <th></th>

        </tr>

    </thead>

    <tbody>

 
@forelse($todos as $todo)
        <tr>

            <td>{{ $todo->title }}</td>

            <td>{{ $todo->body }}</td>

            <td>{{ $todo->created_at }}</td>

            <td><a href="{{ route('todos.show', $todo->id) }}" >Read More</a></td>



        </tr>
@empty
<h4>No to dos found!</h4>
@endforelse

    </tbody>

</table>

@endsection
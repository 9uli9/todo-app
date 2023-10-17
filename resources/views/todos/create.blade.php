@extends('layouts.app')
@section('content')

<h3>Create Todo</h3>
<form action="{{route('todos.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Title </label> 
        <input type="text" name="title" id="title"/>
        @if($errors->has('title'))
        <span> {{$errors->first('title')}}</span>
        @endif
    </div>

    <div>
        <label for="body">Description</label> 
        <input type="text" name="body" id="body"/>
        @if($errors->has('body'))
        <span> {{$errors->first('body')}}</span>
        @endif
    </div>
    <button type="submit">Create</button>
</form>
@endsection

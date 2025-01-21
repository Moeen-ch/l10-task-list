@extends('layouts.app')

@section('title', 'Add a new task')

@section('content')
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
        <label for="title">Title</label> <br>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description">Description</label> <br>
        <textarea name="description" id="description" rows="5" cols="23" ></textarea>
    </div>
    <div>
        <label for="long_description">Long description</label> <br>
        <textarea name="long_description" id="long_description" rows="10" cols="23"></textarea>
    </div>
    <div>
        <button type="submit">Add task</button>
    </div>
</form>

@endsection
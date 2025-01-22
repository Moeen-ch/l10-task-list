@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{ $task->description }}</p>
@if ($task->long_description)
    <p>{{ $task->long_description }}</p>
@endif
<p>{{ $task->completed }}</p>
<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>
<form method="POST" action="{{ route('tasks.destroy') }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection
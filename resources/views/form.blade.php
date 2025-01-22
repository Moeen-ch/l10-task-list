@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task':'Add Task')

@section('styles')
<style>
    .error-message{
        color:red;
        fount-size: 0.8rem;
    }
</style>
@endsection

@section('content')
<form method="POST" action="{{ isset($task) ? route('tasks.update',['task'=>$task->id]) : route('tasks.store') }}">
    @csrf
    @isset($task)
        @method('PUT')
    @endisset
    <div>
        <label for="title">Title</label> <br>
        <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
        @error('title')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="description">Description</label> <br>
        <textarea name="description" id="description" rows="5" cols="23">{{ $task->description ?? old('description') }}</textarea>
        @error('description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="long_description">Long description</label> <br>
        <textarea name="long_description" id="long_description" rows="10" cols="23">{{ $task->long_description ?? old('long_description') }}</textarea>
        @error('long_description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <button type="submit"> 
            @isset($record)
            update task
            @else
            Add task
            @endisset
        </button>
    </div>
</form>

@endsection
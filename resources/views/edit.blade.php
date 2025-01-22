@extends('layouts.app')

@section('title', 'Edit a task')

@section('styles')
<style>
    .error-message{
        color:red;
        fount-size: 0.8rem;
    }
</style>

@section('content')
<form method="POST" action="{{ route('tasks.update', ['id'=>$task->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label> <br>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        @error('title')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="description">Description</label> <br>
        <textarea name="description" id="description" rows="5" cols="23" >{{ $task->description }}</textarea>
        @error('description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="long_description">Long description</label> <br>
        <textarea name="long_description" id="long_description" rows="10" cols="23">{{ $task->long_description }}</textarea>
        @error('long_description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <button type="submit">Edit Task</button>
    </div>
</form>

@endsection
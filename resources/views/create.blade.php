@extends('layouts.app')

@section('title', 'Add a new task')

@section('styles')
<style>
    .error-message{
        color:red;
        fount-size: 0.8rem;
    }
</style>
@section('content')
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
        <label for="title">Title</label> <br>
        <input type="text" name="title" id="title">
        @error('title')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="description">Description</label> <br>
        <textarea name="description" id="description" rows="5" cols="23" ></textarea>
        @error('description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <label for="long_description">Long description</label> <br>
        <textarea name="long_description" id="long_description" rows="10" cols="23"></textarea>
        @error('long_description')
          <p class="error-message">{{ $message }}</p>  
        @enderror
    </div>
    <div>
        <button type="submit">Add task</button>
    </div>
</form>

@endsection
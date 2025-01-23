@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title" class="block uppercase text-slate-700 mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block uppercase text-slate-700 mb-2">Description</label> 
            <textarea name="description" id="description" rows="2" cols="23"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline">
            {{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description" class="block uppercase text-slate-700 mb-2">Long description</label>
            <textarea name="long_description" id="long_description" rows="4" cols="23"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline">
            {{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-500 shadow-small ring-1 ring-slate-700/10 hover:bg-slate-50">
                @isset($record)
                    update task
                @else
                    Add task
                @endisset
            </button>
            <a  href="{{ route('tasks.index') }}" class="font-medium text-gray-700 underline decoration-pink-500">Cancel</a>
        </div>
    </form>

@endsection

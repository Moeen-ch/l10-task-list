@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    @forelse ($tasks as $task)
        <div style="margin-left: 10px">
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>there are a not tasks </div>
    @endforelse


    @if ($tasks->count())
        <div>
            {{ $tasks->links() }}
        </div>
    @endif
@endsection

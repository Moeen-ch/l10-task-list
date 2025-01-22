@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
@forelse ($tasks as $task )
        <div>
            <ul>
                <li>
                    <a href="{{ route('tasks.show',['task'=>$task->id]) }}">{{ $task -> title }}</a>
                </li>
            </ul>
        </div>
    @empty
    <div>there are a not tasks </div>
    @endforelse
@endsection




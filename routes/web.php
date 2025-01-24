<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// This / route redirect to the index page 
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Route to display a paginated list of tasks in the 'index' view, ordered by the latest tasks, and naming the route as 'tasks.index'
Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(10)
    ]);
})->name('tasks.index');

// Route to display the form for creating a new task, mapped to the 'create' view
Route::view('/tasks/create', 'create')->name('tasks.create');

// Route to display the edit form for a specific task, passing the task data to the 'edit' view
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit', [
        'task' => $task
    ]);
})->name('tasks.edit');

// Route to display the details of a specific task, passing the task data to the 'show' view and naming the route as 'tasks.show'
Route::get('/tasks/{task}', function (Task $task) {
    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

// Route to handle the creation of a new task, validating the request data and redirecting to the 'tasks.show' route with a success message
Route::post('/tasks', function (TaskRequest $request) {
    $task = Task::create($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully!');
})->name('tasks.store');

// Route to handle the update of an existing task, validating the request data, updating the task, and redirecting to the 'tasks.show' route with a success message
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
    $task->update($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');
})->name('tasks.update');

// Route to handle the deletion of a specific task, removing it from the database and redirecting to the 'tasks.index' route with a success message
Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

// Route to toggle the completion status of a specific task, updating its status and redirecting back with a success message
Route::put('/tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggelComplete();
    return redirect()->back()->with('success', 'Task status updated successfully!');
})->name('tasks.toggle-complete');



// Route::get('/xxx',function(){
//     return 'Hello World';
// })->name('hello');
// Route::get('/hallo', function(){
//     return redirect()->route('hello');
// });
// Route::get('/user/{name}',function($name){
//  return 'hello '.$name;
// });

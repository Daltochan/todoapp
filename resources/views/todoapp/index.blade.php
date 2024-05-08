@extends("layouts.default")
@section("title","To do list")

@section("content")

<h1>@yield("title")</h1>

<form method="POST" action="#" class="add-task-form">
    @csrf
    <input type="text" name="content" placeholder="Enter task here">
    <button type="submit">Send</button>
</form>

@forelse($tasks as $task)
    <ul>
        <li>
            <div class="task-item">
                <form method="POST" action="{{ route("todolist.update", $task->id) }}">
                    @csrf
                    <input type="text" name="content" value="{{ $task->content }}">
                    <button type="submit">EDIT</button>
                </form>
                <form method="POST" action="{{ route("todolist.destroy",$task) }}" class="delete-task-form">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Delete</button>
                </form>
            </div>
        </li>
    </ul>
@empty
    <p>No tasks found</p>
@endforelse

@endsection

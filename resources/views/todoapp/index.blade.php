@extends("layouts.default")
@section("title","To do list")

@section("content")

<h1>@yield("title")</h1>

<form method="POST" action="#">
    @csrf
    <input type="text" name="content" placeholder="Enter task here">
    <button type="submit">Send</button>
</form>

@forelse($tasks as $task)
    <ul>
        <li>{{ $task->content }}</li>
    </ul>
@empty
    <p>No tasks found</p>
@endforelse

@endsection

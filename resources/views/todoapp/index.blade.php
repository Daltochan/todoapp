@extends("layouts.default")
@section("title","To do list")

@section("content")
<h1>@yield("title")</h1>

<form method="POST" action="#">
    @csrf
    <input type="text" name="task" placeholder="Enter task here">
    <button type="submit">Send</button>
</form>

@endsection

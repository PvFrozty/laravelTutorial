@extends('layout')

@section('content')
  <div class="container">
        <h1 class="title">{{$project->title}}</h1>
        <p>{{$project->description}}</p>

        <a href="/projects/{{$project->id}}/edit">Edit</a>
  </div>
@if ($project->tasks->count())
<div class="container">
    
        @foreach ($project->tasks as $task)
            <li>{{$task->description}}</li>
        @endforeach
    
</div>
@endif

@endsection
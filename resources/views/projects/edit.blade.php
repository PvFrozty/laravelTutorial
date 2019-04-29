@extends('layout')

@section('content')
    <h1 class="title">edit Project</h1>
<form action="/projects/{{$project->id}}" method="post">
        @method('patch')
       @csrf
        <div class="field">
                <label for="title">Title</label>
                <div class="control">
                <input class="input" type="text" name="title" id="title" placeholder="Title" value="{{$project->title}}">
                </div>
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
            <textarea name="description" id="description"  class="textarea">{{$project->description}}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link"> Update Project</button> 

            
            </div>
        </div>
    </form>
    <form action="/projects/{{$project->id}}" method="POST">
        @method('delete')
         @csrf
      <button class="button is-warning" type="submit"> Delete</button>
     </form>
@endsection
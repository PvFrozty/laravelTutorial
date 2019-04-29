@extends('layout')

@section('content')
<h1>Create a new project</h1>
<div class="container">
    <form method="POST" action="/projects">
         {{ csrf_field() }}
       
       
        
        <div class="field">
        <div class="control"><input class="input {{$errors-> has('title') ? 'is-danger' : '' }}" type='text' name='title' placeholder='project title' value="{{ old('title') }}"></div>
        </div>
        <div class="field">
                <div class="control"><textarea class="textarea {{$errors-> has('description') ? 'is-danger' : '' }}" type='text' name='description' placeholder='project Description'>{{ old('description') }}</textarea></div>
        </div>
        <div class="field">
                <div class="control"><button class="button" type="submit">Create Project</button></div>
        </div>
        
        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>    
                    @endforeach
                </ul>
            </div>
        @endif
        
    </form>
</div>

@endsection
   
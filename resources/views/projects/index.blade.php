<html>
    <head>
        <title>projects</title>
    </head>
    <body>
        <h1>Projects <a href="/projects/create">Create New</a></h1>
        
        <ul>
            @foreach($projects as $project)
                <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
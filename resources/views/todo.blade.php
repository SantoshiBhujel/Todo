<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ToDo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
    <header>
        <i class="fas fa-clipboard-list"></i>
        <h1>My ToDo</h1>
        <form id="search-box">
            <input type="text" placeholder="Search ToDo's">
            <button>Search</button>
        </form>
    </header>
    <div class="todo-list">
        @foreach ($todos as $todo)
        <ul>
            <li>
                <span class="name">{{ $todo->todo }}</span>
                <span class="del">
                    <form action="{{ route('todo.destroy',$todo->id) }}" method="POST" id="add-list">
                        @csrf
                        {{method_field('DELETE')}}
                        
                        <button type="submit" class="btn btn-primary" name="delete" value="delete"> {{ __('Done!') }}</button>
                    </form>      
                </span>
            </li>
        </ul>
        @endforeach
    </div>
    <form action="{{route('todo.store')}}" method="POST" id="add-list">
        @csrf
        <input type="text" placeholder="Add list here..." name ="todo" id="todo">
        <button>Add To List</button>
    </form>
    
</body>
</html>
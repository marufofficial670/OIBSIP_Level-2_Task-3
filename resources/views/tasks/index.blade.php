<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.index-name {
    text-align: center;
    color: #333;
}

.btn-create {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.full-table {
    margin: 20px auto;
    width: 80%;
}

.tbl-name {
    width: 100%;
    border-collapse: collapse;
}

.tbl-name th, .tbl-name td {
    padding: 10px;
    text-align: left;
}

.tbl-name th {
    background-color: #4CAF50;
    color: white;
}

.tbl-name tr:nth-child(even) {
    background-color: #f2f2f2;
}

.btn-edit, .btn-delete {
    padding: 8px 15px;
    background-color: #008CBA;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
.btn-delete {
    padding: 8px 15px;
    background-color: #cc142d;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}


.btn-edit:hover, .btn-delete:hover {
    background-color: #005f7f;
}

    </style>
</head>
<body>
    <h2 class="index-name">
       All Tasks
    </h2>
    <a href="{{ route('tasks.create') }}"><button class="btn-create">Create Task</button></a>


    <div class="full-table">
        <table border="1" class="tbl-name">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>


            </tr>
            @foreach ($tasks as $task)

            <tr>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a href="{{route('tasks.edit', ['task' => $task])}}"><button class="btn-edit">Edit</button></a>
                </td>
                <td>
                    <form method="post" action="{{route('tasks.destroy', ['task' => $task])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn-delete">

                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>

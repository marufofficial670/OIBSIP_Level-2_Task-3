<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.update-name {
    text-align: center;
    color: #333;
}

.full-table {
    margin: 20px auto;
    width: 50%;
}

.upd-title, .upd-description {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-update {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-update:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <form method="post" action="{{route('tasks.update', ['task' => $task])}}">
        @csrf
        @method('put')
        <div>
            <h1 class="update-name"><strong>Update your Task</strong></h1>
        </div>
        <div>
   <label for="title">Title:</label><br>
    <input type="text" name="title" value="{{$task->title}}" class="upd-title" >
</div>
<div>
   <label for="description">Description:</label><br>
        <input id="description" name="description"  value="{{$task->description}}" class="upd-description"></input><br>
</div>
        <input type="submit" value="Update" class="btn-update">

</form>
</body>
</html>

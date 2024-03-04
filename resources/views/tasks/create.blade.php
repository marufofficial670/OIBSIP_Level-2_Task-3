<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.create-name {
    text-align: center;
    color: #333;
}

.full-table {
    margin: 20px auto;
    width: 50%;
}

.inp-name, .inp-description {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-create {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-create:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <form method="post" action="{{route('tasks.store')}}">
        @csrf
        @method('post')
        <div>
            <h1 class="create-name"><strong>Create New Task</strong></h1>
        </div>
        <div class="full-table">
   <label for="title">Title:</label><br>
    <input type="text" name="title" class="inp-name" >
</div>
<div>
   <label for="description">Description:</label><br>
        <textarea id="description" name="description" class="inp-description" ></textarea><br>
</div>
        <input type="submit" value="Create New Task" class="btn-create">

</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<form action="{{ route('task.create') }}">
    <button>Create</button>
</form>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>
                <input data-id="{{$task->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $task->status ? 'checked' : '' }} disabled>
            </td>
            <form action="{{ route('task.delete', $task->id) }}" method="post">
                {{ csrf_field() }}
                <td><button type="submit" class='delete' data-id='$id'>Delete</button></td>
            </form>
            <form action="{{ route('task.edit', $task->id) }}" method="get">
                {{ csrf_field() }}
                <td><button type="submit" class='edit' data-id='$id'>Edit</button></td>
            </form>
        </tr>
    @endforeach
</table>

</body>
</html>
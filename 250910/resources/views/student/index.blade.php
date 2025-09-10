<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            width: 960px;
            margin: 0 auto;
        }
    </style>
</head>
<?php

$url = route('students.create');
?>

<body>
    <div class="container mt-3">
        <h2>Student Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <div class="text-end mt-3">
            {{-- <a href="http://localhost/students/create" class="btn btn-success">add</a> --}}
            <a href="{{ route('students.create') }}" class="btn btn-success">add</a>
            <a href="{{ route('students.create') }}" class="btn btn-primary">excel</a>
        </div>
        @php

        @endphp
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>
                        {{-- <a href="http://localhost/students/1/edit" class="btn btn-warning">edit</a> --}}
                        <a href="{{ route('students.edit', ['student' => 1]) }}" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>
                        <a href="http://localhost/students/edit" class="btn btn-warning">
                            edit
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>
                        <a href="http://localhost/students/edit" class="btn btn-warning">
                            edit
                        </a>
                    </td>
                </tr>

                @foreach ($data as $value)
                    <tr>
                        <td>{{ $value['id']}}</td>
                        <td>{{ $value['name']}}</td>
                        <td>
                            <a href="{{ route('students.edit', ['student' => $value['id']]) }}" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>

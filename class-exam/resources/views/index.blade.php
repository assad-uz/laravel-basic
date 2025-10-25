<!DOCTYPE html>
<html>
<head>
    <title>Students & Subjects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Student - Subject List</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Subjects</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $index => $student)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>
                        @if ($student->subjects->isNotEmpty())
                            <ul class="mb-0">
                                @foreach ($student->subjects as $subject)
                                    <li>
                                        <strong>{{ $subject->name }}</strong>
                                        (Code: {{ $subject->code }})
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">No subjects assigned</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

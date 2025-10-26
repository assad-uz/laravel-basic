<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Clients (HasManyThrough)</title>
    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom Style for better look -->
    <style>
        body { background-color: #f8f9fa; }
        .card { box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border: none; }
        .table-header { background-color: #0d6efd; color: white; }
        .table thead th { border-bottom: none; }
    </style>
</head>
<body class="p-4 p-md-5">

    <div class="container-fluid">
        <h1 class="h3 font-weight-bold mb-4 text-dark border-bottom border-primary pb-2">Employee Clients List (HasManyThrough)</h1>
        <p class="mb-5 text-muted">
            This table demonstrates accessing **Clients** through the **TeamMember** intermediate model from the **Employee** model using the <code>hasManyThrough</code> relationship in Laravel.
        </p>

        <!-- Main Data Card -->
        <div class="card rounded-3 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-header">
                        <tr>
                            <th class="py-3 px-4 text-start rounded-top-left">#</th>
                            <th class="py-3 px-4 text-start">Employee Details</th>
                            <th class="py-3 px-4 text-start">Team Members</th>
                            <th class="py-3 px-4 text-start rounded-top-right">Clients Served (HasManyThrough)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through the Employees Collection -->
                        @foreach ($employees as $empl )
                            <tr>
                                <td class="px-4 py-3 fw-bold">{{ $loop->iteration }}</td>
                                <!-- Employee Details -->
                                <td class="px-4 py-3">
                                    <span class="text-primary fw-bold">{{ $empl->name }}</span>
                                    <small class="d-block text-muted">ID: {{ $empl->id }}</small>
                                </td>

                                <!-- Team Members (Direct HasMany) -->
                                <td class="px-4 py-3">
                                    @if ($empl->teams->isNotEmpty())
                                        @foreach ($empl->teams as $t )
                                            <span class="badge bg-secondary text-white me-1 mb-1 rounded-pill">{{ $t->name }}</span>
                                        @endforeach
                                    @else
                                        <span class="text-muted fst-italic">No Teams</span>
                                    @endif
                                </td>

                                <!-- Clients (HasManyThrough) -->
                                <td class="px-4 py-3">
                                    @if ($empl->clients->isNotEmpty())
                                        @foreach ($empl->clients as $c )
                                            <span class="badge bg-success text-white me-1 mb-1 rounded-pill">{{ $c->name }}</span>
                                        @endforeach
                                    @else
                                        <span class="text-muted fst-italic">No Clients</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Empty State Message -->
        @if ($employees->isEmpty())
            <div class="text-center p-5 bg-white rounded-3 mt-4 border border-dashed border-secondary">
                <h5 class="text-muted">No Employee data found.</h5>
                <p class="text-sm text-secondary mt-3">Please run <code>php artisan db:seed --class=EmployeeClientSeeder</code> to populate the tables.</p>
            </div>
        @endif
    </div>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

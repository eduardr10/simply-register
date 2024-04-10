<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html,body {
            padding: 0px;
            margin: 0px;
            max-height: 100vh;
            width: 100vw;
        }

        th,
        td {
            white-space: nowrap;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination li a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            color: #333;
            background-color: #fff;
        }

        .pagination li.active a {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <header class="container-fluid mt-5 px-5 ma d-flex justify-content-start" style="margin-left: 20%;">
        @if (Route::currentRouteName() != 'personal-info.index')
        <a href="{{ route('personal-info.index') }}" class="mx-2">
            <button class="btn btn-primary">Inicio</button>
        </a>
        @endif
        @if (Route::currentRouteName() != 'personal-info.create')
        <a href="{{ route('personal-info.create') }}" class="mx-2">
            <button class="btn btn-primary">Añadir</button>
        </a>
        @endif
    </header>
    <div class="container-fluid mt-5 px-5">
        <h1 class="text-center mb-4">Información Personal</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
    function exportWithSearch() {
        const searchValue = document.querySelector('#search').value;
        const url = "{{ route('export-to-excel') }}?search=" + searchValue;
        window.location.href = url;
    }
</script>
</body>

</html>
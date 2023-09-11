<!DOCTYPE html>
<html>
<head>
    <title>Locations</title>
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="locationsTable">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr>
                <td>{{ $location->nombre }}</td>
                <td>{{ $location->descripcion }}</td>
                <td>{{ $location->direccion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#locationsTable').DataTable();
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Listado de mensajes</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha</th>
        </tr>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->user_name }}</td>
                <td>{{ $message->user_mail }}</td>
                <td>{{ $message->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Mensajes Recibidos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        @foreach ($messages as $message)
            <tr>
                <td>
                    <a href="{{ route('message.show', $message->id) }}">{{ $message->id }}</a>
                </td>
                <td>{{ $message->user_name }}</td>
                <td>{{ $message->user_mail }}</td>
                <td>{{ $message->created_at }}</td>
                <td>
                    <a href="{{ route('message.edit', $message) }}">Editar</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>

</html>

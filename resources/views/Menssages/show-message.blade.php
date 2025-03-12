<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Message # {{ $message->id }}</h1>

    <ul>
        <li>Nombre: {{ $message->user_name }}</li>
        <li>Correo: {{ $message->user_mail }}</li>
    </ul>
    <p>
        Mensaje: <br>
        {{ $message->message }}
    </p>
    <hr>
    <a href="{{ route('message.edit', $message) }}">Editar</a>

    <form action="{{ route('messages.destroy', $message) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>

</body>

</html>

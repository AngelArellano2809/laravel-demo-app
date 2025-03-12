<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>

<body>
    <h1>Editar mensaje # {{ $message->id }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('messages.update', $message) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="user_name">Nombre</label>
        <input type="text" name="user_name" value="{{ $message->user_name }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="user_mail">Correo</label>
        <input type="email" name="user_mail" value="{{ $message->user_mail }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="message">Mensaje</label>
        <textarea name="user_message" cols="30" rows="10">{{ $message->user_message }}</textarea>
        @error('user_message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>

</html>

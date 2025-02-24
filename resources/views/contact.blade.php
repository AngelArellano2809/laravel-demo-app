<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/new-contact" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name" />
        <br>
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="user_mail" />
        <br>
        <label for="msg">Mensaje:</label>
        <textarea id="msg" name="user_message"></textarea>
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>

</html>

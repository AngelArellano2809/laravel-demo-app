<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/my-handling-form-page" method="post">
        <ul>
            <li>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user_name" />
            </li>
            <li>
                <label for="mail">Correo electrónico:</label>
                <input type="email" id="mail" name="user_mail" />
            </li>
            <li>
                <label for="msg">Mensaje:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
        </ul>
    </form>
</body>

</html>

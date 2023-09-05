<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            display:flex;
            justify-content: center;
        }
        form{
            display:flex;
            justify-content: center;
            gap:40px;
            align-items:center;
            flex-direction:column;
            width:500px;
            height:300px;
text-align:center;
        }

        input{
            height:30px;
            width:200px;
        }

        input[type=submit]{
            height:35px;
            width:200px;
        }
    </style>
</head>
<body>
<form action="">
<input type="email" placeholder='E-mail'>
<input type="password" placeholder='password'>
<input type="submit" value="Entrar">
<a href="/register">ou registre-se</a>


</form>

</body>
</html>

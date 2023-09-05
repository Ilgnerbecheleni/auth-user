<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <style>
        body{
            display:flex;
            justify-content:center ;  /*centrar horizontalmente*/
            align-items:center;
            flex-direction:column;

        }
        img{
            max-width: 400px;
        }

        a{
            text-decoration: none ;

            background:#000;
            width:150px;
            height:40px;
            text-align:center;
            display:flex;
            justify-content:center ;  /*centrar horizontalmente*/
            align-items:center;
            border-radius:8px;
            color:white;
            text-transform:uppercase;
        }
    </style>
</head>
<body>


<img src="{{ asset('/img/user.png') }}" alt="Descrição da imagem">

<h1>Faça login ou Registre-se em nossa plataforma</h1>
<a href="/login">Login</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,442;1,442&display=swap" rel="stylesheet">
    <!-- fonts -->

    <style>
        
        *{
            padding: 0;
            margin: 0;
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110px;
            background-color: rgb(77, 143, 181);
        }
        .content ul{
            gap: 30px;
            display: flex;
            flex-direction: row;
            width: fit-content;
            height: 110px;
            list-style: none;
        }
        li{
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 442;
            font-style: normal;
            
        }
        li:hover{
            cursor: pointer;
            transform: scale(1.1);
            transition-duration: 0.2s;
            transition-timing-function: ease-in-out;
            transition-property: transform;
        }
    </style>

</head>
<body>
    <header>
            <nav class="content">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/mostrar">ALUNOS CADASTRADOS</a></li>
                    <li><a href="/cadastro"> CADASTRAR ALUNOS</a></li>
                    @auth
                    <li><a href="/dashboard">Meus projetos</a></li>
                    @endauth
                    @guest
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    @endguest
                </ul>
            </nav>
    </header>
        @yield('main')
</body>
</html>
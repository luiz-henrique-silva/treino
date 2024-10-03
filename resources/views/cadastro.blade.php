<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            background-image: radial-gradient(circle at 50% -20.71%, #faffff 0, #d8f0fa 25%, #b5def2 50%, #92cbeb 75%, #72b9e5 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .caixa{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            width: 500px;
            height: 500px;
            background-color: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.459);
            border-radius: 5px;
        }
        main{
            height: 100vh;
            display:flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
        }
        input{
            margin:10px;
            border:none;
            border-radius:5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.459);
            padding:10px
        }
        button{
            margin-left:100px;
            margin-top:50px;
            background-color: green;
            color: white;
            border: none;
            padding: 10px;
            border-radius:5px;
        }
        .msg{
            color: greenyellow;
        }
    </style>
</head>

<body>
    @extends('header')
    @section('main')
    <main>
        
            <h1>Cadastro de Alunos</h1>
            <div class="caixa">
            @if (session('success'))
                <div class="msg">{{ session('success') }}</div>
            @endif

            <form action="/cadastro" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto" accept="image/*" required>
                <br>
                
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br>

                <label for="estagio">Estágio:</label>
                <input type="text" name="estagio" id="estagio" required>
                <br>

                <label for="idade">Idade:</label>
                <input type="text" name="idade" id="idade" required>
                <br>

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
                <br>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    @endsection
</body>

</html>

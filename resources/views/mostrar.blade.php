<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            text-align: center;
            background-color: aliceblue;
        }
        img{
            border-radius: 50%;
        }
        main{
            flex: 1;
            display: flex;
            
            align-items: center;
            justify-content: center;
            gap: 40px;
        }
        .card_aluno{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: auto;
            padding: 20px;
            background-color: white;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 5px rgb(0, 0, 0, 0.300);
        }
    </style>
</head>
<body>
@extends('header')
@section('main')
        

    <h1>Lista de Alunos</h1>
    <!-- <table border="1">
        <tr>
            <th>Nome</th>
            <th>estagio</th>
            <th>idade</th>
            <th>cpf</th>
        </tr>
         @foreach ($alunos as $aluno)
        <tr>
            <p>{{ $aluno->nome }}</p>
            <p>{{ $aluno->estagio }}</p>
            <p>{{ $aluno->idade }}</p>
            <p>{{ $aluno->cpf }}</p>
        </tr>
        @endforeach
    </table> -->
    <main>
    @foreach ($alunos as $aluno)
        <div class="card_aluno">
            <!-- <img src="{{ asset('storage/' . $aluno->foto) }}" alt="Foto de {{ $aluno->nome }}" width="100"> -->
            <img src="{{ asset('storage/' . $aluno->foto) }}" width="100">
            <p>Nome: {{ $aluno->nome }}</p>
            <p>Estagio: {{ $aluno->estagio }}</p>
            <p>Idade: {{ $aluno->idade }}</p>
            <p>CPF: {{ $aluno->cpf }}</p>
        </div>
        @endforeach
    @endsection
</main>
</body>
</html>

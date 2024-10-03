<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('mostrar', compact('alunos'));
    }
// -----------------------------------------------------------------------------------------------------------------------
// todas as formas de mostrar                                                                                            |
//                                                                                                                       |
//                                                                                                                       |
//                                                                                                                       |
//public function index()                                                                                                |
//{                                                                                                                      |
//    $alunos = Aluno::all();                                                                                            |
//    return view('mostrar', ['alunos' => $alunos]);                                                                     |
//}                                                                                                                      |
//                                                                                                                       |                                
// public function index()                                                                                               |
// {                                                                                                                     |
//     $alunos = Aluno::all();                                                                                           |
//     return view('mostrar')->with('alunos', $alunos);                                                                  |
// }                                                                                                                     |
// public function index()                                                                                               |
// {                                                                                                                     |
//     $alunos = Aluno::all();                                                                                           |
//     return view('mostrar', ['alunos' => $alunos,'outraVariavel' => 'valor',                                           |
//     ]);                                                                                                               |
// }                                                                                                                     |
// -----------------------------------------------------------------------------------------------------------------------


    public function home(){
        return view('index');
    }
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação para imagens
            'nome' => 'required|string',
            'estagio' => 'required|string',
            'idade' => 'required|string',
            'cpf' => 'required|string',
            
        ]);
        if ($request->hasFile('foto')) {
            // Armazena a imagem na pasta 'public/uploads' e retorna o caminho
            $imagePath = $request->file('foto')->store('uploads', 'public');
        }

        //Aluno::create($request->all()); foi necesario alterar porque o metodo create não consegue pegar esse tipo de especificação image path, só outras coisas como string e integer

        Aluno::create([
            'foto' => $imagePath, // Aqui está o campo da foto que foi adicionado
            'nome' => $request->nome,
            'estagio' => $request->estagio,
            'idade' => $request->idade,
            'cpf' => $request->cpf,
            
        ]);

        return redirect('/cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
    public function update(){
        
    }
}


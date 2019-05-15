<?php

namespace App\Http\Controllers;

use App\mensagens;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class mensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listamensagens = mensagens::all();
        return view('mensagens.list',['mensagens' => $listamensagens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensagens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título para a mensagem',
            'autor.required' => 'É obrigatória um autor para a mensagem',
            'texto.required' => 'É obrigatório um texto para a mensagem',
        );

        $regras = array(
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'texto' => 'required|string|max:255',
        );

        $validador = Validator::make($request->all(), $regras, $messages);

        if ($validador->fails()) {
            return redirect('mensagens/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        $obj_mensagens = new mensagens();
        $obj_mensagens->title =       $request['title'];
        $obj_mensagens->autor = $request['autor'];
        $obj_mensagens->texto = $request['texto'];
        $obj_mensagens->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagens = mensagens::find($id);
        return view('mensagens.show',['mensagens' => $mensagens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj_mensagens = mensagens::find($id);
        return view('mensagens.edit',['mensagens' => $obj_mensagens]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título para o exercicio',
            'autor.required' => 'É obrigatória um autor para a exercicio',
            'texto.required' => 'É obrigatório um texto para o exercicio',
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'texto' => 'required|string|max:255',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect("mensagens/$id/edit")
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_mensagens = mensagens::findOrFail($id);
        $obj_mensagens->title =   $request['title'];
        $obj_mensagens->autor = $request['autor'];
        $obj_mensagens->texto = $request['texto'];
        $obj_mensagens->save();
        return redirect('/mensagens')->with('success', 'Mensagem alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensagens $mensagens)
    {
        //
    }
}

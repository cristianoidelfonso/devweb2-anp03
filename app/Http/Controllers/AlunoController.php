<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Alunos';
        $alunos = Aluno::All();

        return view('admin.alunos.alunos', compact('alunos','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Alunos';
        $subtitulo = 'Registrando um novo aluno';
        $action = route('alunos.store');

        return view('admin.alunos.form_aluno', compact('action','titulo','subtitulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        Aluno::create($request->all());

        $request->session()->flash('sucesso', "Aluno $request->nome_aluno incluído com sucesso!");

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('alunos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Alunos';
        $subtitulo = 'Editando os dados do aluno';
        $aluno = Aluno::find($id);

        $action = route('alunos.update', $aluno->id);

        return view('admin.alunos.form_aluno', compact('aluno', 'action', 'titulo','subtitulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->update($request->all());

        $request->session()->flash('sucesso', "Aluno $request->nome_aluno alterado com sucesso!");

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Aluno::destroy($id);

        $request->session()->flash('sucesso', "Aluno excluído com sucesso!");

        return redirect()->route('alunos.index');
    }
}

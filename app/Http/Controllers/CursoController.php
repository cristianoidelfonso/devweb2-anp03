<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use App\Models\Professor;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Cursos';
        $cursos = Curso::All();

        return view('admin.cursos.cursos', compact('cursos','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Cursos';
        $subtitulo = 'Cadastrando um novo curso';
        $action = route('cursos.store');

        $professors = Professor::All();

        return view('admin.cursos.form_curso', compact('action', 'professors', 'titulo', 'subtitulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        Curso::create($request->all());

        $request->session()->flash('sucesso', "Curso $request->nome_curso incluído com sucesso!");

        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('cursos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Cursos';
        $subtitulo = 'Editando os dados do curso';
        $curso = Curso::find($id);

        $professors = Professor::All();

        $action = route('cursos.update', $curso->id);

        return view('admin.cursos.form_curso', compact('curso', 'action', 'professors', 'titulo', 'subtitulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, $id)
    {
        $curso = Curso::find($id);

        $curso->update($request->all());

        $request->session()->flash('sucesso', "Curso {$request->nome_curso} alterado com sucesso!");

        return redirect()->route('cursos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Curso::destroy($id);

        $request->session()->flash('sucesso', "Curso excluído com sucesso!");

        return redirect()->route('cursos.index');
    }
}

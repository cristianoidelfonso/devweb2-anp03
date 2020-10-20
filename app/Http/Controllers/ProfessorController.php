<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProfessorRequest;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Professores';
        $professores = Professor::All();

        return view('admin.professores.professores', compact('professores','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Professores';
        $subtitulo = 'Cadastrando um novo professor';
        $action = route('professores.store');

        return view('admin.professores.form_professor', compact('action', 'titulo', 'subtitulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessorRequest $request)
    {
        Professor::create($request->all());

        $request->session()->flash('sucesso', "Professor $request->nome_professor incluído com sucesso!");

        return redirect()->route('professores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('professores.index');
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
        $subtitulo = 'Editando os dados do professor';
        $professor = Professor::find($id);

        $action = route('professores.update', $professor->id);

        return view('admin.professores.form_professor', compact('professor', 'action','titulo','subtitulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessorRequest $request, $id)
    {
        $professor = Professor::find($id);

        $professor->update($request->all());

        $request->session()->flash('sucesso', "Professor $request->nome_professor alterado com sucesso!");

        return redirect()->route('professores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Professor::destroy($id);

        $request->session()->flash('sucesso', "Professor excluído com sucesso!");

        return redirect()->route('professores.index');
    }
}

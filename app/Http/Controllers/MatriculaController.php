<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matricula;
use App\Models\Professor;
use App\Models\Curso;
use App\Models\Aluno;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Matrículas';
        $matriculas = Matricula::All();
        $alunos = Aluno::All();

        return view('admin.matriculas.matriculas', compact('matriculas', 'alunos', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Matrículas';
        $subtitulo = 'Registrando uma nova matrícula';
        $action = route('matriculas.store');

        $professors = Professor::All();
        $cursos = Curso::All();
        $alunos= Aluno::All();

        return view('admin.matriculas.form_matricula', compact('titulo','subtitulo','action', 'professors', 'cursos', 'alunos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matricula::create($request->all());

        $request->session()->flash('sucesso', "Matrícula registrada com sucesso!");

        return redirect()->route('matriculas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('matriculas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $titulo = 'Matrículas';
        // $subtitulo = 'Editando matrícula';

        // $matricula = Matricula::find($id);

        // $professors = Professor::All();
        // $cursos = Curso::All();
        // $alunos = Aluno::All();

        // $action = route('matriculas.update', $matricula->id);

        // return view('admin.matriculas.form_matricula', compact('titulo','subtitulo','matricula', 'action', 'professors', 'cursos', 'alunos'));

        return redirect()->route('matriculas.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);

        $matricula->update($request->all());

        $request->session()->flash('sucesso', "Matrícula alterada com sucesso!");

        return redirect()->route('matriculas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Matricula::destroy($id);

        $request->session()->flash('sucesso', "Matrícula excluída com sucesso!");

        return redirect()->route('matriculas.index');
    }
}

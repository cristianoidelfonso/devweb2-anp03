<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CursoRequest;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::All();

        return view('admin.cursos.cursos', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('cursos.store');

        return view('admin.cursos.form_curso', compact('action'));
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
        $curso = Curso::find($id);

        $action = route('cursos.update', $curso->id);

        return view('admin.cursos.form_curso', compact('curso', 'action'));
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

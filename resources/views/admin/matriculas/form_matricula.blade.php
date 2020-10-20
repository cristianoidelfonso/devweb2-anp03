@extends('admin.layout.template.index')

@section('content-main')

    <p class="center-align"><strong>{{$titulo}}</strong> - {{$subtitulo}}</p>

     <form action="{{$action}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf
            @isset($matricula)
                @method('PUT')
            @endisset

            <div class="input-field">
                <select name="aluno_id">
                    <option>{{'Selecione o aluno'}}</option>
                    @forelse ($alunos as $aluno)
                        <option value="{{$aluno->id}}">{{$aluno->nome_aluno}}</option>
                    @empty
                        <option>{{'Sem aluno'}}</option>
                    @endforelse
                </select>
                <label>Aluno</label>
            </div>

            <div class="input-field">
                <select name="curso_id">
                    <option>{{'Selecione o curso'}}</option>
                    @forelse ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome_curso}}</option>
                    @empty
                        <option>{{'Sem curso'}}</option>
                    @endforelse
                </select>
                <label>Curso</label>
            </div>

            <div class="input-field">
                <select name="professor_id">
                    <option>{{'Selecione o professor'}}</option>
                    @forelse ($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->nome_professor}} - {{$professor->formacao}}</option>
                    @empty
                        <option>{{'Sem professor'}}</option>
                    @endforelse
                </select>
                <label>Professor</label>
            </div>


            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                {{-- <a href="" class="btn-flat waves-effect">
                    <i class="large material-icons">Salvar</i>
                </a> --}}

                <a href="{{route('matriculas.index')}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>

            </div>
        </form>

@endsection

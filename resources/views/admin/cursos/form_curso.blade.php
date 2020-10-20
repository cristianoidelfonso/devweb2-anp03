@extends('admin.layout.template.index')

@section('content-main')

     <form action="{{$action}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf
            @isset($curso)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input class="form-control" type="text" id="nome_curso" name="nome_curso" value="{{old('nome_curso', $curso->nome_curso ?? '')}}">
                <label for="nome_curso">Nome</label>
                @error('nome_curso')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="carga_horaria" name="carga_horaria" value="{{old('carga_horaria', $curso->carga_horaria ?? '')}}" >
                <label for="carga_horaria">Carga Horaria</label>
                 @error('carga_horaria')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="text" id="descricao" name="descricao" value="{{old('descricao', $curso->descricao ?? '')}}">
                <label for="descricao">Descrição</label>
                 @error('descricao')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="valor" name="valor" value="{{old('valor', $curso->valor ?? '')}}">
                <label for="valor">Valor</label>
                @error('valor')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <select name="professor_id">
                    @forelse ($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->nome_professor}} - {{$professor->formacao}}</option>
                    @empty
                        <option>{{'Sem professores cadastrados'}}</option>
                    @endforelse
                </select>
                <label>Professor</label>
            </div>


            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                {{-- <a href="" class="btn-flat waves-effect">
                    <i class="large material-icons">Salvar</i>
                </a> --}}

                <a href="{{route('cursos.index')}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>

            </div>
        </form>

@endsection


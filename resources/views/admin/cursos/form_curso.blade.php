@extends('admin.layout.template.index')

@section('content-main')

     <form action="{{$action}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf
            @isset($curso)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input class="form-control" type="text" id="nome" name="nome" value="{{old('nome', $curso->nome ?? '')}}">
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="carga_horaria" name="carga_horaria" >
                <label for="carga_horaria">Carga Horaria</label>
                 @error('carga_horaria')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="text" id="professor" name="professor" >
                <label for="professor">Professor</label>
                 @error('professor')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="preco" name="preco" >
                <label for="preco">Preço</label>
                 @error('preco')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                {{-- <a href="{{url()->previous()}}" class="btn-flat waves-effect"> --}}
                    {{-- <i class="large material-icons">close</i> --}}
                    {{-- Cancelar --}}
                {{-- </a> --}}

                <a href="{{route('cursos.index')}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>

            </div>
        </form>

@endsection

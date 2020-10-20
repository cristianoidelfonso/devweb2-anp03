@extends('admin.layout.template.index')

@section('content-main')

     <form action="{{$action}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf
            @isset($professor)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input class="form-control" type="text" id="nome_professor" name="nome_professor" value="{{old('nome_professor', $professor->nome_professor ?? '')}}">
                <label for="nome_professor">Nome</label>
                @error('nome_professor')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="text" id="formacao" name="formacao" value="{{old('formacao', $professor->formacao ?? '')}}" >
                <label for="formacao">Formação</label>
                 @error('formacao')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="email" id="email" name="email" value="{{old('email', $professor->email ?? '')}}">
                <label for="email">E-mail</label>
                 @error('email')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                {{-- <a href="" class="btn-flat waves-effect">
                    <i class="large material-icons">Salvar</i>
                </a> --}}

                <a href="{{route('professores.index')}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>

            </div>
        </form>

@endsection

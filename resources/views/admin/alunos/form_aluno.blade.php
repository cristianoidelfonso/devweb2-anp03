@extends('admin.layout.template.index')

@section('content-main')

    <p class="center-align"><strong>{{$titulo}}</strong> - {{$subtitulo}}</p>

     <form action="{{$action}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf
            @isset($aluno)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input class="form-control" type="text" id="nome_aluno" name="nome_aluno" value="{{old('nome_aluno', $aluno->nome_aluno ?? '')}}">
                <label for="nome_aluno">Nome</label>
                @error('nome_aluno')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="date" id="data_nascimento" name="data_nascimento" value="{{old('data_nascimento', $aluno->data_nascimento ?? '')}}" >
                <label for="data_nascimento">Data nascimento</label>
                 @error('data_nascimento')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field form-control">
                <p><label for="sexo">Sexo</label></p>
                    <p><label><input name="sexo" type="radio" value="M"
                        <?php echo (isset($aluno->sexo) && $aluno->sexo == "M") ? "checked" : ''; ?> />
                    <span>Masculino</span></label></p>

                    <p><label><input name="sexo" type="radio" value="F"
                        <?php echo (isset($aluno->sexo) && $aluno->sexo == "F") ? "checked" : ''; ?> />
                    <span>Feminino</span></label></p>
                 @error('sexo')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="email" id="email" name="email" value="{{old('email', $aluno->email ?? '')}}">
                <label for="email">E-mail</label>
                 @error('email')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input class="form-control" type="text" id="escolaridade" name="escolaridade" value="{{old('escolaridade', $aluno->escolaridade ?? '')}}">
                <label for="escolaridade">Escolaridade</label>
                 @error('escolaridade')
                    <span class="red-text"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                {{-- <a href="" class="btn-flat waves-effect">
                    <i class="large material-icons">Salvar</i>
                </a> --}}

                <a href="{{route('alunos.index')}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>

            </div>
        </form>

@endsection

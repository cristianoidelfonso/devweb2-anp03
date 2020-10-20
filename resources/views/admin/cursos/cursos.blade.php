@extends('admin.layout.template.index')

@section('content-main')

    <p class="center-align"><strong>{{$titulo}}</strong></p>

    <section class="section">
        <div class="tableFixHead">
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th class="centered">Código</th>
                    <th>Nome</th>
                    <th>C.H.</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Id professor</th>
                    <th>Dt.Cadastro</th>
                    <th>Dt.Atualização</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->nome_curso }}</td>
                        <td>{{ $curso->carga_horaria }}</td>

                        <td title="{{$curso->descricao}}">{{ Helper::text_limiter_caracter($curso->descricao, 25)}}</td>

                        <td>{{ $curso->valor }}</td>
                        <td>{{ $curso->professor_id }}</td>
                        <td>{{ date('d/m/Y', strtotime($curso->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($curso->updated_at)) }}</td>
                        <td class="center-align">

                            <a class="btn" href="{{route('cursos.edit', $curso->id)}}">
                                <span title="Editar curso"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </a>

                            <form action="{{route('cursos.destroy', $curso->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">
                                    <span title="Excluir curso"><i class="red-text text-darken-4 small material-icons">delete_sweep</i></span>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum curso encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>

        <div class="fixed-action-btn">
            <a href="{{route('cursos.create')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar Novo Curso">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection

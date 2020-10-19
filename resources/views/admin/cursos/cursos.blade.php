@extends('admin.layout.template.index')

@section('content-main')

    <section class="section">
        <div class="tableFixHead">
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th class="centered">Código</th>
                    <th>Nome</th>
                    <th>C.H.</th>
                    <th>Professor</th>
                    <th>Preço</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->nome }}</td>
                        <td>{{ $curso->carga_horaria }}</td>
                        <td>{{ $curso->professor }}</td>
                        <td>{{ $curso->preco }}</td>
                        <td>{{ $curso->created_at }}</td>
                        <td>{{ $curso->updated_at }}</td>
                        <td class="center-align">

                            <button class="btn">
                                <span title="Editar"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </button>

                            <form action="{{ route('deletar', $curso->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">
                                    <span title="Excluir"><i class="red-text text-darken-4 small material-icons">delete_sweep</i></span>
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
            <a href="{{url('/cadastrar-curso')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar Novo Curso">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection

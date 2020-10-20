@extends('admin.layout.template.index')

@section('content-main')

    <section class="section">
        <div class="tableFixHead">
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th class="centered">Código</th>
                    <th>Nome</th>
                    <th>Formação</th>
                    <th>Email</th>
                    <th>Dt.Cadastro</th>
                    <th>Dt.Atualização</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($professores as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nome_professor }}</td>
                        <td>{{ $professor->formacao }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($professor->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($professor->updated_at)) }}</td>
                        <td class="center-align">

                            <a class="btn" href="{{route('professores.edit', $professor->id)}}">
                                <span title="Editar"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </a>

                            <form action="{{route('professores.destroy', $professor->id)}}" method="post" style="display: inline;">
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
            <a href="{{route('professores.create')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar Novo Curso">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection

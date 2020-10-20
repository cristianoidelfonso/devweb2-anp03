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
                @forelse ($matriculas as $matricula)
                    <tr>
                        <td>{{ $matricula->id }}</td>
                        <td>{{ $matricula->nome_professor }}</td>
                        <td>{{ $matricula->formacao }}</td>
                        <td>{{ $matricula->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($matricula->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($matricula->updated_at)) }}</td>
                        <td class="center-align">

                            <a class="btn" href="{{route('matriculas.edit', $matricula->id)}}">
                                <span title="Editar matricula"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </a>

                            <form action="{{route('matriculas.destroy', $matricula->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">
                                    <span title="Excluir matricula"><i class="red-text text-darken-4 small material-icons">delete_sweep</i></span>
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
            <a href="{{route('professores.create')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar novo professor">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection

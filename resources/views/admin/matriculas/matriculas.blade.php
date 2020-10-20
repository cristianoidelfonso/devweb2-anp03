@extends('admin.layout.template.index')

@section('content-main')

    <p class="center-align"><strong>{{$titulo}}</strong></p>

    <section class="section">
        <div class="tableFixHead">
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Dt.Cadastro</th>
                    <th>Dt.Atualização</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matriculas as $matricula)
                    <tr>
                        <td>{{ $matricula->id }}</td>

                        <td><?php $aluno = App\Models\Aluno::find($matricula->aluno_id);?>{{$aluno->nome_aluno}}</td>
                        <td><?php $curso = App\Models\Curso::find($matricula->curso_id);?>{{$curso->nome_curso}}</td>
                        <td><?php $professor = App\Models\Professor::find($matricula->professor_id);?>{{$professor->nome_professor}}</td>

                        <td>{{ date('d/m/Y', strtotime($matricula->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($matricula->updated_at)) }}</td>
                        <td class="center-align">

                            {{-- <a class="btn" href="{{route('matriculas.edit', $matricula->id)}}">
                                <span title="Editar matricula"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </a> --}}

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
                        <td>Não foram encontrados registros de matrículas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>

        <div class="fixed-action-btn">
            <a href="{{route('matriculas.create')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar novo professor">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection

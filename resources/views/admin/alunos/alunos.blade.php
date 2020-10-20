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
                    <th>Dt. Nasc.</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>E-mail</th>
                    <th>Escolaridade</th>
                    <th>Dt.Cadastro</th>
                    <th>Dt.Atualização</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome_aluno }}</td>
                        <td>{{ date('d/m/Y', strtotime($aluno->data_nascimento)) }}</td>
                        <td>{{ (date('Y') - date('Y', strtotime($aluno->data_nascimento))) }}</td>
                        <td>{{ $aluno->sexo }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->escolaridade }}</td>
                        <td>{{ date('d/m/Y', strtotime($aluno->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($aluno->updated_at)) }}</td>
                        <td class="center-align">

                            <a class="btn" href="{{route('alunos.edit', $aluno->id)}}">
                                <span title="Editar aluno"><i class="blue-text text-darken-4 small material-icons">edit</i></span>
                            </a>

                            <form action="{{route('alunos.destroy', $aluno->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">
                                    <span title="Excluir aluno"><i class="red-text text-darken-4 small material-icons">delete_sweep</i></span>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não foram encontrados registros de alunos(as).</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>

        <div class="fixed-action-btn">
            <a href="{{route('alunos.create')}}" class="btn-floating btn-large waves-effect waves-light" title="Cadastrar novo aluno">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

    {{-- @section('conteudo-secundario')

        <a href="https://forms.gle/V9ASUcNHfBFnzErh9">Link Form</a>

        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSec9ISSPD2L5ClAaNwiQ697IFUhxSkcRu1uX9Z46jrJNg8xTQ/viewform?embedded=true"
        width="640" height="3594" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
    @endsection --}}

@endsection

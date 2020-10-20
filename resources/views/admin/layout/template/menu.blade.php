{{-- Menu Topo --}}
    <nav class="navbar-material">
        <div class="nav-wrapper">
        <a href="/" class="brand-logo"><span>{{'Cursos de férias'}}</span><strong>{{strtoupper('Escola Livre')}}</strong></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{route('alunos.index')}}">{{'Alunos'}}</a></li>
                <li><a href="{{route('cursos.index')}}">{{'Cursos'}}</a></li>
                <li><a href="{{route('professores.index')}}">{{'Professores'}}</a></li>
                <li><a href="{{route('matriculas.index')}}">{{'Matrículas'}}</a></li>
                <li><a href="{{route('contato')}}">{{'Contato'}}</a></li>
                <li><a href="{{route('sobre')}}">{{'Sobre'}}</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{route('alunos.index')}}">{{'Alunos'}}</a></li>
        <li><a href="{{route('cursos.index')}}">{{'Cursos'}}</a></li>
        <li><a href="{{route('professores.index')}}">{{'Professores'}}</a></li>
        <li><a href="{{route('matriculas.index')}}">{{'Matriculas'}}</a></li>
        <li><a href="{{route('contato')}}">{{'Contato'}}</a></li>
        <li><a href="{{route('sobre')}}">{{'Sobre'}}</a></li>
    </ul>

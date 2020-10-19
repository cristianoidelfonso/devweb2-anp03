{{-- Menu Topo --}}
    <nav class="navbar-material">
        <div class="nav-wrapper">
        <a href="/" class="brand-logo"><span>{{'Cursos de férias'}}</span><strong>{{strtoupper('Escola Livre')}}</strong></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                {{-- Utilizando rotas nomeadas --}}
                {{-- <li><a href="{{route('cadastrar')}}">Cadastrar Curso</a></li> --}}
                {{-- <li><a href="">Cadastrar Curso</a></li> --}}
                <li><a href="/cursos">{{'Cursos'}}</a></li>
                <li><a href="">{{'Professores'}}</a></li>
                <li><a href="">{{'Contato'}}</a></li>
                <li><a href="">{{'Sobre'}}</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        {{-- Utilizando rotas nomeadas --}}
        {{-- <li><a href="{{route('cadastrar')}}">Cadastrar Curso</a></li> --}}
        {{-- <li><a href="">Cadastrar Curso</a></li> --}}
        <li><a href="">{{'Cursos'}}</a></li>
        <li><a href="">{{'Professores'}}</a></li>
        <li><a href="">{{'Contato'}}</a></li>
        <li><a href="">{{'Sobre'}}</a></li>
    </ul>

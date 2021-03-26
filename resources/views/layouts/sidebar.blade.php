<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                {{-- MOSTRA NOME USUARIO LOGADO  --}}

                <li class="nav-item">
                    <hr style="margin-top: 0px; margin-bottom: 0px; margin: 0px">
                    <a href="{{route('home')}}" style="margin-top: 0px !important;">
                        <i class="fas fa-user"></i>
                        <p>@if (strlen(Auth::user()->name) > 19)
                            {{ substr(Auth::user()->name, 0, 16).'...'}}
                        @else
                        {{ Auth::user()->name }}
                        @endif
                        </p>
                    </a>
                    <hr style="margin-top: 0px; margin-bottom: 5px;">
                </li>

                <li class="nav-item {{ (request()->Is('welcome')) ? 'active' : '' }}" class="sr-only">
                    <a href="{{route('welcome')}}">
                        <i class="fas fa-home"></i>
                        <p>Menu Incial</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('listAll')) || (request()->is('cadStudent')) || (request()->routeIs('consult')) || (request()->routeIs('editConsStudent')) || (request()->routeIs('searchDelete')) || (request()->routeIs('pdfStudents'))  ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Alunos</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadStudent')) || (request()->routeIs('listAll')) || (request()->routeIs('consult')) || (request()->routeIs('editConsStudent')) || (request()->routeIs('searchDelete')) || (request()->routeIs('pdfStudents')) ? 'show' : '' }}"
                        aria-controls="collapseOne" id="base">
                        <ul class="nav nav-collapse ">
                            <li class="{{ (request()->routeIs('cadStudent')) ? 'active' : '' }}">
                                <a href="{{ route('cadStudent') }}">
                                    <span class="sub-item">Cadastro de Aluno</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('listAll')) ? 'active' : '' }}">
                                <a href="{{ route('listAll') }}">
                                    <span class="sub-item">Listar Alunos</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('consult')) ? 'active' : '' }}">
                                <a href="{{ route('consult') }}">
                                    <span class="sub-item">Consultar Aluno</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('editConsStudent')) ? 'active' : '' }}">
                                <a href="{{ route('editConsStudent') }}">
                                    <span class="sub-item">Editar Aluno</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('searchDelete')) ? 'active' : '' }}">
                                <a href="{{ route('searchDelete') }}">
                                    <span class="sub-item">Excluir Aluno</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('pdfStudents')) ? 'active' : '' }}">
                                <a href="{{ route('pdfStudents') }}">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ (request()->Is('resultConsRegistration')) || (request()->is('consultRegister')) || (request()->is('registerClass')) ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-sun" style="font-size:20px" actived></i>
                        <p>Matricular Aluno</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->Is('resultConsRegistration')) || (request()->is('consultRegister')) || (request()->is('registerClass')) ? 'show' : '' }}" aria-controls="collapseOne" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->routeIs('resultConsRegistration')) ? 'active' : '' }}'">
                                <a href="{{ route('resultConsRegistration') }}">
                                    <span class="sub-item">Matricular Aluno em uma Turma</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('registerClass')) ? 'active' : '' }}">
                                <a href="registerClass">
                                    <span class="sub-item">Listar Alunos Matriculados</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('consultRegister')) ? 'active' : '' }}">
                                <a href="consultRegister">
                                    <span class="sub-item">Cosultar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ (request()->Is('cadastrarTurma')) || (request()->is('listClass')) || (request()->is('consultClass')) || (request()->is('editConsClass')) || (request()->is('searchClassDelete')) || (request()->is('pdfClass')) ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sidebarLayouts2">
                        <i class="fas fa-bed" actived></i>
                        <p>Turmas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->Is('cadastrarTurma')) || (request()->is('listClass')) || (request()->is('consultClass')) || (request()->is('editConsClass')) || (request()->is('searchClassDelete')) || (request()->is('pdfClass')) ? 'show' : '' }}" id="sidebarLayouts2">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->routeIs('cadastrarTurma')) ? 'active' : '' }}">
                                <a href="{{ route('cadastrarTurma') }}">
                                    <span class="sub-item">Cadastrar Turma</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('listClass')) ? 'active' : '' }}">
                                <a href="{{ route('listClass') }}">
                                    <span class="sub-item">Listar Turmas</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('consultClass')) ? 'active' : '' }}">
                                <a href="{{ route('consultClass') }}">
                                    <span class="sub-item">Consultar uma Turma</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('editConsClass')) ? 'active' : '' }}">
                                <a href="{{ route('editConsClass') }}">
                                    <span class="sub-item">Editar uma Turma</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('searchClassDelete')) ? 'active' : '' }}">
                                <a href="{{ route('searchClassDelete') }}">
                                    <span class="sub-item">Excluir uma Turma</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('pdfClass')) ? 'active' : '' }}">
                                <a href="{{ route('pdfClass') }}">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                

                <li class="nav-item">
                    <hr style="margin-top: 0px; margin-bottom: 0px; margin: 0px">
                    <a href="<?php echo e(route('home')); ?>" style="margin-top: 0px !important;">
                        <i class="fas fa-user"></i>
                        <p><?php if(strlen(Auth::user()->name) > 19): ?>
                            <?php echo e(substr(Auth::user()->name, 0, 16).'...'); ?>

                        <?php else: ?>
                        <?php echo e(Auth::user()->name); ?>

                        <?php endif; ?>
                        </p>
                    </a>
                    <hr style="margin-top: 0px; margin-bottom: 5px;">
                </li>

                <li class="nav-item <?php echo e((request()->Is('welcome')) ? 'active' : ''); ?>" class="sr-only">
                    <a href="<?php echo e(route('welcome')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Menu Incial</p>
                    </a>
                </li>
                <li class="nav-item <?php echo e((request()->is('listAll')) || (request()->is('cadStudent')) || (request()->routeIs('consult')) || (request()->routeIs('editConsStudent')) || (request()->routeIs('searchDelete')) || (request()->routeIs('pdfStudents'))  ? 'active' : ''); ?>">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Alunos</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse <?php echo e((request()->routeIs('cadStudent')) || (request()->routeIs('listAll')) || (request()->routeIs('consult')) || (request()->routeIs('editConsStudent')) || (request()->routeIs('searchDelete')) || (request()->routeIs('pdfStudents')) ? 'show' : ''); ?>"
                        aria-controls="collapseOne" id="base">
                        <ul class="nav nav-collapse ">
                            <li class="<?php echo e((request()->routeIs('cadStudent')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('cadStudent')); ?>">
                                    <span class="sub-item">Cadastro de Aluno</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('listAll')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('listAll')); ?>">
                                    <span class="sub-item">Listar Alunos</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('consult')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('consult')); ?>">
                                    <span class="sub-item">Consultar Aluno</span>
                                </a>
                            </li>
                            
                            <li class="<?php echo e((request()->routeIs('pdfStudents')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('pdfStudents')); ?>">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php echo e((request()->Is('resultConsRegistration')) || (request()->is('consultRegister')) || (request()->is('registerClass')) ? 'active' : ''); ?>">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-sun" style="font-size:20px" actived></i>
                        <p>Matricular Aluno</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse <?php echo e((request()->Is('resultConsRegistration')) || (request()->is('consultRegister')) || (request()->is('registerClass')) ? 'show' : ''); ?>" aria-controls="collapseOne" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="<?php echo e((request()->routeIs('resultConsRegistration')) ? 'active' : ''); ?>'">
                                <a href="<?php echo e(route('resultConsRegistration')); ?>">
                                    <span class="sub-item">Matricular Aluno em uma Turma</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('registerClass')) ? 'active' : ''); ?>">
                                <a href="registerClass">
                                    <span class="sub-item">Listar Alunos Matriculados</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('consultRegister')) ? 'active' : ''); ?>">
                                <a href="consultRegister">
                                    <span class="sub-item">Cosultar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php echo e((request()->Is('cadastrarTurma')) || (request()->is('listClass')) || (request()->is('consultClass')) || (request()->is('editConsClass')) || (request()->is('searchClassDelete')) || (request()->is('pdfClass')) ? 'active' : ''); ?>">
                    <a data-toggle="collapse" href="#sidebarLayouts2">
                        <i class="fas fa-bed" actived></i>
                        <p>Turmas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse <?php echo e((request()->Is('cadastrarTurma')) || (request()->is('listClass')) || (request()->is('consultClass')) || (request()->is('editConsClass')) || (request()->is('searchClassDelete')) || (request()->is('pdfClass')) ? 'show' : ''); ?>" id="sidebarLayouts2">
                        <ul class="nav nav-collapse">
                            <li class="<?php echo e((request()->routeIs('cadastrarTurma')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('cadastrarTurma')); ?>">
                                    <span class="sub-item">Cadastrar Turma</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('listClass')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('listClass')); ?>">
                                    <span class="sub-item">Listar Turmas</span>
                                </a>
                            </li>
                            <li class="<?php echo e((request()->routeIs('consultClass')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('consultClass')); ?>">
                                    <span class="sub-item">Consultar uma Turma</span>
                                </a>
                            </li>
                            
                            <li class="<?php echo e((request()->routeIs('pdfClass')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('pdfClass')); ?>">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
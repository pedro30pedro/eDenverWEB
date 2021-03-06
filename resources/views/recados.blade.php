@extends('layout.layout');


    <!-- BARRA LATERAL -->
    <div class="sidebar" style="right: 0;" data-color="green" >
    <div class="logo"><a href="#" class="simple-text logo-normal">
            UPA Vila CArli
        </a></div>
    <div class="sidebar-wrapper ">
        <ul class="nav">
            <li class="nav-item  ">
                <a class="nav-link" href="{{route('inicio')}}">
                    <i class="material-icons">home_work</i>
                    <p>Início</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('paciente')}}">
                    <i class="material-icons">person
                    </i>
                    <p>Paciente</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                    Agente Comunitário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('cadastroExame')}}">Validar Agente</a>
                    <a class="dropdown-item" href="{{route('buscarExame')}}">Buscar Agente </a>
                </div>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="{{asset('recados')}}">
                    <i class="material-icons">attach_file
                    </i>
                    <p>Recados</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{route('encaminhamento')}}">
                    <i class="material-icons">date_range
                    </i>
                    <p>Agendamentos</p>
                </a>
            </li>
        </ul>
    </div>
</div>


    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">

                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Gestão de Encaminhamentos</a>
                </div>

                <!-- BOTAO DE RESPONSIVIDADE PARA OPCIOES DE SIDEBAR-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <!-- TOPO EM CIMA PARA OPCAO DE SAIDA E CONFIGURAÇÃOES DE PERFIL E SISTEMA  -->
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form"></form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">short_text</i>
                                <p class="d-lg-none d-md-block">
                                    Configuração
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End Navbar -->

        <br>
        <br>
    @section('content')



            <button type="submit" class="btn btn-primary pull-right" style="left: 15px">
                <a style= "color:#ffffff " href="{{route('comunicacao')}}">Nova Mensagem</a>
            </button>
            <div class="content">

                <div class="container-fluid">

                    <div class="row">


                        <div class="card-body">
                            <div class="table-responsive" style="overflow: auto; height: 250px;">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Módulo de Recebimento
                                    </th>
                                    <th>
                                        Mensagem
                                    </th>
                                    <th>
                                        Data
                                    </th>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Enfermaria
                                        </td>
                                        <td>
                                            aqui vai o texto que vai ser recebido
                                        </td>
                                        <td>
                                            20/12/2018

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Enfermaria
                                        </td>
                                        <td>
                                            aqui vai o texto que vai se
                                        </td>
                                        <td>
                                            20/12/2018

                                        </td>

                                    </tr>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


@endsection
<footer class="footer">
                <div class="container-fluid">
                </div>
            </footer>

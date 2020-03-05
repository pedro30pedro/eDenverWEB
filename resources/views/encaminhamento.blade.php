@extends('layout.layout');


<div class="sidebar" style="right: 0;" data-color="purple">
    <div class="logo"><a href="#" class="simple-text logo-normal">
            Unidade São José
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
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                    Exames
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('cadastroExame')}}">Novo Exame</a>
                    <a class="dropdown-item" href="{{route('buscarExame')}}">Buscar Exames </a>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">insert_emoticon</i>
                    Consultas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Nova Consulta</a>
                    <a class="dropdown-item" href="#">Buscar Consulta </a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('cadastroVacina')}}">
                    <i class="material-icons">format_color_reset
                    </i>
                    <p>Vacinas</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('encaminhamento')}}">
                    <i class="material-icons">arrow_right_alt
                    </i>
                    <p>Encaminhamentos</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{asset('recados')}}">
                    <i class="material-icons">attach_file
                    </i>
                    <p>Recados</p>
                </a>
            </li>

            <li class="nav-item  ">
                <a class="nav-link" href="./paciente.html">
                    <i class="material-icons">history
                    </i>
                    <p>Histórico dos Pacientes</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="./paciente.html">
                    <i class="material-icons">commute
                    </i>
                    <p>Gerenciamento de Viagens</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="./paciente.html">
                    <i class="material-icons">date_range
                    </i>
                    <p>Agendamento Odontológico</p>
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



        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- CADASTRO DE PACIENTE -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Ficha de Encaminhamento</h4>
                            </div>
                            <div class="card-body">
                                <form>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Nome do Profissional</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Nome do Paciente</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Especialidade de Encaminhamento</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="1" selected>Fisioterapia</option>
                                                    <option value="2">Neurologista</option>
                                                    <option value="3">Ginecologista</option>
                                                    <option value="4">Ortopedista</option>
                                                    <option value="5">Outro</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Objetivo do Encaminhamento</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Observação</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Data</label>
                                                <br>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-right">Gerar
                                        Impressão
                                    </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
            </div>
        </footer>
    </div>
@endsection

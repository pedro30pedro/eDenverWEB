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
            <li class="nav-item active">
                <a class="nav-link" href="{{route('cadastroVacina')}}">
                    <i class="material-icons">format_color_reset
                    </i>
                    <p>Vacinas</p>
                </a>
            </li>
            <li class="nav-item ">
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

<!-- NAV BAR --> 
<div class="main-panel">
        <!-- INICIO NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">

                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Gerenciamento de Exames</a>
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
        <!-- FIM NAVBAR -->

<br>
<br>


@section('content')


        <!-- CADASTRO DE EXAME COMPLETO  -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <!-- PARTE DE CIMA DA TABELA PARA PESQUISA -->
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Buscar Vacina</h4>
                                <form class="navbar-form">
                                    <div class="input-group no-border">
                                        <input type="text" style="color:beige;" value="" class="form-control"
                                               placeholder="Digite o nome do paciente...">
                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- PARTE DE MIOLO DA TABELA -->
                            <div class="card-body">
                                <div class="table-responsive" style="overflow: auto; height: 250px;">
                                    <!-- REAJUSTE PARA SCROLL NA TABELA -->
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Nome
                                        </th>
                                        <th>
                                            Posto de Vacinação
                                        </th>
                                        <th>
                                            Vacina Realizada
                                        </th>
                                        <th>
                                            Num. SUS
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>

                                        </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Santa MAria do Oeste
                                            </td>
                                            <td>
                                                São José
                                            </td>
                                            <td class="text-primary">
                                                432442424324
                                            </td>
                                            <td>
                                                12/06/2019
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary ">
                                                        <i class="material-icons">delete</i>
                                                        <input type="radio" name="options" id="option1"> Apagar
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <i class="material-icons">create</i>
                                                        <input type="radio" name="options" id="option2"> Alterar
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FORM DE CADASTRO DE VACINA  -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Cadastro de Vacina</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Posto de Vacinação</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Nome do paciente</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Vacina Realizada</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Informação de Lote</label>
                                                <input type="text" class="form-control">
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
                                    <button type="submit" class="btn btn-primary pull-right">Cadastrar e Imprimir
                                        Comprovante
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

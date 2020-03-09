@extends('layout.layout');
<script type="text/javascript">
function formatar_mascara(src, mascara) {
 var campo = src.value.length;
 var saida = mascara.substring(0,1);
 var texto = mascara.substring(campo);
 if(texto.substring(0,1) != saida) {
 src.value += texto.substring(0,1);
 }
}
</script>
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
            <li class="nav-item active">
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
                    Agente Comunitário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('cadastroExame')}}">Validar Agente</a>
                    <a class="dropdown-item" href="{{route('buscarExame')}}">Buscar Agente </a>
                </div>
            </li>
            <li class="nav-item  ">
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
                    <a class="navbar-brand" href="javascript:;">Gestão de Pacientes</a>
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

            <!-- DIV DE BUSCA DE PACIENTE -->
            <div class="col-md-12">

              <!-- PARTE DE CIMA DA TABELA PARA PESQUISA -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Pesquisar Paciente</h4>
                  <form class="navbar-form">
                    <div class="input-group no-border">
                      <input type="text" style="color:beige;" value="" class="form-control"
                        placeholder="Digite o CPF do paciente..." onkeypress="formatar_mascara(this,'###.###.###-##')" maxlength="14">
                      <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                      </button>
                    </div>
                  </form>
                </div>

                <!-- PARTE DE MIOLO DA TABELA -->
                <div class="card-body">
                  <div class="table-responsive">
                    <!-- REAJUSTE PARA SCROLL NA TABELA -->
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nome
                        </th>
                        <th>
                        CPF
                        </th>
                        <th>
                          Localidade
                        </th>
                        <th>
                        Bairro
                        </th>
                        <th>

                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Pedro Consulo Mendes
                          </td>
                          <td>
                          430.012.236-01
                          </td>
                          <td>
                            Guarapuava
                          </td>
                          <td class="text-primary">
                          Dos estados
                          </td>
                          <td>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-secondary ">
                                <i class="material-icons">remove_red_eye</i>
                                <input type="radio" name="options" id="option1"> Visualizar
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

            

          


          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
@endsection

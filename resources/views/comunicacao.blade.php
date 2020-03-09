@extends('layout.layout');

<!-- BARRA LATERAL -->
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('js/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('js/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('js/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('js/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('js/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('js/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('js/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/js/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link asset="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- FLOT CHARTS -->
<script href="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script href="{{asset('js/plugins/flot-old/jquery.flot.resize.min.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script href="{{asset('js/plugins/flot-old/jquery.flot.pie.min.js')}}"></script>
<!-- jQuery -->
<script href="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI -->
<script href="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script href="{{asset('js/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script href="{{asset('js/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script href="{{asset('js/dist/js/demo.js')}}"></script>

<!-- Plugin CSS -->
<link href="{{asset('magnific-popup/magnific-popup.css')}}" rel="stylesheet">

<!-- Theme CSS - Includes Bootstrap -->
<link href="{{asset('js/creative.min.css')}}" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700')}}" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


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
            <li class="nav-item active ">
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
            <li class="nav-item ">
                <a class="nav-link" href="{{asset('recados')}}">
                    <i class="material-icons">attach_file
                    </i>
                    <p>Recados</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('encaminhamento')}}">
                    <i class="material-icons">date_range
                    </i>
                    <p>Agendamentos</p>
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
                    <a class="navbar-brand" href="javascript:;">Informação do paciente</a>
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

<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
					
							<div class="hero-info">
								<h2>Informações Gerais</h2>
								<ul>
                                <li><span>Nome Completo</span>Pedro Consulo Mendes</li>
									<li><span>Nascimento</span>25/05/2017</li>
									<li><span>Idade Atual</span>2 anos e 10 meses</li>
									<li><span>CPF</span>430.265.100-01</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								<img src="img/hero.jpg" alt="5">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Testes Realizados</h2>
          <hr class="divider my-4">
        </div>
      </div>
      <div class="row">
      </div>
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">

            <!-- DIV DE BUSCA DE PACIENTE -->
            <div class="col-md-12">

              <!-- PARTE DE CIMA DA TABELA PARA PESQUISA -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Pesquisar ID</h4>
                  <form class="navbar-form">
                    <div class="input-group no-border">
                      <input type="text" style="color:beige;" value="" class="form-control"
                        placeholder="Digite o número do teste...">
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
                          ID Teste
                        </th>
                        <th>
                        Data do Teste
                        </th>
                        <th>
                          Agente Comunitário
                        </th>
                        <th>
                        Qnt de Itens testados
                        </th>
                        <th>
                        Qnt de Acertos
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
                          09/03/2020
                          </td>
                          <td>
                            Vinicius Blecha
                          </td>
                          <td>
                          30
                          </td>
                          <td class="text-primary">
                          18/30
                          </td>
                          <td>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-secondary ">
                                <i class="material-icons">remove_red_eye</i>
                                <input type="radio" name="options" id="option1"> Visualizar
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
  </section>
       
        <footer class="footer">
            <div class="container-fluid">
            </div>
        </footer>
    </div>
@endsection

<html>
<head>
	<title>CRAS - @yield('title')</title>
 
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
	
</head>
<body>
	<div class="wrapper">

		<!-- Menu Lateral! -->
		<nav id="sidebar">
			<div class="sidebar-header">
                <img src="img/brasao.png" class="align: center;">
                <h4>CRAS Jetuba</h4>
			</div>
			<ul class="list-unstyled components">
            
			
			<li>
				<a href="{{url('/')}}">Página Inicial</a>
			</li>
			<li>	
				<a href="#recepcaoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recepção</a>
                <ul class="collapse list-unstyled" id="recepcaoSubmenu">
                    <li>
                        <a href="{{url('/recepcao/agendamentos')}}">Agendamentos</a>
                    </li>
                    <li>
                        <a href="#">Atendimento</a>
                    </li>
                    <li>
                        <a href="#">Cesta Básica</a>
					</li>
                </ul>
			</li>
			
            <li>
                <a href="{{url('/referenciados')}}">Referenciados</a>
            </li>
            <li>
                <a href="#rhSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recursos Humanos</a>
                <ul class="collapse list-unstyled" id="rhSubmenu">
                    <li>
                        <a href="/recursosHumanos">Funcionários</a>
                    </li>
                    <li>
                        <a href="#">Banco de Horas</a>
                    </li>
                    <li>
                        <a href="#">Faltas Abonadas</a>
					</li>
					<li>
                        <a href="#">Previsão de Férias</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('/scfv')}}">Serviço de Convivência</a>
            </li>
            <li>
                <a href="{{url('/estoque')}}">Estoque</a>
			</li>
			<li>
                <a href="{{url('/assistentesSociais')}}">Atendimentos Individuais</a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <h6>Desenvolvido por:<br>
            Giovanna Di Giaimo<br>
            IFSP Caraguatatuba</h6>
		</div>
        </nav>

		<!-- Conteúdo da Página! -->
		<div class="container">
			@yield('content')
		</div>

	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- JS asset -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
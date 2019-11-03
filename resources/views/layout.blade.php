<html>
<head>
	<title>CRAS - @yield('title')</title>
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<div class="wrapper">

		<!-- Menu Lateral! -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>Projeto TCC</h3>
			</div>
			<ul class="list-unstyled components">
            <p>Navegação</p>
			
			<li class="active">
				<a href="#">Página Inicial</a>
			</li>
			<li>	
				<a href="#recepcaoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recepção ::after</a>
                <ul class="collapse list-unstyled" id="recepcaoSubmenu">
                    <li>
                        <a href="#">Agendamentos</a>
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
                <a href="#">Referenciados</a>
            </li>
            <li>
                <a href="#rhSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recursos Humanos</a>
                <ul class="collapse list-unstyled" id="rhSubmenu">
                    <li>
                        <a href="#">Funcionários</a>
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
                <a href="#">SCFV</a>
            </li>
            <li>
                <a href="#">Estoque</a>
			</li>
			<li>
                <a href="#">Atendimentos Individuais</a>
            </li>
        </ul>
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
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
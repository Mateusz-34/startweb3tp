<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	</head>
	
	<body>
		<main>
			<header>
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Startweb</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" href="?page=index">Pulpit</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?page=users">Użytkownicy</a>
							</li>
						</ul>
						<ul class="navbar-nav d-flex">
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Wyloguj</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			</header>
			<section class="content">
				<?php
					$page = isset($_GET['page']) ? $_GET['page'] : 'index';
					$action = isset($_GET['action']) ? $_GET['action']: 'index';
					if (is_file($actionFile = 'actions' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . 'Action.php'))
					{
						include ($actionFile);
						include ('templates/messages.html.php');
						if (is_file($viewFile = 'templates/views' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php'))
						{
							include ($viewFile);
						}						
					}
					else
					{
						throw new Exception ('Cannot include file: ' . $actionFile);
					}			
					//exit;
				?>
			</section>
		</main>
    </body>
</html>
<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>
</head>
<body>

	<header>
		<nav class="navbar navbar-default menu">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/logo_dblue.png" alt=""></a>
				</div> 

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active-link"><a href="index.php">Главная<span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Биография <span class="caret"></span></a>
							<ul class="dropdown-menu">	
								<li><a href="autor_v.php">Биография Валерия</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="autor_g.php">Биография Галины</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Шульга Валерий<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="painting-1.php">Живопись</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="page-develop.php">Иконостас</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">:: Декоративно-прикладное искусство ::</li>
								<li><a href="page-develop.php">Медали</a></li>
								<li><a href="page-develop.php">Плакетки</a></li>
								<li><a href="page-develop.php">Декоративные пласты</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Шульга Галина <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="watercolor-1.php">Акварель</a></li>
							</ul>
						</li>
						<li><a href="contacts.php">Контакты</a></li>											
						<li class="visible-ld"><a href="page-develop.php">Карта сайта</a></li>	
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>	
	
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="develop">
						<img src="img/develop.png" alt="">
					</div>
				</div>
			<div class="col-md-1"></div>
			</div>
		</div>
	</main>

	<br>

<?php include "footer.php" ?>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>	
<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>
</head>
<body>

	<header>
		<?php $active_item = 1?>
		<?php include "main-menu.php" ?>
	</header>	
	
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="carousel-example-generic" class="carousel slide cust-frame" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/sl1.jpg" alt="...">
								<div class="carousel-caption">Галина и Валерий</div>
							</div>
							<div class="item">
								<img src="img/sl2.jpg" alt="...">
								<div class="carousel-caption">Шульга Галина</div>
							</div>
							<div class="item">
								<img src="img/sl3.jpg" alt="...">
								<div class="carousel-caption">Шульга Валерий</div>
							</div>							
							<div class="item">
								<img src="img/sl4.jpg" alt="...">
								<div class="carousel-caption">Шульга Валерий</div>
							</div>
							<div class="item">
								<img src="img/sl5.jpg" alt="...">
								<div class="carousel-caption">Шульга Галина</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
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
<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>

	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
</head>
<body>
	<header>
		<?php $active_item = 3?>
		<?php include "main-menu.php" ?>
	</header>	
<?php $breadcrumb_index = 4 ?>
<?php $breadcrumb_iconostas_city = "г.Холм" ?>
<?php include "breadcrumb-iconostas.php" ?>

	<main>
		<div class="container">
			<?php $pagination_iconostas_index = 4 ?>
			<?php $pagination_iconostas_marker = "bottom"?>
			<?php include "pagination-iconostas.php" ?>
			<div class="row">
				<div class="gallery-wrap clearfix">
					<div class="col-sm-4 col-xs-6 col-mx-wd480 row-space">
						<div class="picture-frame">
							<a href="gallery/iconostas/big/1-kholm_ik.jpg" data-fancybox="images" data-caption="Фрагменты резного Иконостаса в Церкви Тихвинской иконы Божией Матери г.Холм."><img class="img-xs" src="gallery/iconostas/thumbnail/1-kholm_ik-200.jpg" height="200" alt="">
							<div><span class="for-short-format">Посмотреть.</span></div>
							</a>
							<h4>Фрагменты резного Иконостаса, г. Холм</h4>
						</div>						
					</div>
					<div class="col-sm-4 col-xs-6 col-mx-wd480 row-space">
						<div class="picture-frame">
							<a href="gallery/iconostas/big/2-kholm_ik.jpg" data-fancybox="images" data-caption="Фрагменты резного Иконостаса в Церкви Тихвинской иконы Божией Матери г.Холм."><img class="img-xs" src="gallery/iconostas/thumbnail/2-kholm_ik-200.jpg" height="200" alt="">
							<div><span class="for-short-format">Посмотреть.</span></div>
							</a>
							<h4>Фрагменты резного Иконостаса, г. Холм</h4>
						</div>						
					</div>
					<div class="col-sm-4 col-xs-6 col-mx-wd480 row-space">
						<div class="picture-frame">
							<a href="gallery/iconostas/big/3-kholm_ik.jpg" data-fancybox="images" data-caption="Фрагменты резного Иконостаса в Церкви Тихвинской иконы Божией Матери г.Холм."><img class="img-xs" src="gallery/iconostas/thumbnail/3-kholm_ik-200.jpg" height="200" alt="">
							<div><span class="for-short-format">Посмотреть.</span></div>
							</a>
							<h4>Фрагменты резного Иконостаса, г. Холм</h4>
						</div>						
					</div>	
				</div>
			</div>
			<?php $pagination_iconostas_index = 4 ?>
			<?php $pagination_iconostas_marker = "bottom"?>
			<?php include "pagination-iconostas.php" ?>
			</div>
		</main>
<?php include "footer.php" ?>
<?php include "bottom-gall.php" ?>		




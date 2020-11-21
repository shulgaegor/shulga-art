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

<?php $breadcrumb_index = 1 ?>
<?php include "breadcrumb-dec-plasts.php" ?>


	<main>
		<div class="container">
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_plasts_index = 1 ?>
			<?php $pagination_plasts_marker = "bottom"?>
			<?php include "pagination-medals.php" ?>
		-->
			<div class="row">
				<div class="col-md-3 col-sm-2 col-xs-1">&nbsp</div>				
				<div class="gallery-wrap clearfix">
					<div class="col-md-3 col-sm-4 col-xs-5 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/decplast/big/1-yabloki.jpg" data-fancybox="images" data-caption='Декоративный пласт "Яблоки"'><img class="img-xs" src="gallery/decplast/thumbnail/1-yabloki-200.jpg" height="200" alt="Первоцилинники">
							<div><span class="dec-plast_label-class">Посмотреть.</span></div>
							</a>
							<h4>Декоративный пласт "Яблоки".</h4>
						</div>						
					</div>
					<div class="col-md-3 col-sm-4 col-xs-5 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/decplast/big/2-muzika.jpg" data-fancybox="images" data-caption='Декоративный пласт. "Музыка"'><img class="img-xs" src="gallery/decplast/thumbnail/2-muzika-200.jpg" height="200" alt="Первый коренной житель целины">
							<div><span class="dec-plast_label-class">Посмотреть.</span></div>
							</a>
							<h4>Декоративный пласт. "Музыка"</h4>
						</div>						
					</div>
						<div class="col-md-3 col-sm-2 col-xs-1">&nbsp</div>					
				</div>
			</div>
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_plasts_index = 1 ?>
			<?php $pagination_plasts_marker = "bottom"?>
			<?php include "pagination-dec-plasts.php" ?>
		-->
			</div>
		</main>
<?php include "footer.php" ?>
<?php include "bottom-gall.php" ?>		




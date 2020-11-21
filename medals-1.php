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
<?php include "breadcrumb-medals.php" ?>


	<main>
		<div class="container">
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_medals_index = 1 ?>
			<?php $pagination_medals_marker = "bottom"?>
			<?php include "pagination-medals.php" ?>
		-->
			<div class="row">
				<div class="gallery-wrap clearfix">
					<div class="col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/medals/big/1-shahtery_shtrek.jpg" data-fancybox="images" data-caption="Медаль из серии 'Шахтеры, Штрек' Д-9 см. бронза, литье, 1980 г."><img class="img-xs" src="gallery/medals/thumbnail/1-shahtery_shtrek-200.jpg" height="200" alt="Медаль из серии 'Шахтеры, Штрек' ">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Медаль из серии "Шахтеры, Штрек".</h4>
						</div>						
					</div>
					<div class="col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/medals/big/2-dina.jpg" data-fancybox="images" data-caption="Медаль 'Дина Нурпеисова' Д-10 см., бронза, литье, 1980."><img class="img-xs" src="gallery/medals/thumbnail/2-dina-200.jpg" height="200" alt="Медаль из серии 'Дина Нурпеисова' ">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Медаль "Дина Нурпеисова".</h4>
						</div>						
					</div>
					<div class="col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/medals/big/3-shahteram_karagandy.jpg" data-fancybox="images" data-caption="Медаль из серии 'Шахтерам Караганды' Д-14 см., бронза, литье, 1979 г."><img class="img-xs" src="gallery/medals/thumbnail/3-shahteram_karagandy-200.jpg" height="200" alt="Медаль из серии 'Шахтерам Караганды' ">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Медаль из серии "Шахтерам Караганды".</h4>
						</div>						
					</div>										
				</div>
			</div>
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_medals_index = 1 ?>
			<?php $pagination_medals_marker = "bottom"?>
			<?php include "pagination-medals.php" ?>
		-->
			</div>
		</main>
<?php include "footer.php" ?>
<?php include "bottom-gall.php" ?>		




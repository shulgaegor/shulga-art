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
<?php include "breadcrumb-plaketki.php" ?>


	<main>
		<div class="container">
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_plaketki_index = 1 ?>
			<?php $pagination_plaketki_marker = "bottom"?>
			<?php include "pagination-plaketki.php" ?>
		-->
			<div class="row">
				<div class="gallery-wrap clearfix">
					<div class="col-md-3 col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/plaketki/big/1-pervocilinniki.jpg" data-fancybox="images" data-caption="Первоцилинники, p-p 16.5 X 11.5 Бронза, литье, 1979 г."><img class="img-xs" src="gallery/plaketki/thumbnail/1-pervocilinniki-200.jpg" height="200" alt="Первоцилинники">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Первоцилинники.</h4>
						</div>						
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/plaketki/big/2-pervay_borozda.jpg" data-fancybox="images" data-caption="Первая борозда, p-p 16.5 X 11.5 Бронза, литье, 1979 г."><img class="img-xs" src="gallery/plaketki/thumbnail/2-pervay_borozda-200.jpg" height="200" alt="Первая борозда">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Первая борозда.</h4>
						</div>						
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/plaketki/big/3-pervy_urojay.jpg" data-fancybox="images" data-caption="Первый урожай,p-p 16.5 X 11.5 Бронза, литье, 1979 г."><img class="img-xs" src="gallery/plaketki/thumbnail/3-pervy_urojay-200.jpg" height="200" alt="Первый урожай">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Первый урожай.</h4>
						</div>						
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 col-mx-wd480">
						<div class="picture-frame">
							<a href="gallery/plaketki/big/4-korrennoj_jitel.jpg" data-fancybox="images" data-caption="Первый коренной житель целины, p-p 16.5 X 11.5 Бронза, литье, 1979 г."><img class="img-xs" src="gallery/plaketki/thumbnail/4-korrennoj_jitel-200.jpg" height="200" alt="Первый коренной житель целины">
							<div><span>Посмотреть.</span></div>
							</a>
							<h4>Первый коренной житель целины.</h4>
						</div>						
					</div>																
				</div>
			</div>
		<!--	 !!!Закомментированная часть кода!!! Задел на будущее -
			<?php $pagination_plaketki_index = 1 ?>
			<?php $pagination_plaketki_marker = "bottom"?>
			<?php include "pagination-plaketki.php" ?>
		-->
			</div>
		</main>
<?php include "footer.php" ?>
<?php include "bottom-gall.php" ?>	
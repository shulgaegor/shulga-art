<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>

	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
</head>
<body>

<header>
<?php $active_item = 4?>
	<?php include "main-menu.php" ?>
</header>
<?php $breadcrumb_index = 7 ?>
<?php include "breadcrumb-watercolor.php" ?>


	<main>
		<div class="container">
			<?php $pagination_watercolor_index = 7 ?>
			<?php $pagination_watercolor_marker = "bottom"?>
			<?php include "pagination-watercolor.php" ?>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="develop">
						<img src="img/develop.png" alt="">
					</div>
				</div>
			<div class="col-md-1"></div>
			</div>
			<?php $pagination_watercolor_index = 7 ?>
			<?php $pagination_watercolor_marker = "bottom"?>
			<?php include "pagination-watercolor.php" ?>
			</div>
		</main>
<?php include "footer.php" ?>
<?php include "bottom-gall.php" ?>	
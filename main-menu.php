<?php 
switch ($active_item) {
	case 1: $item_menu_1='<li class="active-link visible-ld">';$item_menu_2='<li class="dropdown">';$item_menu_3='<li class="dropdown">';$item_menu_4='<li class="dropdown">';$item_menu_5='<li>';$item_menu_6='<li>';break;
	case 2: $item_menu_1='<li class="visible-ld">';$item_menu_2='<li class="dropdown active-link">';$item_menu_3='<li class="dropdown">';$item_menu_4='<li class="dropdown">';$item_menu_5='<li>';$item_menu_6='<li>';break;
	case 3: $item_menu_1='<li class="visible-ld">';$item_menu_2='<li class="dropdown">';$item_menu_3='<li class="dropdown active-link">';$item_menu_4='<li class="dropdown">';$item_menu_5='<li>';$item_menu_6='<li>';break;
	case 4:$item_menu_1='<li class="visible-ld">';$item_menu_2='<li class="dropdown">';$item_menu_3='<li class="dropdown">';$item_menu_4='<li class="dropdown  active-link">';$item_menu_5='<li>';$item_menu_6='<li>';break;
	case 5: $item_menu_1='<li class="visible-ld">';$item_menu_2='<li class="dropdown">';$item_menu_3='<li class="dropdown">';$item_menu_4='<li class="dropdown">';$item_menu_5='<li class="active-link">';$item_menu_6='<li>';break;
	default: $item_menu_1='<li class="visible-ld">';$item_menu_2='<li class="dropdown">';$item_menu_3='<li class="dropdown">';$item_menu_4='<li class="dropdown">';$item_menu_5='<li>';$item_menu_6='<li class="active-link">';
}
?>

<script>
/*наводим красоту*/

	function turnElement(id){
		var tmpClass = document.getElementById(id).className;
		if (tmpClass.indexOf('opened', 0) != -1){
			document.getElementById(id).className = "navbar-toggle collapsed";			
		} else {document.getElementById(id).className += " opened";}
}
</script>

<nav class="navbar navbar-default menu">
			<div class="container shift-menu">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button"  id="header_menu_button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="turnElement(id)">
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
						<?php echo $item_menu_1;?><a href="index.php">Главная<span class="sr-only">(current)</span></a></li>
						<?php echo $item_menu_2;?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Биография <span class="caret"></span></a>
							<ul class="dropdown-menu">	
								<li><a href="autor_v.php">Биография Валерия</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="autor_g.php">Биография Галины</a></li>
							</ul>
						</li>
						<?php echo $item_menu_3;?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Шульга Валерий<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="painting-1.php">Живопись</a></li>
								<li role="separator" class="divider"></li>
								<li><a href='graphics-1.php'>Графика</a></li>			
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">:: Иконостасы ::</li>
								<li><a href="iconostas_kholm-1.php">г.Холм</a></li>
								<li><a href="iconostas_kasimov-1.php">г.Касимов</a></li>
								<li><a href="iconostas_viasma-1.php">г.Вязьма</a>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">:: Декоративно-прикладное искусство ::</li>
								<li><a href="medals-1.php">Медали</a></li>
								<li><a href="plaketki-1.php">Плакетки</a></li>
								<li><a href="dec-plasts-1.php">Декоративные пласты</a></li>
							</ul>
						</li>
						<?php echo $item_menu_4;?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Шульга Галина <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="watercolor-1.php">Акварель</a></li>
							</ul>
						</li>
						<?php echo $item_menu_5;?><a href="contacts.php">Контакты</a></li>											
						<?php echo $item_menu_6;?><a href="map-site.php">Карта сайта</a></li>	
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
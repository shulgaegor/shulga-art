	<nav>
		<div class="container">
			<ol class="breadcrumb">
				<li><a  class="not-link" href="#">Шульга Валерий</a></li>			
				<li><a  class="not-link" href="#">Иконостасы</a></li>
				<li><a  class="not-link" href="#">
				<?php 
 					echo $breadcrumb_iconostas_city; 					
 				?>
				</a></li>
				<li class="active">Страница 
				<?php 
 					switch ($breadcrumb_index) {
 						case 1: echo "1";break;
 						case 2: echo "2";break;
 						case 3: echo "3";break;
 						default: echo "4"; 
 					}
 				?>
				</li>
			</ol>
		</div>
	</nav>
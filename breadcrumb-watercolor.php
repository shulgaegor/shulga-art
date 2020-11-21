	<nav>
		<div class="container">
			<ol class="breadcrumb">
				<li><a  class="not-link" href="#">Шульга Галина</a></li>
				<li><a  class="not-link" href="#">Акварель</a></li>
				<li class="active">Страница 
				<?php 
 					switch ($breadcrumb_index) {
 						case 1: echo "1";break;
 						case 2: echo "2";break;
 						case 3: echo "3";break;
 						case 4: echo "4";break;
 						case 5: echo "5";break;
 						case 6: echo "6";break;
 						default: echo "7"; 
 					}
 				?>
				</li>
			</ol>
		</div>
	</nav>
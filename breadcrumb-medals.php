	<nav>
		<div class="container">
			<ol class="breadcrumb">
				<li><a  class="not-link" href="#">Шульга Валерий</a></li>
				<li><a  class="not-link" href="#">Медали</a></li>
				<li class="active">Страница 
				<?php 
 					switch ($breadcrumb_index) {
 						case 1: echo "1";break;
 						default: echo "2"; 
 					}
 				?>
				</li>
			</ol>
		</div>
	</nav>
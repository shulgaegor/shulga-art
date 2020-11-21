				<?php 
					if ($pagination_paint_marker == "top") {
							echo "<nav class='nav-pager disible-xs-sm'  aria-label='Page navigation'>";
						} 
					if($pagination_paint_marker == "bottom") {
							echo "<nav class='nav-pager'  aria-label='Page navigation'>";
						}
				?>
					<ul class="pagination">
						<li>
				<?php 
				switch ($pagination_paint_index) {
					case 1:echo"<li class='disabled'><a href='#' aria-label='Previous'>";break;
					case 2:echo"<a href='painting-1.php' aria-label='Previous'>";break;
					case 3:echo"<a href='painting-2.php' aria-label='Previous'>";break;
					case 4:echo"<a href='painting-3.php' aria-label='Previous'>";break;
					case 5:echo"<a href='painting-4.php' aria-label='Previous'>";break;
					default:echo"<a href='painting-5.php' aria-label='Previous'>";
				}
				?>							
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>

						<?php 
						switch ($pagination_paint_index) {
							case 1: echo "<li class='active'><a href='painting-1.php'>1</a></li>" ."<li><a href='painting-2.php'>2</a></li>"."<li><a href='painting-3.php'>3</a></li>"."<li><a href='painting-4.php'>4</a></li>"."<li><a href='painting-5.php'>5</a></li>"."<li><a href='painting-6.php'>6</a></li>";break;
							case 2: echo "<li><a href='painting-1.php'>1</a></li>" ."<li class='active'><a href='painting-2.php'>2</a></li>"."<li><a href='painting-3.php'>3</a></li>"."<li><a href='painting-4.php'>4</a></li>"."<li><a href='painting-5.php'>5</a></li>"."<li><a href='painting-6.php'>6</a></li>";break;		
							case 3: echo "<li><a href='painting-1.php'>1</a></li>" ."<li><a href='painting-2.php'>2</a></li>"."<li class='active'><a href='painting-3.php'>3</a></li>"."<li><a href='painting-4.php'>4</a></li>"."<li><a href='painting-5.php'>5</a></li>"."<li><a href='painting-6.php'>6</a></li>";break;
							case 4: echo "<li><a href='painting-1.php'>1</a></li>" ."<li><a href='painting-2.php'>2</a></li>"."<li><a href='painting-3.php'>3</a></li>"."<li class='active'><a href='painting-4.php'>4</a></li>"."<li><a href='painting-5.php'>5</a></li>"."<li><a href='painting-6.php'>6</a></li>";break;
							case 5: echo "<li><a href='painting-1.php'>1</a></li>" ."<li><a href='painting-2.php'>2</a></li>"."<li><a href='painting-3.php'>3</a></li>"."<li><a href='painting-4.php'>4</a></li>"."<li class='active'><a href='painting-5.php'>5</a></li>"."<li><a href='painting-6.php'>6</a></li>";break;
							default: echo "<li><a href='painting-1.php'>1</a></li>" ."<li><a href='painting-2.php'>2</a></li>"."<li><a href='painting-3.php'>3</a></li>"."<li><a href='painting-4.php'>4</a></li>"."<li><a href='painting-5.php'>5</a></li>"."<li class='active'><a href='painting-6.php'>6</a></li>";
						}						
						?>
						<li>
				<?php 
				switch ($pagination_paint_index) {
					case 1:echo"<a href='painting-2.php' aria-label='Next'>";break;
					case 2:echo"<a href='painting-3.php' aria-label='Next'>";break;
					case 3:echo"<a href='painting-4.php' aria-label='Next'>";break;
					case 4:echo"<a href='painting-5.php' aria-label='Next'>";break;
					case 5:echo"<a href='painting-6.php' aria-label='Next'>";break;
					default:echo"<li class='disabled'><a href='#' aria-label='Next'>";
				}
				?>						
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>	
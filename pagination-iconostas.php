  <?php 
  if ($pagination_iconostas_marker == "top") {
    echo "<nav class='nav-pager disible-xs-sm'  aria-label='Page navigation'>";
  } 
  if($pagination_iconostas_marker == "bottom") {
    echo "<nav class='nav-pager'  aria-label='Page navigation'>";
  }
  ?>

  <ul class="pagination">

    <?php 
    switch ($pagination_iconostas_index) {
      //pagination for kholm
      case 1:echo"<li class='disabled'><a href='#' aria-label='Previous'>";break;
      case 2:echo"<li><a href='iconostas_kholm-1.php' aria-label='Previous'>";break;
      case 3:echo"<li><a href='iconostas_kholm-2.php' aria-label='Previous'>";break;      
      case 4:echo"<li><a href='iconostas_kholm-3.php' aria-label='Previous'>";break;      
      //pagination for kasimov
      case 21:echo"<li class='disabled'><a href='#' aria-label='Previous'>";break;      
      //pagination for viasma
      case 31:echo"<li class='disabled'><a href='#' aria-label='Previous'>";break; 
      case 32:echo"<li><a href='iconostas_viasma-1.php' aria-label='Previous'>";break;       
    }
    ?>

    <span aria-hidden="true">&laquo;</span>
  </a>
</li>


<?php 
switch ($pagination_iconostas_index) {
  //pagination for kholm
  case 1: echo "<li class='active'><a href='iconostas_kholm-1.php'>1</a></li>"."<li><a href='iconostas_kholm-2.php'>2</a></li>"."<li><a href='iconostas_kholm-3.php'>3</a></li>"."<li><a href='iconostas_kholm-4.php'>4</a></li>";break;
  case 2: echo "<li><a href='iconostas_kholm-1.php'>1</a></li>" ."<li class='active'><a href='iconostas_kholm-2.php'>2</a></li>"."<li><a href='iconostas_kholm-3.php'>3</a></li>"."<li><a href='iconostas_kholm-4.php'>4</a></li>";break; 
  case 3: echo "<li><a href='iconostas_kholm-1.php'>1</a></li>" ."<li><a href='iconostas_kholm-2.php'>2</a></li>"."<li class='active'><a href='iconostas_kholm-3.php'>3</a></li>"."<li><a href='iconostas_kholm-4.php'>4</a></li>";break;    
  case 4: echo "<li><a href='iconostas_kholm-1.php'>1</a></li>" ."<li><a href='iconostas_kholm-2.php'>2</a></li>"."<li><a href='iconostas_kholm-3.php'>3</a></li>"."<li class='active'><a href='iconostas_kholm-4.php'>4</a></li>";break;  
  //pagination for kasimov
  case 21: echo "<li class='active'><a href='iconostas_kasimov-1.php'>1</a></li>";break;  
    //pagination for kasimov
  case 31: echo "<li class='active'><a href='iconostas_viasma-1.php'>1</a></li>"."<li><a href='iconostas_viasma-2.php'>2</a></li>";break;  
  case 32: echo "<li><a href='iconostas_viasma-1.php'>1</a></li>"."<li class='active'><a href='iconostas_viasma-2.php'>2</a></li>";break;    
}           
?>

<?php 
switch ($pagination_iconostas_index) {
  case 1:echo"<li><a href='iconostas_kholm-2.php' aria-label='Next'>";break;
  case 2:echo"<li><a href='iconostas_kholm-3.php' aria-label='Next'>";break;
  case 3:echo"<li><a href='iconostas_kholm-4.php' aria-label='Next'>";break;
  case 4:echo"<li class='disabled'><a href='#' aria-label='Next'>";break;
  case 21:echo"<li class='disabled'><a href='#' aria-label='Next'>";break;
  case 31:echo"<li><a href='iconostas_viasma-2.php' aria-label='Next'>";break;
  case 32:echo"<li class='disabled'><a href='#' aria-label='Next'>";break;  
}
?>

<span aria-hidden="true">&raquo;</span>
</a>
</li>
</ul>
</nav>
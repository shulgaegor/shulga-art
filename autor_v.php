<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>


</head>
<body>
	<header>
		<?php $active_item = 2?>
		<?php include "main-menu.php" ?>
	</header>	
	<nav>
		<div class="container">
			<ol class="breadcrumb">
				<li><a  class="not-link" href="#">Биография</a></li>
				<li class="active">Биография Валерия</li>
			</ol>
		</div>
	</nav>
	<main class="biography">
		<div class="container">
			<div class="row">
				<div class="col-md-2 im_left im_bottom"><img src="img/autor_v.jpg" alt=""></div>
				<div class="col-md-10">
					<p><b>Шульга Валерий Павлович</b> родился в 1949 г. в г. Караганде (Казахстан). В 1970 г. окончил Алма-Атинское художественное училище им. Н.В. Гоголя, в 1979 г. Московское высшее художественно-промышленное училище (б. Строгановское). Член Союза художников СССР с 1981 г. Участник областных, зональных, республиканских, всесоюзных и зарубежных художественных выставок.         В настоящее время живет в г. Холме Новгородской области. Творчество Валерия Шульги охватывает два периода жизни художника: казахстанский и российский. Большую часть жизни художник прожил в Казахстане в г. Караганде. Именно там им было много сделано в <a href="#">живописи</a>, в монументальном, <a href="#">декоративно-прикладном</a> и графическом искусствах.</p>
				</div>
				<div class="col-md-12 col-xs-12 ">
					<p>Рельефы из керамики, гипса, дерева, металла украшают и по сей день многие учреждения и предприятия в Казахстане, в том числе, мозаика и витражи - для карагандинской мечети, рельеф из меди - для Дома научно-технической информации в г. Темиртау, керамический рельеф в детском саду "Дубравушка", кованый рельеф и каминный набор для гостиничного комплекса "Чайка" в Караганде и др.</p>					
				</div>
				<div class="col-md-12 col-xs-12 ">
					<p>Параллельно творчеству художник вел педагогическую деятельность, работал старшим преподавателем в Карагандинском пединституте на кафедре живописи. Ранние живописные произведения Валерия Шульги - портреты, натюрморты, пейзажи. В привычном ландшафте он умеет видеть буйство красок южной природы, сдержанную красоту алма-атинских гор. Творческие поездки по местам Карлага, по Казахстану, Крыму, Кавказу, Германии, Финляндии и Болгарии отражены в творчестве художника.</p>	
					<p>С 1996 г. В.П. Шульга живет в Холме, работал художником-оформителем районного Дома культуры. В эти годы он занимается в основном живописью и резьбой по дереву. В живописи преобладает местная тематика - пейзажи Новгородчины, виды Холма и его окрестностей, берегов Ловати и Куньи. Художником исполнены <a href="#">иконостасы</a> в технике резьбы но дереву для церкви Тихвинской Божьей матери в г. Холме, для Вознесенской церкви в г. Касимове Рязанской области, а также для храма "Рождества Пресвятой Богородицы"   в   г.Вязьма   Смоленской области. Работы художника уже побывали на выставках в Великом Новгороде, Санкт-Петербурге, Торопце, Старой Руссе. Многие его работы находятся в музеях и частных коллекциях Казахстана, России, Германии, США, Финляндии, Норвегии и Канады.</p>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<hr>
			<p class="pull-left">
				<script type="text/javascript">
					var date = new Date();
					var text = "© Shulga-ART " + date.getFullYear()+".";
					document.write(text);
				</script>
			</p>
			<ul class="nav navbar-nav navbar-right icons">
				<li><a href="https://vk.com/id114209316"><img src="icon/vk.png" ></a>
				</li>
				<li>
					<a href="#"><img src="icon/facebook.png" ></a>
				</li>				
				<li>
					<a href="shulga.holm@mail.ru"><img src="icon/moi-mir.png"></a>
				</li>				
			</ul>
			<i class="glyphicon glyphicon-globe globe" ></i>			
		</div>
	</footer>

	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("a.topLink").click(function() {
				$("html, body").animate({
					scrollTop: $($(this).attr("href")).offset().top + "px"
				}, {
					duration: 500
				});
				return false;
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {
			$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
					$('#toTop').fadeIn();
				} else {
					$('#toTop').fadeOut();
				}
			});
			$('#toTop').click(function() {
				$('body,html').animate({scrollTop:0},400);
			});
		});
	</script>
	<div id="toTop" > ^ Наверх</div>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>		
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
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
			$('[data-fancybox="images"]').fancybox({
				animationEffect : "zoom-in-out",
				transitionEffect :  "zoom-in-out",
				loop : true,
				protect : true
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
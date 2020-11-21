<?php include "top-title.php" ?>
	<?php include "meta-constant.php" ?>
	<?php include "link-constant.php" ?>
	<?php include "hack-ie.php" ?>
</head>
<body>

	<header>
		<?php $active_item = 5?>
		<?php include "main-menu.php" ?>
	</header>	
	
	<main >
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="contact">
						<h3 class="h-3 white">Напишите нам</h3>
						<span class="headline">Уважаемые посетители здесь вы можете заказать понравившуюся вам работу.<br>
							Детали заказа и оплаты можем обсудить по почте или телефону.</span>	
							<form class="rf" action="send.php" method="POST" onsubmit="yaCounter48929696.reachGoal('SEND_EMAIL'); return true;">
								<div class="box_post">
									<div class="box2">
										<ul>
											<li><input type="text" name="lpname" placeholder="ВАШЕ ИМЯ *" class="req" /></li>
											<li><input type="email" name="lpemail" placeholder="ВАШ E-MAIL *" class="req" /></li>
											<li><input type="tel" name="lptel" placeholder="ВАШ ТЕЛЕФОН" /></li>
										</ul>
									</div>	
									<div class="box2">
										<textarea name="lptext" placeholder="ВАШЕ СООБЩЕНИЕ *" class="req" ></textarea>
									</div>
								</div>
								<div class="g-recaptcha mycapcha" data-sitekey="6LcZ_EEUAAAAAAL5tXQ4ziP_fnW4fhmgEcu2eZl1"></div>
								<input type="submit" name="Отправить" class="btn_submit button disabled" value="Отправить" />
							</form>
							<span class="headline">Также с художником можно связаться через почту и социальные сети.</span>
							<div class="social">
								<a class="mail" href="mailto:shulga.holm@mail.ru"></a>
								<a class="vk" href="https://vk.com/id114209316"></a>
								<a class="ok" href="https://ok.ru/profile/457986875112"></a>						
								<a class="fb" href="https://www.facebook.com/profile.php?id=100008762471389"></a>
							</div>
						</div>					
					</div>	
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</main>

	<br>

<?php include "footer.php" ?>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="js/validate_new.js"></script>
</body>
</html>	
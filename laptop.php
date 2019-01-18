<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		var imgObj = null;
		function moveDiv() {
			var $span = $("#random");

			$span.fadeOut(270, function() {
				var maxLeft = $(window).width() - $span.width();
				var maxTop = $(window).height() - $span.height();
				var leftPos = Math.floor(Math.random() * (maxLeft + 1))
				var topPos = Math.floor(Math.random() * (maxTop + 1))

				$span.css({ left: leftPos, top: topPos }).fadeIn(1000);
			});
			
		};
		moveDiv();
		setInterval(moveDiv, 10);
	</script>

	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	
<title>
	LLMS
</title>
</head>
<body>
	<div class="top">
		<p></p>
		<p>
			<a href="main.php" id="current">
			Laurus Laptop Management Service</a>
		</p>
	</div>
	<div class="menubar">
		<ul>
			<li><a href="#" id="current">Menu</a>
				<ul>
					<li><a href="menu/hamburger.php">Hamburger</a></li>
					<li><a href="menu/pizza.php">Pizza</a></li>
					<li><a href="menu/pasta.php">Pasta</a></li>
					<li><a href="menu/salad.php">Salad</a></li>
					<li><a href="menu/dessert.php">Dessert</a></li>
					<li><a href="menu/drink.php">Drink</a></li>
				</ul>
			</li>
			<li><a href="about.php">About</a></li>

			<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Location</a></li>
			<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Contact</a></li>
		</ul>
	</div>



	<script>

		function submit_form() {

			document.frm.target = 'ifrm';

			document.frm.action = 'result_laptop.php';

			document.frm.submit();

		}

	</script>

	<div align = "right"> Laptop data </div>
	<form method='post' name='frm' style="text-align: right">

		<input type=text name=cpu>

		<input type=button value='Search' onclick='submit_form()'>
		<br/>
		<br/>
		<input type=button value='Student' class="togglebutton" 
		onclick="location.href='index.php'">
	</form>

	<iframe name='ifrm' width='100%' height='200px' frameborder='2px'></iframe>
	<img src="http://m.hcinews.com/captcha.asp" id="imgCaptcha" onclick="showImage();">
<!--
	<div id="container"> <span id="random"><img src="sj.jpg" style="width:100%; height: 100%; visibility: visible; z-index: 8"></span>
	<span id="random"><img src="gg1.jpg" style="width:500px; height: 500px; visibility: visible; z-index: 8"></span> </div>
-->
</body>


</html>
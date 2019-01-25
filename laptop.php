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

	<script type="text/javascript">
		input.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("searchBtn").click();
			}
		});
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
			<a href="index.php" id="current">
			Laurus Laptop Management Service</a>
		</p>
	</div>
	<div class="menubar">
		<ul>
			<li><a href="reservation.php" id="current">Reservation</a></li>
			<li><a href="return.php">Return</a></li>
			<li><a href="index.php">Student</a></li>
			<li><a href="laptop.php">Laptop</a></li>

		</ul>
	</div>

	<script>
		function submit_form() {
			document.frm.target = 'ifrm';
			document.frm.action = 'result_laptop.php';
			document.frm.submit();
		}

	</script>
	<script type="text/javascript">
		input.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("searchBtn").click();
			}
		});
	</script>

	<div align = "right"> Laptop data </div>
	<form method='post' name='frm' style="text-align: right">
		<input type=text name=cpu placeholder="CPU">

		<input type=button value='Search' id='searchBtn' onclick='submit_form()'>
		<br/>
		<br/>
		<!-- <input type=button value='Student' class="togglebutton" 
			onclick="location.href='index.php'"> -->
			<a href=index.php>
				<img src=Student_image_1.png  height="55" width="60">
			</a>
		</form>

		<iframe name='ifrm' width='100%' height='200px' frameborder='2px'></iframe>
		<!-- <img src="http://m.hcinews.com/captcha.asp" id="imgCaptcha" onclick="showImage();"> -->
<!--
	<div id="container"> <span id="random"><img src="sj.jpg" style="width:100%; height: 100%; visibility: visible; z-index: 8"></span>
	<span id="random"><img src="gg1.jpg" style="width:500px; height: 500px; visibility: visible; z-index: 8"></span> </div>
-->
</body>


</html>
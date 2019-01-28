<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jquery-3.3.1.min.js"></script>
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
<script>
var input = document.getElementById("name");
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("searchBtn").click();
  }
});
</script>


	<style>

</style>
<link rel="stylesheet" type="text/css" href="fallstyle.css">

<title>
	LLMS
</title>
</head>
<body>

	<div class="top" style="position:relative;">
		<p></p>
		<p>
			<a href="index.php" id="
			current">
		Laurus Laptop Management Service</a>
		
	</p>
	
</div>
<div class="menubar">
	<ul>

		<li><a href="index.php">Student</a></li>
		<li><a href="laptop.php">Laptop</a></li>
		<!-- <li><a href="return.php">Return</a></li> -->
		<!-- <li><a href="http://www.instagram.com/sungjin1027" target="popup" >Location</a></li>
			<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Contact</a></li> -->
		</ul>
	</div>

	<script>
		function submit_form() {
			document.frm.target = 'ifrm';
			document.frm.action = 'result_student.php';


		}

	</script>
	<div align = "right"> Student data 


		<form method='post' name='frm' style="text-align: right">
			<input type="text" id="name" name="name" placeholder="Student name" >
			<button id="searchBtn" onclick="submit_form()">Search</button>




			<br/>
			<br/>
			<a href=laptop.php>
				<img src=Laptop_image.png height="55" width="62">
			</a>
		</div>
</form>


<iframe name='ifrm' width='100%' height='200px' frameborder='2px' ></iframe>

<!--
<img src="http://m.hcinews.com/captcha.asp" id="imgCaptcha">
<div id="container"> <span id="random"><img src="sj.jpg" style="width:500px; height: 500px; visibility: visible; z-index: 8"></span> </div>
-->

</body>


</html>
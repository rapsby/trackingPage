<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<style type="text/css">
.menubar{
border:none;
border:0px;
margin:0px;
padding:0px;
font: 67.5% "Lucida Sans Unicode", "Bitstream Vera Sans", "Trebuchet Unicode MS", "Lucida Grande", Verdana, Helvetica, sans-serif;
font-size:14px;
font-weight:bold;
}

.menubar ul{
background: rgb(109,109,109);
height:50px;
list-style:none;
margin:0;
padding:0;
}

.menubar li{
float:left;
padding:0px;
}

.menubar li a{
background: rgb(109,109,109);
color:#cccccc;
display:block;
font-weight:normal;
line-height:50px;
margin:0px;
padding:0px 25px;
text-align:center;
text-decoration:none;
}

.menubar li a:hover, .menubar ul li:hover a{
background: rgb(71,71,71);
color:#FFFFFF;
text-decoration:none;
}

.menubar li ul{
background: rgb(109,109,109);
display:none;
height:auto;
padding:0px;
margin:0px;
border:0px;
position:absolute;
width:200px;
z-index:200;
}

.menubar li:hover ul{
display:block;
}

.menubar li li {
background: rgb(109,109,109);
display:block;
float:none;
margin:0px;
padding:0px;
width:200px;
}

.menubar li:hover li a{
background:none;
}

.menubar li ul a{
display:block;
height:50px;
font-size:12px;
font-style:normal;
margin:0px;
padding:0px 10px 0px 15px;
text-align:left;
}

.menubar li ul a:hover, .menubar li ul li:hover a{
background: rgb(71,71,71);
border:0px;
color:#ffffff;
text-decoration:none;
}

.menubar p{
clear:left;
}

.top p, .top p a{
text-align:center;
margin:0px;
height: 15px;
color:#cccccc;
text-decoration:none;

}
.top {
background: rgb(109,109,109);
border:none;
border:0px;
margin:0px;
padding:0px;
height: 50px;
}

.frame1 {
	padding-top: 100px;
	width:100%;
	margin: 0 auto;
}

.content {
	float:left;
	margin-left:50px;
	padding-bottom: 50px;
	font: 67.5% "Lucida Sans Unicode", "Bitstream Vera Sans", "Trebuchet Unicode MS", "Lucida Grande", Verdana, Helvetica, sans-serif;
font-size:14px;
font-weight:bold;
color:#888888;

}
.content img {
	float:left;
	width : 150px;
	height: 150px;
}


	</style>
	<title>
		Abnormal Cuisine
	</title>
</head>
<body>
<div class="top">
	<p></p>
	<p>
		<a href="main.php" id="
		current">
		 Delicious Abnormal Cuisine</a>
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

 <li><a href="https://www.google.com/maps/place/Laurus+College+-+Santa+Maria/@34.922499,-120.4342317,17z/data=!3m1!4b1!4m5!3m4!1s0x80ec6ca63af620a3:0x199a7219e7450876!8m2!3d34.922499!4d-120.432043" target="popup" >Location</a></li>
 <li><a href="https://hangouts.google.com/?hl=ko-US&ht=0&hcb=0&lm1=1547163981604&hs=84&hmv=1&ssc=WyIiLDAsbnVsbCxudWxsLG51bGwsW10sbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLDg0LG51bGwsbnVsbCxudWxsLFsxNTQ3MTYzOTgxNjA0XSxudWxsLG51bGwsW1tudWxsLG51bGwsW251bGwsIisxODA1MzU0NzcwMSJdXV0sbnVsbCxudWxsLHRydWUsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsW10sW10sbnVsbCxudWxsLG51bGwsW10sbnVsbCxudWxsLG51bGwsW10sbnVsbCxudWxsLFtdXQ..&action=chat&pn=%2B18053547701" target="popup" >Contact</a></li>
</ul>
</div>



<script>

  function submit_form() {

    document.frm.target = 'ifrm';

    document.frm.action = 'welcome.php';

    document.frm.submit();

  }

</script>



<form method='post' name='frm' style="text-align: right">

  <input type=text name=name>

  <input type=button value='submit' onclick='submit_form()'>

</form>

<iframe name='ifrm' width='100%' height='200px' frameborder='2px'></iframe>


</body>


</html>
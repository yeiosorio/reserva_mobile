<!DOCTYPE html>
<html>
<head>
	<title>Reserva Mobile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- LIB***************************************************** -->
	 <link rel="stylesheet" href="lib/jquery.mobile.css" />
 	 <script src="lib/jquery.js"></script>
 	 <script src="lib/jquery.mobile.js"></script>

</head>
<body >


<section id="page" data-role="page" style="background-image: url(img/fondo.jpg);">
	<header data-role="header" style="background-image: url(img/fondo.jpg);">
		<h1>Reserva Mobile</h1>
	</header>
	<div class="ui-grid-a"  style="width: 92%; margin: auto;">
			<input type="search" name="" id="" value=""  />
	</div>
	
	<article data-role="content">
	<div class="ui-grid-a">
		<div class="ui-block-a"><a href="#listhotel" data-transition="pop up" id="hotlel"><img src="img/home/hotel.png" width="100%" height="100%" border="0" alt="" /></a>
		</div>

		<div class="ui-block-b"><a href="#" data-transition="pop up" id="meet"><img src="img/home/meet.png" width="100%" height="100%" border="0" alt="" /></a>
		</div>
	</div>
	<div class="ui-grid-a">
		<div class="ui-block-a"><a href="#" data-transition="pop up" id="hotel"><img  src="img/home/finca.png" width="100%" height="100%" border="0" alt="" /></a>
		</div>
		<div class="ui-block-b"><a href="#" data-transition="pop up" id="book"><img src="img/home/book.png" width="100%" height="100%" border="0" alt="" /></a>
		</div>
	</div>
	</article>
	
	
		<footer data-role="footer" data-position="fixed" >
		 	<div data-role="navbar" >
		 	    <ul >
		 	    	<li><a style="background-image: url(img/fondo.jpg);" href="index.php" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-top" >Home</a></li>

		 	    	<li><a style="background-image: url(img/fondo.jpg);" href="index.php" class="ui-btn ui-shadow ui-corner-all ui-icon-location ui-btn-icon-top">Location</a></li>

		 	    	<li><a style="background-image: url(img/fondo.jpg);" href="index.php" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-icon-top">Info</a></li>
		 	    	
		 	    	<li><a style="background-image: url(img/fondo.jpg);" href="index.php" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-top">Setting</a></li>
		 	    </ul>

		 	</div><!-- /navbar -->
		 </footer>

</section>

<!-- HOTEL
***************************************** -->
<section id="listhotel" data-role="page"  style="background-image: url(img/fondo.jpg);">
	<header data-role="header" data-add-back-btn="true" style="background-image: url(img/fondo.jpg);">
		<h1>hotels</h1>
	</header><!-- /header -->
	<article data-role="content">
		
 <ul id="listar" data-role="listview" style="overflow-x:hidden" data-theme="d" data-filter="true">
 	

	</article><!-- /content -->
	<footer data-role="footer" data-position="fixed" data-fullscreen="true">
		<h1>Powered by yeison osorio</h1>
	</footer>
</section><!-- /page -->


<!-- MEET
*********************************************** -->
<section id="listmeet" data-role="page" style="background-image: url(img/fondo.jpg);" >
	<header data-role="header" data-add-back-btn="true" style="background-image: url(img/fondo.jpg);">
		<h1>hotels</h1>
	</header><!-- /header -->
	<article data-role="content">
		
 <ul id="listar" data-role="listview" style="overflow-x:hidden" data-theme="d" data-filter="true">
 

	</article><!-- /content -->
	<footer data-role="footer" data-position="fixed" data-fullscreen="true">
		<h1>Powered by yeison osorio</h1>
	</footer>
</section><!-- /page -->





<script type="text/javascript" src="index.js"></script>
</body>
</html>
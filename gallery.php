<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>


	<!-- Required CSS -->
	<link href="css/movingboxes.css" media="screen" rel="stylesheet">
	<!--[if lt IE 9]>
	<link href="css/movingboxes-ie.css" rel="stylesheet" media="screen" />
	<![endif]-->
	
	<!-- Required script -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.movingboxes.js"></script>

	<!-- Demo only -->
	<link href="demo/demo.css" media="screen" rel="stylesheet">
	<style>
		/* Dimensions set via css in MovingBoxes version 2.2.2+ */
		#slider { width: 500px; }
		#slider li { width: 250px; }
	</style>
	<script>
	$(function(){

		$('#slider').movingBoxes({
			/* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
			width: 500,
			panelWidth: 0.5,
			*/
			startPanel   : 1,      // start with this panel
			wrap         : false,   // if true, the panel will "wrap" (it really rewinds/fast forwards) at the ends
			buildNav     : true,   // if true, navigation links will be added
			navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
		});

	});
	</script>

    
</head>

<body>
 <div id="wrapper">

	</div>
	<br>

	<!-- MovingBoxes Slider -->
	<ul id="slider">

		<li>
			<img src="demo/1.jpg" alt="picture">
		</li>

		<li>
			<img src="demo/2.jpg" alt="picture">
		</li>

		<li>
			<img src="demo/3.jpg" alt="picture">
		</li>

		<li>
			<img src="demo/4.jpg" alt="picture">
		</li>

		<li>
			<img src="demo/5.jpg" alt="picture">
			
		</li>

		<li>
			<img src="demo/6.jpg" alt="picture">
			
		</li>

	</ul> <!-- end Slider #1 -->

</div> <!-- end wrapper -->
</body>
</html>
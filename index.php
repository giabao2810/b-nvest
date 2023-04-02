<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vestman | Quản lý</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">   -->
	<link rel="stylesheet" type="text/css" href="css/styleadmincp1.css"> 
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

	<style>
		body{ 
			font-family: 'Roboto';
    		font-size: 22px;
		} 
		h1,h2{    
			display:flex; 
			justify-content: center;
			color: green;
		} 
		th{
			color: black;
		} 
		/* tr{
			font-weight: bold;
		}  */
		.logo{ 
			display:flex; 
			justify-content: center;
		}
		.logo img{ 
			height:40vh; 
			width: 60%;;
		}  
		a{ 
			text-decoration:none; 
			color: red;
			font-size: 16px; 
			font-weight: bold; 		
		}
		li{
			list-style-type: none; 
		}
	</style>
	
</head> 

<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>

<body>
	<div class="wrapper">  
 		<!-- <div class="logo">
 			<img src="https://file.vfo.vn/hinh/2016/01/anh-bia-attack-on-titan-13.jpg" alt="">
		 </div> -->
	<?php 
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript">
		new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'chart',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
			{ year: '2008', value: 20 },
			{ year: '2009', value: 10 },
			{ year: '2010', value: 5 },
			{ year: '2011', value: 5 },
			{ year: '2012', value: 20 }
		],
		// The name of the data record attribute that contains x-values.
		xkey: 'year',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Value']
		});
	</script>
</body>
</html>

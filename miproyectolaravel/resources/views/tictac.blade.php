<html>
<head>
<!-- <link rel="stylesheet" href="{{asset("css/app.css")}}"> -->
<link rel="stylesheet" href="css/app.css" />
<style>

body {
		background-color: brown;
		text-align: center;
	}
	#ip{
		border-radius: 50px;
    	border: 2px solid black;
    	padding: 50px; 
    	width: 200px;
    	height: 15px;
    	margin-bottom: 20px;
    	margin-top: 20px;
    	margin-right: 20px;
    	font-size: 30px;
	}
	#go{
		 
    	width: 200px;
    	height: 15px;
    	margin-top: 20px;
    	padding: 50px;
    	border-radius: 50px;
	}
	
</style>
	<title>Tic Tac Toe</title>
	<!-- <style>
	body {
		background-color: brown;
		text-align: center;
	}
	#ip{
		border-radius: 50px;
    	border: 2px solid black;
    	padding: 50px; 
    	width: 200px;
    	height: 15px;
    	margin-bottom: 20px;
    	margin-top: 20px;
    	margin-right: 20px;
    	font-size: 30px;
	}
	#go{
		 
    	width: 200px;
    	height: 15px;
    	margin-top: 20px;
    	padding: 50px;
    	border-radius: 50px;
	}
	</style>-->
</head>
<body>
<div style="margin:0 auto;width:75%;text-align:center;">
<form name = "ticktactoe" method = "post" action = "tictactoe">
	<?php 
	
	for($i = 0; $i <=8; $i++)
			{
				printf('<input type = "text" id ="ip" name = "box%s" value = "%s">', $i, $box[$i]);
				if ($i == 2 || $i == 5 || $i == 8){
				print("<br>");
				}
			}
			if($winner == 'n')
			{
				print('<input type = "submit" name = "gobtn" value = "Siguiente movimiento" id = "go">');
			}
			else
			{
				print('<input type = "button" name = "newgamebtn" value = "Juega de nuevo" id = "go" onclick = "window.location.href="tictactoe">');
			}
	?>
	@csrf
	</form>
	</div>
</body>
</html>
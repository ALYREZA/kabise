<?php
	include_once('./class/Kabise.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> سال کبیسه  </title>
	<style type="text/css" media="screen">
		body{
			margin: 0;
			padding: 0;
			position: relative;
			top: 0;
			left: 0;
		}
		body > .container {
			width:900px;
			margin: 0 auto;
			height:auto;
			direction: rtl;
			text-align: right;
			font-family: "B Nazanin",BNazanin,Tahoma;
		}
	</style>
</head>
<body>

	<div class="container">
		
		<h1>
			آیا سال 1375 ، سال کبیسه است ؟
		</h1>
			<h2>
				<?php
					if(Kabise::iskabise(1375)){
						echo "بله";
					}else
					{
						echo "خیر";
					}
				?>
			</h2>
		<h1>
			سال کبیسه بعدی چه سالی است ؟
		</h1>
			<h2>
				<?php
					echo Kabise::nextKabise(1375);
				?>
			</h2>
	</div>
	
</body>
</html>

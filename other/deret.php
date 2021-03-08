<!DOCTYPE html>
<html>
<head>
	<title>deret</title>
	<meta charset="utf-8">

	<style>
	body{
		background-color : #d3d3d3;
		font-size : 20px;
	}

	.container{
		float : left;
		margin : 30px;
	}
	.container h1{
		text-transform : uppercase;
		font-family : sans-serif;
		font-size : 18px;
	}
	.container label{
		text-transform : uppercase;
		font-family : sans-serif;
		font-size : 12px;
		font-weight : bold;
	}

	.input1{
		margin :20px 0 20px 40px ;
	}

	.input2{
		margin :20px 0 20px 40px ;
	}
	.input3{
		margin :20px 0 20px 60px ;
	}


	.submit{
		margin  :5px 0 10px 120px;
	}
	
	</style>

</head>
<body>

<div class = "container">
	<h1>mencari suku ke-n </h1>
	<form action="deret.php" method="GET">

		<div class = "input1">
		<label >bilangan 1 :</label>  
		<input type="number" name="inp1">
		</div>
		
		<div class="input2">
		<label >bilangan 2 :</label> 
		<input type="number" name="inp2">
		</div>

		<div class= "input3">
		<label >suku ke :</label> 
		<input type="number" name="ke">
		
		</div>
		<div class ="submit">
		<input type="submit" name="hitung" >
		</div>

		<?php
		if(isset($_GET['hitung'])){
			$a = $_GET['inp1'];
			$b = $_GET['inp2'];
			$n = $_GET['ke'];

			$beda = $b - $a;
			$output = $a + ($n - 1)* $beda;
			echo "suku ke- $n bilangan tersebut adalah $output  <br>" ;

			echo "barisan angkanya : $a $b"; 
			
			for ($i=$a; $i<=$n-1; $i++)
			{

			$output = $b + $beda;
			echo " $output";
			
			$a = $b;  
			$b = $output; 
			}
		}
		?>

	</form>
	</div>
	


</body>
</html>
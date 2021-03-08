 
<!DOCTYPE html>
<html>
<head>
	<title>bilangan fibonaci</title>
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

	.submit{
		margin  :5px 0 10px 120px;
	}
	
	</style>
</head>
<body>
<div class= "container">
	<h1>menghitung bilangan fibonacci </h1>
	<form action="fibonaci.php" method="POST">
		
		<div class = "input1">
		<label >bilangan 1 : </label> 
		<input type="number" name="inp1">
		</div>

		<div class="input2">
		<label >bilangan 2 : </label> 
		<input type="number" name="inp2"></br>
		</div>

		<div class="input3">
		<label >jumlah bilangan : </label>  
		<input type="number" name="jml">
		</div>

		<div class ="submit">
		<br>
		<input type="submit" name="hitung" >
		</br>
		</div>
		<?php 

		if (isset($_POST['hitung'])){
			$b1 = $_POST['inp1'];
			$b2 = $_POST['inp2'];
			$jumlah = $_POST['jml'];
			
			echo "hasil : $b1 $b2"; // digunakan untuk menampilkan 2 bilangan awal
			
			for ($i=$b1; $i<=$jumlah; $i++)
			{

			$output = $b2 + $b1;
			echo " $output";
			
			$b1 = $b2;  // reset bilangan pertama jadi bilangan kedua dst
			$b2 = $output; // bilangan kedua jadi bilangan yg baru
			}

		} 

	?>

	</form>
	</div>
	
		


</body>
</html>
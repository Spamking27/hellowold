<!DOCTYPE html>
<html>

<head>

		<?php
			
			$id = htmlspecialchars($_GET["id"]);
			$SIN = htmlspecialchars($_GET["SIN"]);
			$server = "localhost";
			$username = "php";
			$password ="hellonearth";
			$database = "for_site";

			$conn = mysqli_connect($server,$username,$password,$database);
			
			if(!$conn){
				die("connection failed: {myslqi_connect_error()}");
				}

			$sql ="select * from info where id='{$id}';";
			$result= mysqli_query($conn,$sql);

			$sqlv2= "insert into info (SIN) values ('$SIN');";
			$result = mysqli_query($conn,$sqlv2);


		?>

</head>
<body>
		<?php
				
			foreach($result as $row)
			{
				echo "{$row['SIN']}, {$row['credit_card']}, {$row['ehtnicity']}. \n";

			}
			

		?>


<p>
Hello, 
Have you prayed today: <?= htmlspecialchars($_POST['Prayers']) ?></p>

<p> Have you sinned today: <?= htmlspecialchars($_POST['sins'])?></p>
<p> Have you always left room for CHEESE in bed and or in other scenarios/places: <?= ($_POST['feta'])?> </p>
</body>
</html>


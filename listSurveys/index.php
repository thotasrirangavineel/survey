<html>
<head>
</head>
<body>
	<header>
	</header>
	
	<div id = "buttons">
		<a href = "../index.php"><p align = "center">Home</p></a>
	</div>

</body>
</html>

<?php
		include '../db/index.php';

		$sql = "select * from survey";
		$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row['survey_name']." : ";
			echo "Count = ".$row['survey_count'];
			echo "<br>";
		}
?>
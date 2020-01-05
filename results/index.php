<html>
<head>
</head>
<body>

	<header>
	</header>
	
	<div id = "buttons">
		<a href = "../index.php"><p align = "center">Home</p></a>
	</div>

	<form id = "result_survey" action="index.php" method="get">
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input type="submit">
	</form>
	
<?php
			include '../db/index.php';
			if(count($_GET)>0){
			$name = ($_GET['name']);
			$sql = "select survey_count from survey where survey_name = '$name'";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			echo "Total number of people who have taken this survey : ".$row['survey_count']."<br>";
				
			$name = ($_GET['name']);
			$sql = "select surveyq_question, surveyq_yes, surveyq_no from surveyq where surveyq_name = '$name'";
			$result = $conn->query($sql);
			
			while($row = mysqli_fetch_assoc($result))
			{
				echo $row['surveyq_question']." : ";
				echo "Yes = ".$row['surveyq_yes']." : No = ";
				echo $row['surveyq_no'];
				echo "<br>";
			}
			}
?>
	
</body>
</html>
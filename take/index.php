<html>
<head>
</head>
<body>

	<header>
	</header>
	
	<div id = "buttons">
		<a href = "../index.php"><p align = "center">Home</p></a>
	</div>

	<form id = "take_survey" action="index.php" method="post">
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input type="submit">
	</form>
	<form id = "taking_survey" action="taking.php" method="post">
		<?php
			include '../db/index.php';
			if(count($_POST) > 0)
			{
			$name = $_POST['name'];
			$sql = "select count(*) from surveyq where surveyq_name = '$name'";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			if($row["count(*)"]>0){
				echo '<input placeholder = "Reenter name" type="text" name="name" maxlength = "30" required><br>';
				$sql = "select surveyq_question from surveyq where surveyq_name = '$name'";
				$result = $conn->query($sql);
				for($x=0; $x<$row["count(*)"]; $x++)
				{
					$row1 = mysqli_fetch_assoc($result);
					echo $row1['surveyq_question'];
					
					echo "<br>";
					echo '<input placeholder = "Reenter above question" type="text" name="question[]" maxlength = "150" required><br>';
					echo "<input type='checkbox' name='yes[]' value='yes'>Yes<br>";
					echo "<input type='checkbox' name='yes[]' value='no'>No<br>";
				}
				echo "<input type='submit'>";
			}
			}
		?>
	</form>
	
</body>
</html>
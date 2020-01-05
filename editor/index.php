<html>
<head>
</head>
<body>

	<header>
	</header>
	
	<div id = "buttons">
		<a href = "../index.php"><p align = "center">Home</p></a>
	</div>

	<form id = "new_survey" action="edit.php" method="post">
		Create new survey :<br>
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input type="submit">
	</form>

	<form id = "existing_survey_add" action="edit.php" method="post">
		Add questions to existing survey :<br>
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input placeholder = "Question" type="text" name="question" maxlength = "150" required><br>
		<input type="submit">
	</form>
	
	<form id = "existing_survey_delete" action="delete.php" method="post">
		Remove questions from existing survey :<br>
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input placeholder = "Question" type="text" name="question" maxlength = "150" required><br>
		<input type="submit">
	</form>
	
	<form id = "delete_existing_survey" action="delete.php" method="post">
		Remove existing survey :<br>
		<input placeholder = "Name" type="text" name="name" maxlength = "30" required><br>
		<input type="submit">
	</form>

</body>
</html>
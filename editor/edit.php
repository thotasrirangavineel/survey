<?php
	include '../db/index.php';

	function goback($status) {
		header('Location: index.php?status="'.$status.'"');
	}
	
	if(count($_POST) === 1) {	//create
	    $name = ($_POST['name']);
		$sql = "select count(*) from survey where survey_name = '" . $name . "';";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		//proceed or go back
		if ($row["count(*)"] == 1)
			goback("survey already exists");
		else{
			$sql = "INSERT INTO survey (survey_name, survey_count) VALUES ('$name', '0')";
			if ($conn->query($sql) === TRUE){
				goback("created");
			}
			else{
				goback("failed");
			}
		}
	}
	elseif(count($_POST) === 2){	//add
		$name = ($_POST['name']);
		$question = ($_POST['question']);
		$sql = "select count(*) from survey where survey_name = '" . $name . "' AND survey_question = '" . $question . "';";
		$result = $conn->query($sql);
		$row1 = mysqli_fetch_assoc($result);
		$sql = "select count(*) from survey where survey_name = '" . $name . "';";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		//proceed or go back
		if ($row["count(*)"] == 0)
			goback("survey doesn't exist");
		elseif($row1["count(*)"] == 1){
			goback("question exists in the survey");
		}
		else{
			$sql = "INSERT INTO surveyq (surveyq_name, surveyq_question, surveyq_yes, surveyq_no) VALUES ('$name', '$question', '0', '0')";
			if ($conn->query($sql) === TRUE){
				goback("added");
			}
			else{
				goback("failed");
			}
		}
	}
	else{
		goback("invalid");
	}
?>
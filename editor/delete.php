<?php
	include '../db/index.php';

	function goback($status) {
		header('Location: index.php?status="'.$status.'"');
	}
	
	if(count($_POST) === 1) {	//delete
	    $name = ($_POST['name']);
		$sql = "select count(*) from survey where survey_name = '$name'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		//proceed or go back
		if ($row["count(*)"] == 0)
			goback("survey doesn't exists");
		else{
			$sql = "DELETE FROM survey WHERE survey_name='$name'";
			if ($conn->query($sql) === TRUE){
				$sql = "DELETE FROM surveyq WHERE surveyq_name='$name'";
				if ($conn->query($sql) === TRUE){
					goback("survey removed");
				}
				else{
					goback("failed to remove");
				}
			}
			else{
				goback("failed");
			}
		}
	}
	elseif(count($_POST) === 2){	//remove
		$name = ($_POST['name']);
		$question = ($_POST['question']);
		$sql = "select count(*) from surveyq where surveyq_name = '$name' AND surveyq_question = '$question'";
		$result = $conn->query($sql);
		$row1 = mysqli_fetch_assoc($result);
		$sql = "select count(*) from survey where survey_name = '$name'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		//proceed or go back
		if ($row["count(*)"] == 0)
			goback("survey doesn't exist");
		elseif($row1["count(*)"] == 0){
			goback("question(s) doesn't exist in the survey");
		}
		else{
			$sql = "DELETE FROM surveyq WHERE surveyq_name = '$name' AND surveyq_question='$question'";
			if ($conn->query($sql) === TRUE){
				goback("question(s) removed");
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
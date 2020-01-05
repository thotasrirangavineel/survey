<?php
	include '../db/index.php';

	function goback($status) {
		header('Location: index.php?status="'.$status.'"');
	}
	
	if(count($_POST)>0){
		$name = ($_POST['name']);
		$question = ($_POST['question']);
		$yes = ($_POST['yes']);
		$m=0;
		$sql = "UPDATE survey SET survey_count=survey_count+'1' where survey_name = '$name'";
		$result = $conn->query($sql);
		foreach($yes as $v)
		{
			if($yes[$m]==='yes')
				$sql = "UPDATE surveyq SET surveyq_yes=surveyq_yes+'1' WHERE surveyq_name = '$name' AND surveyq_question = '$question[$m]'";
			else
				$sql = "UPDATE surveyq SET surveyq_no=surveyq_no+'1' WHERE surveyq_name = '$name' AND surveyq_question = '$question[$m]'";
			$result = $conn->query($sql);
			$m++;
		}
		goback(filled);
	}
	else{
		goback('empty filled');
	}
?>
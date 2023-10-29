<?php
	# Declare variables
	$question1 = $_POST['question1'];
	$question2 = $_POST['question2'];
	$question3 = $_POST['question3'];
	$question4 = $_POST['question4'];
	$question5 = $_POST['question5'];
	$question6 = $_POST['question6'];
	$question7 = $_POST['question7'];
	$question8 = $_POST['question8'];
	$question9 = $_POST['question9'];
	$question10 = $_POST['question10'];
	$question11 = $_POST['question11'];
	$fullname = $_POST['fullname'];

	# check if you answered all questions
	if(($question1=='')||($question2=='')||($question3=='')||($question4=='')||($question5=='')||
		($question6=='')||($question7=='')||($question8=='')||($question9=='')||($question10=='')||($question11=='')){

		echo"<h1>Please answer all Questions!...</h1>";
	}else{
		# check if the answers are correct and do the calculations

		$points = 0;

		if($question1 == 3){
			$points = $points + 1;
		}
		if($question2 == 3){
			$points = $points + 1;
		}
		if($question3 == 2){
			$points = $points + 1;
		}
		if($question4 == 1){
			$points = $points + 1;
		}
		if($question5 == 2){
			$points = $points + 1;
		}
		if($question6 == 1){
			$points = $points + 1;
		}
		if($question7 == 3){
			$points = $points + 1;
		}
		if($question8 == 1){
			$points = $points + 1;
		}
		if($question9 == 3){
			$points = $points + 1;
		}
		if($question10 == 1){
			$points = $points + 1;
		}
		if($question11 == 3){
			$points = $points + 1;
		}
		# points to percentage conversion
		$points = round(($points / 11) * 100);

		if($points < 50){
			# failed
			echo "<h1>You need at least 50% to earn this PHP Certificate!</h1>";
		}
		else{
			echo "<h1 align=\"center\">Congratulations!</h1>
				<p>Well done ".$fullname.", You have passed the PHP quiz with a score of ".$points."%</p>
			";

			echo "<p>Get your Certificate as a PDF file.</p>
					<form action =\"pdf.php\" method=\"post\">
						<div align=\"center\">
							<input type=\"hidden\" name=\"fullname\" value=\"".$fullname."\"/>
							<input type=\"hidden\" name=\"points\" value=\"".$points."\"/>
						</div>
						<button>Get PDF</button>
					</form>";
		}
	}

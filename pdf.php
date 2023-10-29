<?php
	set_time_limit(60); // script can take up to a minnute

	# declare variable names...
	$fullname = $_POST['fullname'];
	$points = $_POST['points'];

	function pdf_replace($pattern, $replacement, $string){
		$len = strlen($pattern);
		$regexp = '';

		for ($i=0; $i < $len; $i++) { 
			# code...
			$regexp .= $pattern[$i];
			if ($i < $len - 1) {
				# code...
				$regexp .= "(\)\-{0,1}[0-9]*\(){0,1}";
			}
		}
		return ereg_replace($regexp, $replacement, $string);
	}

	if(!$fullname || !$points){
		echo "<h1>Error!</h1>
				<p>This page was called incorrectly</p>";
	}else{
		# generate headers...
		header('Content-Disposition: filename=rk11cert.pdf');
		header('Content-type: application/pdf');

		$date = date('F d, Y');

		# open template file...
		$filename = 'template.pdf';

		$fp = fopen($filename, 'r');
		$output = fread($fp, filesize($filename));

		fclose($fp);

		//$output = pdf_replace('<<NAME>>', $fullname,$output);

		echo $output;
	}
<?php
	require 'function.php';
	$valore1=$_REQUEST['v1'] ?? 0;
	$valore2=$_REQUEST['v2'] ?? 0;
	$operation=$_REQUEST['op'] ?? "";
	$result=$operation;
	if($operation !='null')
	{
		if($operation=="addition")
			$result=addition($valore1,$valore2);
				elseif ($operation=="substraction")
					$result=substraction($valore1,$valore2);
					elseif($operation=="division")
						$result=division($valore1,$valore2);
					else
						$result=multiplication($valore1,$valore2);
				
				
	}

?>

	<html>
		<head>
			<title>Php Calculator</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>
			<body>
				<div class="content">
					<form class="form" action="#">
						<h1 class="form_title">Calculator</h1>
							<div class="form_group">
								<input class="form_input" type="text" name="v1" placeholder=" ">
								<label class="form_label">Valore1</label>	
							</div>
							<div class="form_group">
								<input class="form_input" type="text" name="v2" placeholder=" ">
								<label class="form_label">Valore2</label>
							</div>
								<input class="btn" type="submit" name="op" value="addition">
								<input class="btn" type="submit" name="op" value="substraction">
								<input class="btn" type="submit" name="op" value="division">
								<input class="btn" type="submit" name="op" value="multiplication">
					</form>
						<h2>Calculation result : <?php echo $result; ?> </h2>
				</div>
			</body>
	</html>

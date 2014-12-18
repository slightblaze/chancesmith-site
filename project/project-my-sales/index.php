<?php
	$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	if ($browser == true){
	$browser = 'iphone';
	}
		
	//App Vars
	$example = 270000;
	$defaultDay2 = 0;
	
	if(isset($_GET['currentSales']))
	{
	   $currentSales = $_GET['currentSales'];
	   $dayOption = $_GET['day'];
	   setlocale(LC_MONETARY, 'en_US');
	   $example = "You entered:" . money_format('%(#10n', $currentSales);
	   
	   if($dayOption=1){
	   	$defaultDay1= "selected";
	   }else{
	   	$defaultDay2= "selected";
	   };
	   
	};
	
	function projectionDaily()
	{
		
		$amtDays= date("j") - $_GET['day'];
		$daysNCurrentMonth = date("t");
		
		$answer = ($_GET['currentSales'] / $amtDays);
		
		return $answer;
	}
	
	function projectionMonthly()
	{
		$amtDays= date("j") - $_GET['day'];
		$daysNCurrentMonth = date("t");
		
		$answer = ($_GET['currentSales'] / $amtDays) * $daysNCurrentMonth;
		
		return $answer;
	}
	
	function projectionYearly()
	{
		$amtDays= date("j") - $_GET['day'];
		$daysNCurrentMonth = date("t");
		
		$answer = (($_GET['currentSales'] / $amtDays) * $daysNCurrentMonth) * 12;
		
		return $answer;
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<?php if($browser == 'iphone'){ ?>
		<meta name="viewport"
		content="width=device-width,
		minimum-scale=1.0, maximum-scale=1.0" />
		<?php } ?>
		
		<title>Project Your Sales | by Chance Smith</title>
		<link rel="shortcut icon" href="pms-fav.png">

		<link href="/_/css/bootstrap.css" rel="stylesheet">
	    
	    <link type="text/css" rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header>
						
						<div id="box">
							<form action="index.php" method="get">
								<a href="index.php" title="Project My Sales"><img id="headimg" src="project-my-sales.png" alt="your sales projections" /></a>
								<label for="currentSales">Input your current sales:</label>
								<input type="number" id="currentSales" name="currentSales" placeholder="     <?php echo $example; ?>">
								<label for="day">Sales are up until?</label>
								<select name="day" class="radio">
								  <option value="1" <?php echo isset($defaultDay1) ? $defaultDay1: ''; ?>>Yesterday</option>
								  <option value="0" <?php echo isset($defaultDay2) ? $defaultDay2: ''; ?>>Today</option>
								</select>
								<button type="submit" class="btn btn-lg btn-primary btn-block">Calculate it!</button>
							</form>
						</div>
					</header>
					<section>
						
						<?php
							if(isset($_GET["currentSales"]))
							{
								if($_GET['currentSales'] > 0)
								{
									echo "<div id=\"numBlock\">";
									echo "So far your daily average, of ";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionDaily());
									echo ", is leading to <br /><strong>";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionMonthly());
									echo "</strong> this month. <br />Keep this pace and you will see ";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionYearly());
									echo " in a year.";
									echo "</div>";
									
									echo "<div id=\"numBlock\">";
									echo "<div id=\"num\">";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionDaily());
									echo "</div><div id=\"numDescription\">Daily Avg</div>";
									echo "</div>";
									
									echo "<div id=\"numBlock\">";
									echo "<div id=\"num\">";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionMonthly());
									echo "</div><div id=\"numDescription\">this Month</div>";
									echo "</div>";
									
									echo "<div id=\"numBlock\">";
									echo "<div id=\"num\">";
									setlocale(LC_MONETARY, 'en_US');
									echo money_format('%(#10n', projectionYearly());
									echo "</div><div id=\"numDescription\">this Year</div>";
									echo "</div>";
								}else{
									echo "<center>Please enter a number great than 0 to get results. Cheers!</center>";
								}
							}
						?>
						
					</section>	
					
					<footer>
						<div id="footerbox">
						<?php	
								echo "Made By: <a href=\"http://chancesmith.org\"><img src=\"chance-smith.png\" alt=\"chance smith\" /></a> &copy;2013";
						?>
						</div>
					</footer>
				</div>
			</div>	
		</div>
		
		<!-- <div id="main">
			<header>
				
				<div id="box">
					<form action="index.php" method="get">
						<a href="index.php" title="Project My Sales"><img id="headimg" src="project-my-sales.png" alt="your sales projections" /></a>
						<label for="currentSales">Input your current sales:</label>
						<input type="number" id="currentSales" name="currentSales" placeholder="     <?php echo $example; ?>">
						<label for="day">Sales are up until?</label>
						<select name="day" class="radio">
						  <option value="1" <?php echo isset($defaultDay1) ? $defaultDay1: ''; ?>>Yesterday</option>
						  <option value="0" <?php echo isset($defaultDay2) ? $defaultDay2: ''; ?>>Today</option>
						</select>
						<button type="submit">Calculate it!</button>
					</form>
				</div>
			</header>
			<section>
				
				<?php
					if(isset($_GET["currentSales"]))
					{
						if($_GET['currentSales'] > 0)
						{
							echo "<div id=\"numBlock\">";
							echo "So far your daily average, of ";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionDaily());
							echo ", is leading to <br /><strong>";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionMonthly());
							echo "</strong> this month. <br />Keep this pace and you will see ";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionYearly());
							echo " in a year.";
							echo "</div>";
							
							echo "<div id=\"numBlock\">";
							echo "<div id=\"num\">";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionDaily());
							echo "</div><div id=\"numDescription\">Daily Avg</div>";
							echo "</div>";
							
							echo "<div id=\"numBlock\">";
							echo "<div id=\"num\">";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionMonthly());
							echo "</div><div id=\"numDescription\">this Month</div>";
							echo "</div>";
							
							echo "<div id=\"numBlock\">";
							echo "<div id=\"num\">";
							setlocale(LC_MONETARY, 'en_US');
							echo money_format('%(#10n', projectionYearly());
							echo "</div><div id=\"numDescription\">this Year</div>";
							echo "</div>";
						}else{
							echo "<center>Please enter a number great than 0 to get results. Cheers!</center>";
						}
					}
				?>
				
			</section>	
			
			<footer>
				<div id="footerbox">
				<?php	
						echo "Made By: <a href=\"http://chancesmith.org\"><img src=\"chance-smith.png\" alt=\"chance smith\" /></a> &copy;2013";
				?>
				</div>
			</footer>
		</div> -->
	</body>
</html>
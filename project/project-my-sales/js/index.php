<?php
	$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	if ($browser == true){
	$browser = 'iphone';
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

		<link type="text/css" rel="stylesheet" href="style.css">
		<script type="text/javascript">
			//function ComputeSales()
			//{
				
				//var sales = document.forms['proForm']['currentSales'].value;
				//var daySel = document.forms['carpet']['length'].value;
				//var o = document.forms['carpet']['overage'].value;
				//var daily = 12;
				//var monthly = 14;
				//var yearly = monthly * 12;
				$(document).ready(function(){
					$('#button').click(function(){
						//var cal = $('input[name=currentSales]').val();
						//$('section').append("<div id=\"numBlock\"><div id=\"num\">' + cal + </div><div id=\"numDescription\">Daily Avg</div></div>");
						confirm( "You at least got this message!");
					});
					
					$('button').click(function(){
						//var cal = $('input[name=currentSales]').val();
						//$('section').append("<div id=\"numBlock\"><div id=\"num\">' + cal + </div><div id=\"numDescription\">Daily Avg</div></div>");
						confirm( "You at least got this message!");
					});
				});
			//}

		</script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-40132026-1', 'betterjoblanding.com');
		  ga('send', 'pageview');
		
		</script>
	</head>
	
	<body>
		
		<div id="main">
			<header>
				
				<div id="box">
					<form name="proForm" action=" ">
						<a href="index.php" title="Project My Sales"><img id="headimg" src="../project-my-sales.png" alt="your sales projections" /></a>
						<label for="currentSales">Input your current sales:</label>
						<input type="number" id="currentSales" name="currentSales" placeholder="  Enter Number only here.">
						<label for="day">Sales are up until?</label>
						<select name="day" class="radio">
						  <option value="1">Yesterday</option>
						  <option value="0">Today</option>
						</select>
						
						<button type="button">Calculate it!</button>
					</form>
					<div id="button">Go</div>
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
						echo "Made By: <a href=\"http://chancesmith.org\"><img src=\"../chance-smith.png\" alt=\"chance smith\" /></a> &copy;2013";
				?>
				</div>
			</footer>
		</div>
	</body>
</html>
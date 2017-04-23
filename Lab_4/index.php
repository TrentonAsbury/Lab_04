<?php
include 'includes/header.php';
?><!-- CREATING DYNAMIC PAGE TITLE
	<?php $title="Home Page"?>
<!DOCTYPE HTML>
<html>
	<head>
		 DISPLAYING PAGE TITLE 
		<title><?php echo $title; ?></title>
		
	</head>
-->
	<body>
		
		<section id="wrapper">
<header><h1>Welcome to CIS 2250</h1></header>
<h1 class="date">Current Date: &nbsp;<?php $date = date('F - d - Y');
	echo $date;?></h1>

<section id="main">
	<article id="left">

		
	</article>
	<article id="right">
		
		</section>
			
			<h1>Shipping Charges</h1>
			
			<form action="scripts/process.php" method="post">
				<p> Quantity <input type="text" name="quantity" id="" value="" /></p>
				<p> Shipping Charges <input type="text" name="shipping" id="" value="" /></p>
				
				<!--
				<p><input type="text" name="" id="" value="post" /></p>
				<p><input type="text" name="" id="" value="post" /></p>-->
				<p> <select name="company">
					
					<option value="FED">FedEx</option>
					<option value="UPS">UPS</option>
					<option value="USPS">USPS</option>
					<option value="Carrier">Carrier</option>
					
				</select></p>
				
				<!-- <p>Total Charges: <input type="text" name="totalCharges" id="" value="" /></p> -->
				
				<p><input type="submit" name="submit" value="Calculate Charges" /></p>
				
				
				
			</form>
		</section>
		<?php
include 'includes/footer.php';
?>

<!--
	</body>
	
	
</html>-->



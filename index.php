<html>
<head><link rel="stylesheet" type="text/css" href="styles.css"></head>
<body>
<div id="topBar"><p style="">Tip Calculator</p></div>
<div id="mainBox">
	<div id="contentBox">
		<div id="headingBox">Tip Calculator</div>
		<div id="inputBox">
			<form action="" method="POST">
				<?php
					if(isset($_POST["submitButton"])){
						if($_POST["subTotal"]>0){
							echo "Bill Subtotal : <input type=\"text\" name=\"subTotal\" value=\"".$_POST["subTotal"]."\"><br><br>";
						}else{
							echo "Bill Subtotal : <input type=\"text\" name=\"subTotal\"><br><br>";
						}
					}
				?>
				Tip Percentage : <br>
				<?php
					for($i=1;$i<=3;$i++){
						$percent = $i*5 + 5;
						if(isset($_POST["submitButton"])){
							if($_POST["subTotal"]>0 && $_POST["val"]==$percent){
								echo "<input type=\"radio\" name=\"val\" value=\"".$percent."\" checked>".$percent."%";
							}else{
								echo "<input type=\"radio\" name=\"val\" value=\"".$percent."\">".$percent."%";
							}
						}
					}
				?>
				<br><br>
				<input style="margin-left:150px;" type="submit" name="submitButton" Value="Submit">
			</form>
		</div>
		<?php
				if(isset($_POST["submitButton"])){
					$givenValue = $_POST["subTotal"];
					if($givenValue>0 && $_POST["val"]>0){
						$tipValue = $_POST["val"];
						$finalTip = $givenValue * ($tipValue/100);
						echo "<div id=\"resultBox\">";
						echo "<p class=\"result\">Final Tip: ".$finalTip."</p>";
						echo "<p class=\"result\">Final Bill: ".($givenValue+$finalTip)."</p>";
						echo "</div>";
					}
				}
			?>
	</div>
</div>
</body>
</html>

<html>
	<Title></title>
	<form method="post" action="calc.php">
		<input name="num1" placeholder="enter first digit"> 
		<br>
		<select name="operation">
			<option value="">Select</option>
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		<br>
		<input name="num2" placeholder="enter second digit">
		<input type="submit" value="Calculate">
	</form>
</html>

<?php

?>
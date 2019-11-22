<html>
	<Title>Calculator</title>
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
if(isset($_POST['operation'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operation = $_POST['operation'];
	if($operation=='add'){
		$result = $num1+$num2;
	}elseif($operation=='sub'){
		$result = $num1-$num2;
	}elseif($operation=='mul'){
		$result = $num1*$num2;
	}elseif($operation=='div'){
		$result = $num1/$num2;
	}
	echo 'Answer is '.$result;
}
?>
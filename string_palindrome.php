<html>
	<Title>String_Palindrome</title>
	<h5>Check palindrome</h5>
	<form method="post" action="string_palindrome.php">
		<input name="str" placeholder="enter string"> 
	</form>
</html>

<?php
$string=$_POST["str"];


function checkPalindrome( $string )   
{
    $string = str_replace( ' ', '', $string );
    return $string == strrev( $string );
}  

if( checkPalindrome( $string ) == true )
{
    echo 'String is a palindrome';
}
else
{
    echo 'string is not a palindrome';
}
?>
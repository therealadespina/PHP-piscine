<?php
echo "Please enter a digit: ";
$data = trim(fgets(STDIN));
if (is_numeric($data))
{
	$num = intval($data);
	if($num % 2 === 0)
	{
		echo 'even';
		echo "\n";
	}
	else
	{
		echo 'odd';
		echo "\n";
	}
}
	else
		echo "Is a not digit!";
		echo "\n";
?>

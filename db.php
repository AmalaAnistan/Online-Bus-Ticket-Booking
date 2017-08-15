<?php
$connect=mysqli_connect('localhost','root','','ticket');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
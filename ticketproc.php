<?php include 'db.php'; ?>

<?php
 
$name=$_POST['username'];
$gender=$_POST['gender'];
$date=$_POST['book'];
$f_city=$_POST['fromcity'];
$t_city=$_POST['tocity'];
$mob=$_POST['mobile'];
$bus_type=$_POST['type'];


mysqli_query($connect,"INSERT INTO ticket(username,gender,book,fromcity,tocity,mobile,type)
				VALUES('$name','$gender','$date','$f_city','$t_city','$mob','$bus_type')");
				
				
if(mysqli_affected_rows($connect) > 0){
	echo "<p><h2><center>Ticket is Booked</center></h2></p>";
	//echo "<a href=\"index.htm\">Go Back</a>";
} else {
	echo "Ticket NOT Booked<br />";
	echo mysqli_error ($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ticket Summary</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/style.css" />
	  <link rel="stylesheet" href="bootstrap/reset.min.css">
      <link rel="stylesheet" href="bootstrap/style.css">
  </head>
  <body>
   <section>
  <!--for demo wrap-->
  <h1>Ticket Info</h1>
  <div class="container">
   <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="2" align="center">
      <thead>
        <tr>
          <th>Booking Details</th>
          <th>Conformation Customer</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>Name</td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td>Gender</td>
		  <td><?php echo $gender; ?></td>
        </tr>
        <tr>
          <td>Booking Date</td>
		  <td><?php echo (strftime("%m/%d/%Y %H:%M")); ?></td>
        </tr>
        <tr>
			<td>Booking Date</td>
			<td><?php echo (strftime("%m/%d/%Y %H:%M")); ?></td>
        </tr>
        <tr>
			<td>Ticket Number</td>
			<td><?php echo(rand(1,100) . "<br>");?></td>
        </tr>
        <tr>
          <td>Start from the City</td>
		  <td><?php echo $f_city; ?></td>
        </tr>
        <tr>
          <td>To Reach the City</td>
		  <td><?php echo $t_city; ?></td>
		</tr>
			<td>Mobile Number</td>
			<td><?php echo $mob; ?></td>
		</tr>
		<tr>
			<td>Bus Type </td>
			<td><?php echo $bus_type; ?></td>
		</tr>
		 </tbody>
    </table>
  </div>
</section>
<footer><center> 
<button class="btn" onclick="myFunction()">Print the ticket</button></footer>
<script>
function myFunction() {
    window.print();
}
 var today = new Date();
 document.write(today);
</script></center>
</body>
 </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
<div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://www.google.co.in/search?q=amala+anistan&rlz=1C1CHZL_enIN756IN756&oq=amala+anistan&aqs=chrome..69i57.4806j0j7&sourceid=chrome&ie=UTF-8">AMALA ANISTAN</a>
</div>	

</html>

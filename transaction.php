<?php
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			/*verflow: hidden;*/
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:gray;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
		background-color: ;
		background-image:url("img/the-town-bg-01.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	table{
			border-radius:25px;
			text-align:center;
			margin-left: 50px;
			margin-right: 50px;
			border-style: groove;
			border-collapse:collapse;
			}
		th{
			color:white;
			font-size:24px;
			padding:16px;
		}
		.one{
			background: #848b79;
			color: white;
		    font-style: times;
		}
		.next{
			background: #5E7D7E;
			color: gray;
		    font-style: times;

		}
		
		td{
			text-align:center;
			font-size:18px;
			color: white;
			padding: 0px 20px 0px 20px;
		}
		tr{
		}
		tr:hover {background-color: #78866B;}
			
		

		th,td{
			border-collapse:collapse;
			border:2px black;

		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:#3090C7;
			text-align:center;
			padding-top:12px;
			border-style: solid;
		}
		.button2{
			background-color:#728FCE;
			border-radius:12px;
			padding:5px;
			color:black;
			text-align:center;
		}
		
		.button2:hover{
			background-color: gray;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
	</style>
	</head>
	<body>
	<div>
	<h1 class="navbar" style="color:white;text-align:left">User Information</h1>
	</div>
	</ul><br><br><br><br><br><br>
		<div class="container">
		<table class="table">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<footer>
		<div>
    <div>
	<a href="index.html">
    <button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;"  href="index.html" >HOME</button>

	</a>
</div>
</div>
  <p style="color:#ff0000;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>	
	</body>
</html>
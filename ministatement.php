<?php
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		footer {
         padding: 25px;
		 vertical-align: middle;
        }
		.navbar {
           margin-bottom: 0;
           border-radius: 12px;
        }
		body{
			text-align:center;
			background-color: ;
		  	background-image:url("img/the-town-bg-01.jpg");
		  	background-position: center;
		 	background-repeat: no-repeat;
		 	background-size:cover;
	    	object-fit:cover;
		}
		.flat-table-1 {
			background:rgba(0,128,128,0.5);
		}
		.flat-table-1 tr:hover {
			background: rgba(128,128,128,0.5);
		}
		h1{
			font-family: times, Times, serif;
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
		<ul class="nav-ul">
	
	</ul><br><br><br>
	    <div style="color:white;text-align:left">
		<h2 ><?php echo "Mini Statement of ".$name1?></h2>
		</div>
		<div style="text-align:center">
		<table class="table">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		</div>
		<br>
		<br>
		<div>
<div>
    <div class="button">
	<a href="index.html">
    <button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;"  href="index.html" >HOME</button>

	</a>
</div>
</div>
		<footer>
  <p style="color:white;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>	
	</body>
</html>
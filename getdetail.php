<?php 
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<html>
<head>
   <title>viewUser</title>
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
			color:black;
			font-size:24px;
			padding:16px;
		}
		.one{
			background: #848b79;
			color: black;
		    font-style: times;
		}
		.next{
			background: #5E7D7E;
			color: black;
		    font-style: times;

		}
		
		td{
			text-align:center;
			font-size:18px;
			color: black;
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
			background-color: black;
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
    
    <div >
	<h1 class="navbar" style="color:black;text-align:left">User Information</h1>
	</div>
	<div class="container">
    <table class="table" style="border-radius:25px;">
		<thead class="one"> 
			<th class="active">Sno</th>
			<th class="active">name</th>
			<th class="active">Email</th>
			<th class="active">Amount</th>
			<th class="active">Credit</th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button2" type="submit" name="name" value="Avinash">View</button>
				</form>
			</td>
		</tr>
		
		<tr >
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2" type="submit" name="name" value="Harshal">View</button>
				</form>
			</td>
		</tr>
        <tr class="next" >
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2" type="submit" name="name" value="Prathamesh">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2" type="submit" name="name" value="Ajay">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2" type="submit" name="name" value="Vaishali">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2" type="submit" name="name" value="Monika">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2"type="submit" name="name" value="Ravina">View</button>
				</form>
			</td>
		</tr>
        <tr class="next">
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2"type="submit" name="name" value="Nishant">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2"type="submit" name="name" value="Avdhut">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button2"type="submit" name="name" value="Rushi">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>
	<footer>
<div>
<div class="button">
	<a href="index.html">
    <button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;"  href="index.html" >HOME</button>

	</a>
</div>
</div>


  <p style="color:#cc0000;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavireddy24@gmail.com.com</a></p>
</footer>


</body>

</html>

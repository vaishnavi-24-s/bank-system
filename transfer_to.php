<?php
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
   <link rel="stylesheet" href="button.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
	</a>
	</ul>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:white;text-align:left;">Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" >Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:40px; width:100px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
	<div class="buttons">
		<a href="index.html">
		<button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;" >home</button>
		</a>
	</div>
<footer>
<div class="buttons">
		<a href="index.html">
		<button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;" >home</button>
		</a>
	</div>
  <p style="color:red;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>
</body>
</html> 
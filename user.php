<?php 
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
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
	<ul class="nav-ul" style="height:53px;">
	
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px" ><a class="nav-link"><?php echo $name?></a></li>
	</ul>
	<br><br><br>
    <div>
       <table class="table">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
		<div> 
   

     <div class="buttons">
	<a href="transfer_to.php">
		<button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;" > Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;" >Mini Statement</button>
		</a>
	</div>
	</div>
	<br>
	<br>
	<div class="button">
	<a href="index.html">
    <button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;"  href="index.html" >HOME</button>
</a>
     </div>
	 </div>
	 
               
	<footer>
  <p style="color:black;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>

    </body>
</html>
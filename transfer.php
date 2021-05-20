<?php
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
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
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:rgba(215,219,225,0.5);
		padding:50px;
		border:2px #78866B;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:gray;
	}
	.button{
		border-radius:10px;
		border: 1px solid #78866B;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: white;
		font-size:17px;
		font-weight:bold;
		background:rgba(0,0,0,0.8);
	}
	.button:hover{
		background-color:#78866B;
		color: white;
	}
	.navbar {
      margin-bottom: 0;
      border-radius: 0;
	  color: black;
	  text-align: left;
    }
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Avinash"){
				 var arr=["Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Harshal"){
					var arr=["Avinash","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				}
				else if(a==="Prathamesh"){
					var arr=["Avinash","Harshal","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				}
				else if(a==="Ajay"){
					var arr=["Avinash","Harshal","Prathamesh","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Vaishali"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Monika"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Ravina"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Nishant"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Avdhut","Rushi"];
				 }
				 else if(a==="Avdhut"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Rushi"];
				 }
				 else if(a==="Rushi"){
				 var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1  class="navbar">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Avinash">Avinash</option>
			<option value="Harshal">Harshal</option>
			<option value="Prathamesh">Prathamesh</option>
			<option value="Ajay">Ajay</option>
			<option value="Vaishali">Vaishali</option>
			<option value="Monika">Monika</option>
			<option value="Ravina">Ravina</option>
			<option value="Nishant">Nishant</option>
			<option value="Avdhut">Avdhut</option>
			<option value="Rushi">Rushi</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='white'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div>
    <div>
	<a href="index.html">
    <button style="background:black;font-size:20px;color:white;border-radius:12px;border-size:50px;padding:25px;"  href="index.html" >HOME</button>

	</a>
</div>
</div>
</div>
<footer>
  <p style="color:red;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>
</body>
</html>
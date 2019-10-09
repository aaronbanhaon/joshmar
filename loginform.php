<?php include('header.php'); ?>
<?php
	session_start();
	
	if (isset($_SESSION['id'])){
		$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
		$row=mysqli_fetch_array($query);
		
		if ($row['access']==1){
			header('location:admin/');
		}
		else{
			header('location:user/');
		}
	}
?>

<body style="background-image: url('img/background.jpg');width: auto;">
<div  class="container" >
	<div id="login_form" class="well" style="background-color: rgba(50, 115, 220, 0.3); height: 20%;" >
        <button onclick="window.location.href='index	.php'"> <h2><center> <img src="img/logo.jpg" style="width: 40%; height:null; border-radius: 100%;"> </center></h2></button>
		<hr>
		<form method="POST" action="login.php" style="color: white; " autocomplete="off">
			Username:
		  <input type="text" name="username" class="form-control" required placeholder="Username">
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required placeholder="Password"> 
		<div style="height: 10px;"></div>
		<center><button type="submit" class="btn btn-primary" style="background-color: red; border-style: none; width: 310px;"><span class="glyphicon glyphicon-log-in"></span> Login</button>
            <button class="btn btn-primary" onclick="window.location.href='register.php'" style="margin: 3px; border-style: none; width: 310px;"><span class="glyphicon glyphicon-log-in"></span>Register</button></center>
		</form>


        <div style="height: 20px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>


<?php include('script.php'); ?>
</body>
</html>
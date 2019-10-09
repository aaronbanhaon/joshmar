<?php include('header.php'); ?>


<body  style="background-image: url('img/background.jpg');>
<div  class="container">
    <div id="login_form" class="well" style="background-color: rgba(50, 115, 220, 0.3); height: 20%;">
        <h1>Registration</h1>
<form role="form" method="POST" action="registeruser.php" enctype="multipart/form-data" autocomplete="off">
    <input type="text" name="name" class="form-control" required placeholder="Name">
    <input type="text" name="address" class="form-control" required placeholder="Address">
    <input type="text" name="contact" class="form-control" required placeholder="contact">
    <input type="email" name="email" class="form-control" required placeholder="Email Address">
    <input type="text" name="username" class="form-control" required placeholder="Username">
    <input type="password" name="password" class="form-control" required placeholder="Password">
    <div style="height: 10px;"></div>
    <button type="button" class="btn btn-default" onclick="window.location.href='index.php'" <i class="fa fa-times"></i>Cancel</button>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Register </button>
</form>
    </div>
</div>
 <style>
     input{
         margin: 5px;
     }
 </style>
</body>

<!DOCTYPE html>
<html lang="en">

<body  style="background: #90AFC5;">
<?php include('head.php'); ?>
<div class="topnav">
    <a class="navbar-brand" href="#">Joshmar Printing Service</a>
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <div class="login-container">
        <form method="POST" action="login.php" autocomplete="off">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#register">Register</button>
            <button type="submit" class="btn btn-info btn-lg">Login</button>
        </form>

    </div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/order.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="img/ship.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Shipping </h3>
          <p>Nationwide</p>
        </div>
      </div>
          <div class="item">
              <img src="img/payment.png" alt="Image">
              <div class="carousel-caption">
                  <h3>Shipping </h3>
                  <p>Nationwide</p>
              </div>
          </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h1>What We Do</h1><br>
    <div class="gallery" >
            <img src="img/Calendar.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Calendar</div>
    </div>
    <div class="gallery" >
        <img src="img/magazine.jpg" alt="calendar" width="600" height="400" id="myImg2">
        <div class="desc">Magazine</div>
    </div>

    <div class="gallery">
        <img src="img/card.png" alt="Forest" width="600" height="400" id="myImg3">
        <div class="desc">Business Card</div>
    </div>
    <div class="gallery" >
        <img src="img/letterhead.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Letterhead</div>
    </div>
    <div class="gallery" >
        <img src="img/id.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">ID</div>
    </div>
    <div class="gallery" >
        <img src="img/folder.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Folder</div>
    </div>
    <div class="gallery" >
        <img src="img/flyers.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Flyers</div>
    </div>    <div class="gallery" >
        <img src="img/receipt.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">receipt</div>
    </div>
    <div class="gallery" >
        <img src="img/id.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">ID</div>
    </div>
    <div class="gallery" >
        <img src="img/folder.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Folder</div>
    </div>
    <div class="gallery" >
        <img src="img/flyers.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">Flyers</div>
    </div>    <div class="gallery" >
        <img src="img/receipt.jpg" alt="calendar" width="600" height="400" id="myImg">
        <div class="desc">receipt</div>
    </div>








</div>
    </div>
  </div>
</div><br>
<footer class="container-fluid text-center"  style="background: #336B87">
    <p>Copyright ©2019 Joshmar Printing Services. All Rights Reserved.</p>
    <a href="terms.php">Terms & Condition</a>
    <a href="privacy.php">Privacy & Security Policy</a>

</footer>

<?php include('registermodal.php'); ?>
</body>

</html>

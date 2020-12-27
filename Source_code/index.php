<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/logo4.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>


<section class="white-section" id="features">

<div class="container-fluid">
    <br><br>
  <div class="row">
    <div class="feature-box col-lg-4">
    <center><i class="fa fa-clock-o fa-4x"></i>
      <h3 class="feature-title">Selection</h3>
      <p>Choose your time and number of guests</p></center>
    </div>

    <div class="feature-box col-lg-4">
    <center><i class="fa fa-check-circle fa-4x"></i>
      <h3 class="feature-title">Book the table</h3>
      <p>Confirm your booking</p></center>
    </div>

    <div class="feature-box col-lg-4">
      <center><i class="fa fa-coffee fa-4x"></i>
      <h3 class="feature-title">Enjoy your food</h3>
      <p>Relinquish yourself to the delicious food</p></center>
    </div>
  </div>


</div>
</section>
<!--about us section-->

<section id="aboutus">

 <div class="container">
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/22.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/42.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/55.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>In recent times, many restaurants have replaced the traditional pencil and notebook with an online reservation system. So here we are, a team of young minds, at
the service of people to provide them with the best facilities. Nowadays it has become common for fine dining restaurants to offer table reservations to their clients.
<br><br>The restaurant was started in the year 2018 and received a great response from the people. People used to choose us for their happy days and special ocassions. 
Gradually, we gained more customers and it was quite a task to assign tables to everyone immediately, people had to wait in queues for their turn.
<br><br>To avoid the inconvinience to the customers, we thought of introducing an online service by allowing people to book tables in our restaurant sitting at their homes.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----speciality-->
 <div class id="gallery"><br>
 <div class="container">
 <h3 class="text-center bg-light"><br>OUR SPECIALITY<br><br></h3>
 <div class="row">
    <div class="col-xl-4">
        
        <div class="card">
              <img src="img/88.jpg" alt="Avatar" height="270px" width="350px">
        <div class="container">
            <h5><b>Chocolate Cookies</b></h5>
            <p>Crispy and Chewy chocolate cookies</p>
        </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
             <img src="img/61.jpg" alt="Avatar" height="270px" width="350px">
            <div class="container">
            <h5><b>Spaghetti</b></h5>
                 <p>Tangy tomato pasta</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <img src="img/33.jpg" alt="Avatar" height="270px" width="350px">
            <div class="container">
                 <h5><b>Indian Platter</b></h5>
                 <p>Hot and spicy cuisine</p>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-xl-4">
        
        <div class="card">
              <img src="img/74.jpg" alt="Avatar" height="270px" width="350px">
        <div class="container">
            <h5><b>Pizzeria</b></h5>
            <p>Crispy and cheesy pizza</p>
        </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
             <img src="img/09.jpg" alt="Avatar" height="270px" width="350px">
            <div class="container">
                <h5><b>Apple Tarts</b></h5>
                <p>Sweet and savory tarts</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <img src="img/25.jpg" alt="Avatar" height="270px" width="350px">
            <div class="container">
                 <h5><b>Mocktails</b></h5>
                 <p>Refreshing juices</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    
        
</div><br><br> 

<!----end of gallery -->

<div class="container" id="reservation">
    <h1 class="text-center bg-light">RESERVATION<br><br></h1>
    <img  src="img/10.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-dark btn-lg btn-block">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>




<?php
require "footer.php";
?>
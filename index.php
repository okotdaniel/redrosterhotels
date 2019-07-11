
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/files/head.php'; ?>
</head>
<style>
html{
  scroll-behavior: smooth;
}
.me, .mea{
  color: white;
}
.reserve{
  width: 370px;
  border: 1px solid red;
  border-radius: 2px;
  border-width: 0px solid grey;;
  opacity: 0.3px;
}

.reserveation{
  background-image:url('assets/images/slider2.jpg');
  width: 100%;
}
.reserveation h2{
  color: white;
}
</style>
<body>

<?php include 'includes/files/navbar.php' ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class=" jumbotron container-fluid">    
        <h1 class="text-center"> ABOUT US</h1> 
  <div class="about" id="about">
    <div class="row">
        <div class="col-lg-6 col-sm-3 col-xs-12">
          
        </div>
    </div>
  </div>
</div>

<div class="container-fluid reserveation " id="reserveation">
 
    <h2> Ready? Reserve a room Now </h2>
    <div class="reserve">
        
      <form class="form-group">
        <div class="checkin-date">
          <h3 class="me"> Check In </h3>
          <input type="date" id="checkin" class="form-control" name="checkin">
        </div>

        <div class="checkin-date">
          <h3 class="me"> Check Out </h3>
          <input type="date" id="checkin" class="form-control" name="checkin">
        </div>

        <div class="checkout-date">
          <div class="headr">
            <h3 class="me"> Rooms </h3>
          </div>
          <input type="date" id="checkin" class="form-control" name="checkin">
        </div>

        <div class="checkout-date">
          <h3 class="me">Rooms</h3>

          <select name="rooms" id="rooms">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
          </select>
          </div>

          <div class="family d-flex padding">
              <div class="adults">
                <p class="mea" >Adults </p>
                <select name="adults" id="adults">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <div class="adults   https://github.com/okotdaniel/redrosterhotels.git">
                <p class="mea" >Children </p>
                <select name="children" id="children">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
          </div>
          <br>
          <button class="btn btn-primary ">Check Availability</button>
        </div>

      </form>

    </div>


</div>


<div id ="directors">
<section id="team">
  <div class="container my-3 py-5 text-center ">
    <div class="row mb-5">
      <div class="col">
        <h3>MEET OUR TEAM</h3>
        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Id ut omnis distinctio magni reprehenderit! Facilis,
           blanditiis at modi maxime obcaecati
           corrupti ratione officiis dolores temporibus molestiae 
           ipsam sunt neque atque.
        </p> 
      </div>
    </div>
    <div class="row"> 
          <div class=" col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <img src="assets/images/ban6.jpg" class="img-fluid rounded-circle w-50 mb-3">
                      <h3>Ian Mutungi </h3>
                         <h5> Php Developer</h5>
                            <p>voluptatem corporis incidunt praesentium ipsum 
                              fuga quidem sit nobis quaerat voluptatibus! Quidem.
                            </p>
                  <div class="d-flex flex-row justify-content-center">
                      <div class="p-4">
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </div>

                      <div class="p-4">
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </div>

                      <div class="p-4">
                        <a href="#"> <i class="fa fa-instagram"></i> </a>
                      </div>
                  </div>

                </div>
            </div> 

          </div>


          <div class=" col-lg-3 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <img src="assets/images/ban6.jpg" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>AndrewAmuda</h3>
                               <h5> Developer</h5>
                                  <p>voluptatem corporis incidunt praesentium ipsum 
                                    fuga quidem sit nobis quaerat voluptatibus! Quidem.
                                  </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-instagram"></i> </a>
                            </div>
                        </div>
      
                      </div>
                  </div> 
                </div>

              <div class=" col-lg-3 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <img src="assets/images/ban6.jpg" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Patrick W </h3>
                               <h5> Developer</h5>
                                  <p>voluptatem corporis incidunt praesentium ipsum 
                                    fuga quidem sit nobis quaerat voluptatibus! Quidem.
                                  </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-instagram"></i> </a>
                            </div>
                        </div>
      
                      </div>
                  </div> 
                </div>



                <div class=" col-lg-3 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <img src="assets/images/ban6.jpg" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Daniel Okot </h3>
                               <h5> Developer</h5>
                                  <p>voluptatem corporis incidunt praesentium ipsum 
                                    fuga quidem sit nobis quaerat voluptatibus! Quidem.
                                  </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </div>
      
                            <div class="p-4">
                              <a href="#"> <i class="fa fa-instagram"></i> </a>
                            </div>
                        </div>
      
                      </div>
                  </div> 
                </div>

        </div>
  </div>
</section>

</div>


<div class="container-fluid text-center works" id="services">
<h3>SERVICES</h3>
<h4>What we offer</h4>
<br>
<div class="row">
  <div class="col-sm-4">
    <i class='fa fa-car ' style='font-size:65px; color:red;'></i>
    <h4>Car Rental</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
  <div class="col-sm-4">
  <i class='fas fa-hamburger' style='font-size:65px; color:red;'></i>
    <h4>Catering</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
  <div class="col-sm-4">
    <i class='fa fa-user-md' style='font-size:65px; color:red;'></i>
    <h4>Doctor On Call</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-sm-4">
    <i class='fa fa-tour' style='font-size:65px; color:red;'></i>
    <h4>Tours & Travels</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
  <div class="col-sm-4">
    <i class='fa fa-code' style='font-size:65px; color:red;'></i>
    <h4>CERTIFIED</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
  <div class="col-sm-4">
    <i class='fa fa-facebook' style='font-size:65px; color:red;'></i>
    <h4 style="color:#303030;">HARD WORK</h4>
    <p>Lorem ipsum dolor sit amet..</p>
  </div>
</div>
</div>


  <div class="container-fluid bg-grey  contact" id="contactus">
    <h3 class="text-center">CONTACT US</h3>
    <div class="row">
      <div class="col-sm-5">
        <p><i class="fa fa-map-marker"></i>  <br>
            Entebbe, UG <br>
            Plot 256, Daniel Street Bunono <br>
            Near Nabutono Stage
        </p>
        <p><i class="fa fa-phone"></i> <br>
        Fax: +266 778 173952 <br>
        Tel:  +256 757076371 </p>
        <p><i class="fa fa-envelope"></i> info@rerosterhotels.com</p> 
      </div>
      <div class="col-sm-7">
        <form action="includes/functions/contact_process.php" method="POST">
            <?php require_once 'includes/functions/contact_process.php'; ?>
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control"  name="names" placeholder="Names" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control"  name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control"  name="comments" placeholder="Messages" rows="8"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button  class="btn btn-primary pull-right " type="submit" name="submit">Send</button>
            </div>
          </div> 
        
        </form>
      </div>
    </div>
  </div>



<div id="googleMap" style="height:300px;width:100%;"></div>


<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
var myCenter = new google.maps.LatLng(0.081391, 32.482661);
function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
position:myCenter,
});
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
// Scroll to specific values
// scrollTo is the same
window.scroll({
    top: 2500, 
    left: 0, 
    behavior: 'smooth'
  });
  
  // Scroll certain amounts from current position 
  window.scrollBy({ 
    top: 100, // could be negative value
    left: 0, 
    behavior: 'smooth' 
  });
  
  // Scroll to a certain element
  document.querySelector('.hello').scrollIntoView({ 
    behavior: 'smooth' 
  });
  </script>
<?php include 'includes/files/footer.php' ?>
</body>
</html>
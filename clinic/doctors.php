<?php require'config.php'?>

<?php 
  $query=" ";
  if($_SERVER["REQUEST_METHOD"]=="GET"){
    $query = $_GET['query'];

    $mysqli = $conn->prepare("SELECT * FROM specialist WHERE state = ? OR country = ?");
    $mysqli->bind_param('ss', $query,$query);
    $mysqli->execute();
    $result = $mysqli->get_result();

    if ($result->num_rows == 1) {

      $specialists = $result->fetch_assoc();

    }

  }
?>


    



<?php require'header.php' ?>    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Specialists</h1>
              <p>Get to know Specialists in Your Region Using The Search On The Go!!</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row justify-content-center element-animate">
          <div class="col-md-6">

            <form action="doctors.php" method="GET">
              <label for="search-doctor">Search Specialists</label>
              <div class="input-group input-group-lg">
                <input type="text" id="search-doctor" name="query" class="form-control" placeholder="Search for..." aria-label="Search for...">
                <span class="input-group-btn">
                  <input type="submit" name="login" value="Go!" class="btn btn-info">
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php if($specialists){?>
      <section class="section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-3 element-animate">
              <div class="media d-block media-custom text-center">
                <img src='img/doctor_1.jpg' alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black"><?php echo "Dr.".$specialists['fullname'];?></h3>
                  <p></p>
                  <p>
                    <a href="#" class="p-2"><?php echo $specialists['specialization']." Specialist" ?></a>
                    <a href="#" class="p-2"><span class="fa fa-phone"><?php echo $specialists['mobile'] ?></span></a>
                    <a href="#" class="p-2"><span class="fa fa-mail"><?php echo $specialists['email'] ?></span></a>
                    <p></p>
                    <a href="appointment.php" class="p-2 btn btn-info">Appointment</a>
                  </p>
                </div>
              </div>
            </div>
            
        </div>
      </section>
      <?php } ?>

    <?php require'footer.php' ?>

    <!-- Modal -->
    

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php

include 'dbconfig/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $contact = $_POST['phone_number'];
  $doctor = $_POST['doctor'];
  $department = $_POST['department'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $query = "INSERT INTO `appointment` (`Email`, `Phone_no`, `Doctor`, `Department`, `Date`, `Time`) VALUES ('$email', '$contact', '$doctor', '$department','$date', '$time ');";
  $result = mysqli_query($con, $query);
 
header("location:http://localhost/hospital%20site%20project/index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/149279717/Logo Files/For Web/Favicons/browser.png">

  <title>vik healthcare</title>

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div id="preloader"></div>

  <!--navbar-start from here-->
  <?php include('./header.html') ?>
  <!--navbar-end from here-->

 <!-- hero section  -->
  <section class="header-bg align-items-center position-relative d-flex" id="top">
    <div class="container head-container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="header-title">
            <p class="font-weight-bold size-16 text-uppercase header-small-title title mb-3 ml-1">Vik Healthcare</p>
            <h1 class="font-weight-bold main-title mb-4 ">We Take Care Our Patients Health</h1>
            <p class="text-sub ml-lg-2 mb-lg-3 pb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita cum reiciendis, modi esse vitae autem
            consectetur. </p>
            <a href="" class="btn btn-primary main-btn1" >About Us</a>
          <a href="" class="btn btn-light main-btn2" >Learn More</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <!-- service section  -->
  <section class="service-section d-flex">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Doctor.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">QUALIFIED DOCTORS</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Medicine.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">TRUSTED TREATMENT</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Hospital.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">24/7 SERVICES</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- our medical  -->
  <section class="section-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 col-md-12">
          <div class="image-1">
            <img src="./images/img1.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12 our-medical">
          <h5>OUR MEDICAL</h5>
          <h2>We're setting Standards in Research what's more, Clinical Care.</h2>
          <p>We provide the most full medical services, so every person could have the pportunity o receive qualitative
            medical help.</p>
          <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics
            and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with
            over 30 years of uality training and experience.</p>
          <button class="btn btn-primary">MORE ABOUT</button>
        </div>
      </div>
    </div>
  </section>

  <!-- our service  -->
  <section class="our-service-section px-lg-5 px-md-3 px-1 mt-5">
    <div class="container-fluid ">
      <div class="row">
        <div class="col text-center pt-5">
          <h5>OUR SERVICES</h5>
          <h2>We Care Our Patients</h2>
        </div>
      </div>

      <div class="row  mt-5 px-lg-2 py-5">
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
          <div class="box-service" >
            <i class="fa-solid fa-heart-pulse"></i>
            <h3>Health Check</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12  text-center">
          <div class="box-service" >
            <i class="fa-solid fa-bed-pulse"></i>
            <h3>Operation Theater</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
          <div class="box-service" >
            <i class="fa-solid fa-prescription-bottle-medical"></i>
            <h3>Pharmacy Support</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12  text-center">
          <div class="box-service" >
            <i class="fa-solid fa-truck-medical"></i>
            <h3>Ambulance Car</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12  text-center">
          <div class="box-service" >
            <i class="fa-solid fa-building"></i>
            <h3>Lab Tests</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6  col-12  text-center">
          <div class="box-service" >
            <i class="fa-solid fa-kit-medical"></i>
            <h3>Intensive Care</h3>
            <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud
              achievement staff.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- our doctor  -->
  <section class="our-doctors-section p-lg-5 p-md-5 p-3 mb-3">
    <div class="container-fluid">
      <div class="text-center">
        <h5>OUR doctors</h5>
        <h2>Our Dedicated Doctors Team</h2>
      </div>
      <div class="row g-3 mt-3">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-4 doctor-card" >
          <div class="p-2 shadow">
            <img src="./images/doctor3.jpg" class="img-fluid w-100" alt="">

            <div>
              <div class="text-center mt-3">
                <h3 style="color:blue;">
                  Maria Rose
                </h3>
                <p>Dental Surgeon</p>
              </div>

              <div class="d-flex justify-content-around">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-4 doctor-card" >
          <div class="p-2 shadow">
            <img src="./images/doctor1.jpg" class="img-fluid w-100" alt="">
            <div>
              <div class="text-center mt-3">
                <h3 style="color:blue;">
                  Maria Rose
                </h3>
                <p>Dental Surgeon</p>
              </div>

              <div class="d-flex justify-content-around">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-4 doctor-card" >
          <div class="p-2 shadow">
            <img src="./images/doctor2.jpg" class="img-fluid w-100" alt="">

            <div>
              <div class="text-center mt-3">
                <h3 style="color:blue;">
                  Maria Rose
                </h3>
                <p>Dental Surgeon</p>
              </div>

              <div class="d-flex justify-content-around">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-4 doctor-card" >
          <div class="p-2 shadow">
            <img src="./images/doctor4.jpg" class="img-fluid w-100" alt="">

            <div>
              <div class="text-center mt-3">
                <h3 style="color:blue;">
                  Maria Rose
                </h3>
                <p>Dental Surgeon</p>
              </div>

              <div class="d-flex justify-content-around">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <!-- appointment section  -->
  <div class="container-fluid p-5 px-sm-0 appointment-section my-5">

    <div class="row">
      <div class="col d-lg-block d-sm-none d-none">
        <img src="./images/img4.jpg" alt="">
      </div>
      <div class="col">
        <h5>Book Appointment</h5>
        <h1>Book Your Lab Test</h1>
        <form class="row g-3 pt-5" action="index.php" method="post">
          <div class="col">
            <input type="email" class="form-control" id="inputEmail" placeholder="Your Email" name="email">
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" id="inputPhone" placeholder="Phone Number" name="phone_number">
          </div>

          <div class="col-md-6">
            <select id="inputDoctor" class="form-select" name="doctor">
              <option selected disabled>Select Doctor</option>
              <option value="willian">william</option>
              <option value="marry">marry</option>
              <option value="rose">rose</option>

            </select>
          </div>

          <div class="col-md-6">
            <select id="inputDepartment" class="form-select" name="department">
              <option selected disabled>Select Department</option>
              <option value="opd">opd</option>
              <option value="neu">neu</option>
              <option value="opd">doc</option>

            </select>
          </div>

          <div class="col-md-6">
            <input type="date" class="form-control" id="inputDate" name="date">
          </div>

          <div class="col-md-6">
            <input type="time" class="form-control" id="inputTime" name="time">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-5 p-lg-5 pt-2 appoint-number">
      <div class="col-12 text-center appoint-num">
        <h6>Or Just Give Us A Call</h6>
        <h1>+91 93104 88674</h1>
        <hr color="Blue">
        <p><i>24/7, 365 Days A Year Always Open For You</i></p>
      </div>
    </div>
  </div>

 <!-- blog section  -->
  <div class="container">
    <div class="text-center my-5">
      <h3>Our Blogs</h3>
      <h1>Recent Articles and News</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 mt-md-3 mt-5" >
        <div class="card">
          <img src="./images/news-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.
            </p>
            <a href="" class="btn-lg btn-primary">Learn More</a>

            <p class="card-text mt-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mt-md-3 mt-5" >
        <div class="card">
          <img src="./images/news-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <a href="" class="btn-lg btn-primary">Learn More</a>

            <p class="card-text mt-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mt-md-3 mt-5" >
        <div class="card">
          <img src="./images/news-3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <a href="" class="btn-lg btn-primary">Learn More</a>

            <p class="card-text mt-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- testonominal  -->
  <section class="mt-5">
    <div class="container">
      <div class="text-center my-5">
        <h3>Valuabele Feedback</h3>
        <h1>From Our Patients</h1>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-12">
        <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-dark" data-bs-ride="carousel">
          <!-- Inner -->
          <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
              <p class="lead font-italic mx-4 mx-md-5">
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
              </p>
              <div class="mt-5 mb-4">
                <img src="./images/img/img-3.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                  width="100" height="100" />
              </div>
              <p class="text-muted mb-0">- Anna Morian</p>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
              <p class="lead font-italic mx-4 mx-md-5">
                "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing
                elit."
              </p>
              <div class="mt-5 mb-4">
                <img src="./images/img/img-3.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                  width="100" height="100" />
              </div>
              <p class="text-muted mb-0">- Teresa May</p>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
              <p class="lead font-italic mx-4 mx-md-5">
                "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
                maiores."
              </p>
              <div class="mt-5 mb-4">
                <img src="./images/img/img-3.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                  width="100" height="100" />
              </div>
              <p class="text-muted mb-0">- Kate Allise</p>
            </div>
          </div>
          <!-- Inner -->

          <!-- Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Carousel wrapper -->
      </div>
    </div>
  </section>



  <!--footer-start from here-->
  <?php include('./footer.php') ?>



  <script src=".\js\script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
    var loader = document.getElementById('preloader');
    window.addEventListener('load', function () {
      loader.style.display = "none";
    })
  </script>
</body>

</html>
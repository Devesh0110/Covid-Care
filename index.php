<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devesh Singh</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *,
::after,
::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  line-height: 1.5;
  font-size: 0.8rem;
  background: lightgrey;
  overflow-x:hidden;
}
ul {
  list-style-type: none;
}
a {
  text-decoration: none;
  cursor: pointer;
}

.nav-center {
  padding: 1em;
  background: white;
  width: 100%;
}

.nav-header {
  display: flex;
  justify-content: space-between;
}

.nav-header img {
  cursor: pointer;
  height: 50px;
  float: left;
  margin: 1em;
}

.links {
  display: flex;
  flex-direction: column;
  /*   height: 80vh; */
  height: 0;
  overflow: hidden;
}

.show-links {
  height: 80vh;
}
.links li {
  font-size: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 1em 1em;
  margin: auto;
}
.links li a {
  color: #121212;

}
.links li a:hover {
  border-bottom: 2px solid black;
}
.social-icons {
  display: flex;
  height: 0vh;
  overflow: hidden;
}

.show-icons {
  height: 10vh;
  align-items: center;
  border-top: 2px solid black;
  overflow: visible;
}
.social-icons li {
  margin: auto;
  font-size: 1.5rem;
  transition: all 0.5s linear;
}

.social-icons li a {
  padding: 0.4em;
  color: black;
  transition: all 0.5s ease;
  border-radius: 50%;
}

.social-icons li a:hover {
  background: black;
  color: white;
}

.nav-toggle {
  font-size: 1.5rem;
  color: black;
  background: transparent;
  border-color: transparent;
  cursor: pointer;
  outline: none;
}
.nav-toggle:hover {
  color: black;
  transform: rotate(90deg);
  outline: none;
}

@media screen and (min-width: 800px) {
  .nav-toggle {
    display: none;
  }

  .nav-header {
    display: block;
  }

  .links {
    flex-direction: row;
    height: auto;
    display: flex;
  }
  .links li {
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 1em 1em;
    margin: auto;
  }
  .social-icons {
    display: flex;
    height: 100%;
    align-items: center;
    border: none;
    padding:1em;
  }

  .social-icons li {
    margin: auto;

    font-size: 1.2rem;
  }

  .nav-center {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  footer {
    display: none;
  }
}
nav{
    font-family:Arial;
}
.zz{
    padding:3% 2%;
}
.container
{
  text-align: center;
  padding: 15px;  
}


.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:2px 2px 2px 1px grey;
  outline: none;
}

.btn-7 {
background: rgb(216, 216, 216);
color:black;
  line-height: 42px;
  padding: 0;
  border: none;
}
.btn-7 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-7:before,
.btn-7:after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  background: grey;
  /* box-shadow:
   -7px -7px 20px 0px rgba(255,255,255,.9),
   -4px -4px 5px 0px rgba(255,255,255,.9),
   7px 7px 20px 0px rgba(0,0,0,.2),
   4px 4px 5px 0px rgba(0,0,0,.3); */
  transition: all 0.3s ease;
}
.btn-7:before{
   height: 0%;
   width: 2px;
}
.btn-7:after {
  width: 0%;
  height: 2px;
}
.btn-7:hover{
  color: red;
  background: transparent;
  box-shadow:0px;
}
.btn-7:hover:before {
  height: 100%;
}
.btn-7:hover:after {
  width: 100%;
}
.btn-7 span:before,
.btn-7 span:after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: grey;
  /* box-shadow:
   -7px -7px 20px 0px rgba(255,255,255,.9),
   -4px -4px 5px 0px rgba(255,255,255,.9),
   7px 7px 20px 0px rgba(0,0,0,.2),
   4px 4px 5px 0px rgba(0,0,0,.3); */
  transition: all 0.3s ease;
}
.btn-7 span:before {
  width: 2px;
  height: 0%;
}
.btn-7 span:after {
  height: 2px;
  width: 0%;
}
.btn-7 span:hover:before {
  height: 100%;
}
.btn-7 span:hover:after {
  width: 100%;
}


    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

<nav>
  <div class="nav-center">
    <!-- nav header -->
    <div class="nav-header">
      <img style="width:90px;height:80px;margin:0px;padding:0px;" src="img.png"  alt="logo" />
      <button class="nav-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- links -->
    <ul class="links">
      <li>
        <a href="index.php">home</a>
      </li>
      <li>
        <a href="covid.php">Covid-info</a>
      </li>
      <li>
        <a href="search.php">Search donors</a>
      </li>
      <li>
        <a href="donate-form.php">Volunteer</a>
      </li>
    </ul>
    <!-- social media -->
    <ul class="social-icons">
      <li>
        <a href="https://www.facebook.com/deveshsingh0110/">
          <i class="fab fa-facebook"></i>
        </a>
      </li>

      <li>
        <a href="https://www.linkedin.com/in/devesh-singh-a98a3a1b7/">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar ends -->

<br>
<div class="main_header">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <img src="doctor.png" width="450px" height="400px">
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-2">
      <br>
        <div class="rightside">
          <h2 style="font-family: 'Arvo', serif;">"Safety is the seam that joins the fabric of life.</h2><h2 style="font-family: 'Arvo', serif;">
          Don’t let a loose thread bring it all undone."</h2></center><center><br><span><img style="display:inline;" src="https://thumbs.gfycat.com/AjarFloweryJumpingbean-max-1mb.gif"><img  style="display:inline;"class="d-none d-lg-inline d-sm-none" src="https://thumbs.gfycat.com/AjarFloweryJumpingbean-max-1mb.gif"></span></center></h1><br>
          <center><a href="chatbot-1.html"><button style="display:inline;padding-bottom:30px;" class="custom-btn btn-7"><span>CHAT WITH US</i></span></button></a></center>
        </div>
    </div>
  </div>
</div>

<br><br>

<div class="main_header" style="background-color:white;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12 justify-content-center">
      <br><center>
          <h2 style="font-family: 'Arvo', serif;">COVID GUIDELINES</h2>
    </div></center>
    <div class="col-lg-12">

    <center>
    <div class="row">

    <div class="zz col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="glove.jpg" alt="Card image cap" style="height:274px;">  
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <h3 style="font-family: 'Rubik', sans-serif;">Wear Gloves whenever necessary</32>
        <!-- <p>50 KM Per Day</p>
        <p>2 litres free fuel</p>
        <p>All day roadside assistance</p>
        <button type="button" class="btn-outline-dark">Sign Up</button> -->
      </div>
      </div>
    </div>
    
    <div class="zz col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="mask.png" alt="Card image cap" style="height:274px;">
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <h3 style="font-family: 'Rubik', sans-serif;">Always wear masks to contain the spread of virus</h3>
        <!-- <p>Insured Trips</p>
        <p>Premium Sedans only</p>
        <p>*All features of A are inclusive</p>
        <button type="button" class="btn-outline-dark">Sign Up</button> -->

      </div>
      </div>
    </div>
    
    <div class="zz col-lg-4 col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="san.jpg" alt="Card image cap" style="height:274px;">
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <h3 style="font-family: 'Rubik', sans-serif;">Make use of alcohol based sanitizers to disinfect</h3>
        <!-- <p>Unlimited Kms</p>
        <p>10 litres free fuel</p>
        <p>*All features of A and B are inclusive</p>
        <button type="button" class="btn-outline-dark">Sign Up</button> -->
      </div>
      </div>
    </div>

    <div class="zz col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="sd.jpg" alt="Card image cap">
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <h3 style="font-family: 'Rubik', sans-serif;">Observe Social Distancing at public places</h3>
        <!-- <p>50 KM Per Day</p>
        <p>2 litres free fuel</p>
        <p>All day roadside assistance</p>
        <button type="button" class="btn-outline-dark">Sign Up</button> -->
      </div>
      </div>
    </div>
    
    <div class="zz col-lg-4 col-md-6">
    <!-- <div class="card">
      <div class="card-header">
        <h3>PLAN B</h3>
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <h2>Rs 50000 / mo</h2>
        <p>Insured Trips</p>
        <p>Premium Sedans only</p>
        <p>*All features of A are inclusive</p>
        <button type="button" class="btn-outline-dark">Sign Up</button>

      </div>
      </div> -->
      <center><img src="logo.png" style="width:400px;height:400px;"></center>
    </div>
    
    <div class="zz col-lg-4 col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="wash.jpg" alt="Card image cap" style="height:274px;">
      </div>
      <div class="card-body"  style="background-color:black;color:white;">
        <h3  style="font-family: 'Rubik', sans-serif;">Wash hands properly at regular intervals</h3>
        <!-- <p>Unlimited Kms</p>
        <p>10 litres free fuel</p>
        <p>*All features of A and B are inclusive</p>
        <button type="button" class="btn-outline-dark">Sign Up</button> -->
      </div>
      </div>
    </div>

</div>
</center> 

    </div>
  </div>
</div>
<div style="padding-bottom:20px;background-color:white">
</div>





<div class="main_header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12 justify-content-center">
      <br><center>
          <h2 style="font-family: 'Arvo', serif;">AVAILABLE VACCINES IN INDIA</h2>
    </div></center>
    <div class="col-lg-12">

    <center>
    <div class="row">

    <div class="zz col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="c1.jpg" alt="Card image cap" style="height:250px;background:lightgrey;">  
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <!-- <h2>Covishield</h2> -->
        <h6 style="font-family: 'Rubik', sans-serif;">Manufacturer:-Oxford-AstraZeneca</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Claimed Efficacy:- 60% - 80%</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Gap between doses:- 8 to 12 weeks</h6><br>
        <a href="https://www.mpnrc.org/covishield-vaccine-registration/"><button type="button" class="btn-outline-dark" style="color:white;border:1px solid lightgrey;padding-left:2px;padding-right:2px;border-radius:6px;">KNOW MORE</button></a>
      </div>
      </div>
    </div>
    
    <div class="zz col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="c2.jpg" alt="Card image cap" style="height:250px;">
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <!-- <h2>Covaxin</h2> -->
        <h6 style="font-family: 'Rubik', sans-serif;">Manufacturer:- Bharat Biotech</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Claimed Efficacy:- 81%</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Gap between doses:- 4 weeks</h6><br>
        <a href="https://en.wikipedia.org/wiki/Covaxin"><button type="button" class="btn-outline-dark" style="color:white;border:1px solid lightgrey;padding-left:2px;padding-right:2px;border-radius:6px;">KNOW MORE</button></a>

      </div>
      </div>
    </div>
    
    <div class="zz col-lg-4 col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
      <img class="card-img-top" src="c3.jpg" alt="Card image cap" style="height:250px;">
      </div>
      <div class="card-body" style="background-color:black;color:white;">
        <!-- <h2>Sputnik</h2> -->
        <h6 style="font-family: 'Rubik', sans-serif;">Manufacturer:- Russia</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Claimed Efficacy:- 91%</h6>
        <h6 style="font-family: 'Rubik', sans-serif;">Gap between doses:- 4 weeks</h6><br>
        <a href="https://en.wikipedia.org/wiki/Sputnik_V_COVID-19_vaccine"><button type="button" class="btn-outline-dark" style="color:white;border:1px solid lightgrey;padding-left:2px;padding-right:2px;border-radius:6px;">KNOW MORE</button></a>
      </div>
      </div>
    </div>
    </div>
   <br><br>
    <div class="card col-lg-12 col-md-12 col-12" style="background:lightgrey">
      <div class="card-header">
      <img class="card-img-top" src="symptom.jpg" alt="Card image cap" style="height:474px;">
        
      </div>
      </div><br><br>

</div>
</center> 

    </div>
  </div>
</div>






<br>

<br>


<div class="page-footer font-small blue pt-4" style="background-color:black;color:white">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase"><iframe width="360" height="215" src="https://www.youtube.com/embed/xcfpUdHw3gw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe></h5>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-50 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3" >

        <!-- Links -->
        <h4 class="text-uppercase">Links</h4><br>

        <ul class="list-unstyled">
        <li>
            <a href="search.php" style="font-size:20px;">Locate</a>
          </li>
          <li>
            <a href="covid.php" style="font-size:20px;">Other Info</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
          <h4><br></h4><br>
        <ul class="list-unstyled">
          <li>
          <a href="donate-form.php" style="font-size:20px;">Donate</a>
          </li>
          <li>
           <a href="index.php" style="font-size:20px;">Navigate to the top</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href=""> DEVESH SINGH</a>
  </div>
  <!-- Copyright -->

</div>







<script>
    const navToggle = document.querySelector(".nav-toggle");
const links = document.querySelector(".links");
const socialIcons = document.querySelector(".social-icons");

navToggle.addEventListener("click", function () {
  console.log(links.classList);
  links.classList.toggle("show-links");
  socialIcons.classList.toggle("show-icons");
});

</script>
</body>
</html>
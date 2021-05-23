<?php

$data=file_get_contents("https://api.covid19api.com/summary");
$coronadata=json_decode($data);
// echo "<pre>";
// print_r($coronadata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
    <style>
        /* table{
            border-box:
        } */
        h2{
            display:inline;
        }
        img{
            display: inline;
            height:100px;
            width:50px;
        }
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
  /*   align-items:center; */
  /*   justify-content: space-between; */
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
  transition: all 1s ease-in-out;
  height: 0;
  overflow: hidden;
}

.show-links {
  height: 80vh;
  transition: all 1s ease-in-out;
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

  transition: 0.1s border linear;
}
.links li a:hover {
  border-bottom: 4px solid black;
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
  transition: 1s all linear;
  cursor: pointer;
  justify-self: flex-end;
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

.container
{
  text-align: center;
  padding: 15px;  
}
.left-div
{
  display: inline-block;
  max-width: 800px;
  text-align: left;
  padding: 30px;
  background-color: #ddd;
  border-radius: 3px;
  vertical-align: top;
}
.right-div
{
  display: inline-block;
  max-width: 1500px;
  text-align: left;
  padding: 30px;
  background-color: #ddd;
  border-radius: 3px;
}
.left-text, .right-text
{
  font: 14px 'Source Code Pro', monospace;
	color: #333;
}
@media screen and (max-width: 600px) 
{
  .left-div, .right-div
    {
       max-width: 100%;
    }
}





#container {
  margin: 0 auto;
  max-width: 520px;
  text-align: center;
}

#container h1 {
  font-weight: normal;
  text-transform: uppercase;
  margin: 0.3em 0;
  background-color:lightgrey;
  position: relative;
  display: inline-block;
  padding: 0 10px;
}


.sty {
  font-family: "Oswald", sans-serif;
}


.sty:before {
  content: "";
  border-top: 4px solid black;
  position: absolute;
  width: 250%;
  top: 35%;
  left: -50%;
  z-index: -1000;
}

.sty:after {
  content: "";
  border-bottom: 4px solid black;
  position: absolute;
  width: 250%;
  bottom: 35%;
  left: -100%;
  z-index: -1000;
}

body{
  background-color: lightgrey;
  animation-name: example;
  animation-duration: 2s;
}

@keyframes example {
  from {background-color: white;}
  to {background-color: lightgrey;}
}


        
    </style>
</head>
<body onload="fetch()">
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
        <br><div id="container"><h1 class="sty d-sm-none d-md-block" style="font-family:KoHo;" >live data</h1></div>
        <!-- <div class="col-lg-6 col-sm-6">
          
            <h3>Tabular Representation of regularly updated data below-</h3>
        </div> -->
    <div class="table-responsive"><center>
        <table border="1" class="table-striped text-center" id="tbval" style="color:black;">
            <tr>
                <th style="background-color:yellow;">Country</th>
                <th style="background-color:coral;">Total Confirmed</th>
                <th style="background-color:coral;">New Confirmed</th>
                <th style="background-color:rgb(148, 221, 134);">New Recovered</th>
                <th style="background-color:rgb(148, 221, 134);">Total Recovered</th>
                <th style="background-color:rgb(233, 69, 69)">New Deaths</th>
                <th style="background-color:rgb(233, 69, 69);">Total Deaths</th>
                <th  style="background-color:orange">Last Updated</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table></center>
    </div>


  
<br>



  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href=""> DEVESH SINGH</a>
  </div>
  <!-- Copyright -->

</div>




    <script>
        function fetch(){
            $.get("https://api.covid19api.com/summary",
                function (data){
                    // console.log(data['Countries'].length)
                    var tbval=document.getElementById('tbval');
                    for(var i=1;i<(data['Countries'].length);i++){
                        var x=tbval.insertRow();
                        x.insertCell(0);
                        tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background='rgb(218, 219, 157';

                        x.insertCell(1);
                        tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background='rgb(241, 167, 139)';

                        x.insertCell(2);
                        tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['NewConfirmed'];
                        tbval.rows[i].cells[2].style.background='rgb(241, 167, 139)';

                        x.insertCell(3);
                        tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['NewRecovered'];
                        tbval.rows[i].cells[3].style.background='rgb(190, 240, 174)';

                        x.insertCell(4);
                        tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['TotalRecovered'];
                        tbval.rows[i].cells[4].style.background='rgb(190, 240, 174)';
                        
                        x.insertCell(5);  
                        tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewDeaths'];
                        tbval.rows[i].cells[5].style.background='rgb(216, 137, 137)';

                        x.insertCell(6);
                        tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['TotalDeaths'];
                        tbval.rows[i].cells[6].style.background='rgb(216, 137, 137)';

                        x.insertCell(7);
                        tbval.rows[i].cells[7].innerHTML= data['Countries'][i-1]['Date'];
                        tbval.rows[i].cells[7].style.background='rgb(226, 190, 123)';


                    }
                })
        }
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
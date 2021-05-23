<?php
    if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection error".mysqli_conect_error());
    }
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $blood=$_POST['bloodgroup'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $sql= "INSERT INTO `devesh`.`donor` ( `name`, `age`,`bloodgroup`, `gender`, `phone`, `address`) VALUES ('$name', '$age','$blood', '$gender', '$phone', '$address');";
    if($con->query($sql)==true){
        echo "Successfully Registered";
    }
    else{
        echo"Error: $sql <br> $con->error";
    }
    $con->close();
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Plasma</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
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
    </style>
 
</head>
<body style="background:coral" >
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
        <a href="search.php">Search Donors</a>
      </li>
      <li>
        <a href="donate-form.php">Volunteer</a>
      </li>
</ul>
  </div>
</nav><br><br>
    <div class="container" style="background:lightblue;">
        <h1><b style="font-family:Arial;">Donor Registration Form</b></h1><br>
        <h1 style="color:black;font-size:20px;">Enter your details and submit this form to get yourself registered for donating plasma for someone in need</h1><br>
        <form action="donate-form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <h6 style="float:left;"><b>Select your Blood Group appropriately, from the options given:-</b><select style="padding:5px;font-family:Arial;margin:5px;background-color:lightgrey;color:black;margin-left:5px;display:inline;" name="bloodgroup" id="bloodgroup" placeholder="Enter your gender">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            </select></h6>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea style="padding-bottom:30px;" name="address" id="address" cols="10" rows="5" placeholder="Add Address"></textarea><br>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <br><br>
    <center><h5>DEVESH SINGH</h5></center>
</body>
</html>
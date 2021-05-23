<!DOCTYPE html>
<html>
    <head>
        <title>Search Page-DEVESH SINGH</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            table,tr,th,td
            {
                border: 2px solid black;
            }
        </style>
    </head>
    <body style="background-image:url(donate.png);background-repeat:no-repeat;background-size:cover;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

  <div  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="color:black;">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active" style="color:black;">
        <a class="nav-link" href="search.php">Display Page</a>
      </li>
    </ul>
  </div>
</nav>

            <br><br>
            <center><h3 style="padding-bottom:50px;">Enter Blood Group for which you require Donor</h3></center><br>
        <center><form action="" method="post">
            <input type="text" name="bloodgroup" placeholder="Enter Blood Group" style="padding-left:40px;border:2px solid black;margin-bottom:10px;padding-right:20px;"><br><br>
            <input type="submit" name="search" value="Search" style="border-radius:100px;background:lightblue;padding-left:20px;padding-right:20px;color:black;"><br><br>         
        </form></center>
    </body>
    <br><br><h4><center>List of available volunteers of the above blood-group displayed after searching:-</center></h4>
    <center> 
<?php
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    $flag="no";
    if(isset($_POST['search'])){
        $blood=$_POST['bloodgroup'];
        $query = "SELECT * FROM devesh.donor WHERE bloodgroup='$blood' ";
        $query_run=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($query_run))
        {
            $flag="yes";
            ?>
            <table><center>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr></center>
            
                <center>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                </tr></center>
            </table><br>
            <?php
  
        } 
        if($flag!="yes"){
            echo"<br>";
            echo"<center>";
            echo"<h4>";
            echo"Sorry, there are no volunteers available for the above blood group. Try Again next time";
            echo"</h4>";
            echo"</center>";
        }
    }
    ?>
    </html>
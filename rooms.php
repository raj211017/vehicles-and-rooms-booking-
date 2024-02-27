<!DOCTYPE HTML>
<html>
<head>
<title>Hotels rooms booking</title>
<link rel="stylesheet" href="roomscss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="nav">
<div id="img1">
<img src="img1.png"><i onclick="myFunction()"  class="fa fa-bars" id="catr">Category</i> 
<div id="myDropdown" class="dropdown-content">
  <a href="vehicle.html" class="fa fa-car">Rent Vehicle</a>
  <a href="rooms.html" class="fa fa-building">Book Hotels</a>

</div>
</div>
<div id="navc">
<a href="home.html">
<button  class="fa fa-home"> Home</button></a>  <button  onclick="opencontactForm()"  class="fa fa-envelope-o"> Contact</button> <button onclick="openloginForm()" class="fa fa-user"> Login</button>
</div>
</div>
<div id="middle">
<div id="bodypart">
<h1>BOOK HOTELS</h1>
<div id="location">
SEARCH HOTELS<br><br>
<form action="rooms.php" method="post">
<i class='fa fa-map-marker' style='font-size:22px'>Location </i><input type="text" placeholder="city" name="city">
<button type="submit"><i class='fa fa-search' style='font-size:17px'>search</i></button>
</form>
</div>
</div><br>
<div id="body2">
<?php
$search=$_POST['city'];
$conn=mysqli_connect('localhost','root','','rvdata');
$sql="SELECT * FROM hotesldata WHERE city='$search'";
$query=mysqli_query($conn,$sql);
$nrow=mysqli_num_rows($query);
if ( $nrow> 0)
    {
    for($i=1;$i<=$nrow;$i++)
     {
    
        $row = mysqli_fetch_assoc($query);
       
        ?>
<table>
<tr>
<td><img src="<?php echo $row['Image'];?>"></td>
</tr>
<?php
        }
    } 
    else {
        echo "Data Not found";
    }
  
?>
</table>
</div>
</div>
<hr>
<div id="buttom">
  
  <div id="table1">
  <table>
    <tr>
      <th>Hotels service in City</th><th>Vehicles service in City</th><th>Active Links</th><th>Booking Service</th><th style="width: 20px;"></th><th>About</th>
    </tr>
    <tr>
<td>Chandigarh</td><td>Chandigarh</td><td id="actv">Category</td><td>Any Vehicles</td><td style="width: 20px;"></td><td style="width: 600px;" rowspan="5">Travel Elite was develped by 4 team members in 2023.This website was develped to solve the problems of travels ,here customers get service of vehicles to move and hotesl to stay.<br><img src="img1.png"></td>
    </tr>
    <tr>
      <td>Delhi</td><td>Delhi</td><td><a id="actv" type="button" onclick="opencontactForm()">Contact</a></td><td>Rooms AC/non-AC</td>
    </tr>
    <tr>
      <td>Patna</td><td>Patna</td><td><a id="actv" type="button" onclick="openloginForm()">Login</a></td>
    </tr>
    <tr>
      <td>Shimla</td><td>Shimla</td><td><a id="actv" href="rooms.html">Book Hotel</a></td>
    </tr>
    <tr>
      <td></td><td></td><td><a id="actv" href="vehicle.html">Rent Vehicles</a></td>
    </tr>
    <tr>
      <td></td><td></td>
    </tr>
  </table>
</div>
<br>
<div id="team">
  <div id="teamimg"><img src="tmimg1.jpg"></div>
  <div id="teamimg"><img src="tmimg2.jpg"></div>
  <div id="teamimg"><img src="tmimg3.jpg"></div>
  <div id="teamimg"><img src="tmimg4.jpg"></div>
</div>
</div>
<div id="btmlogo"><img src="img1.png"><br>@Devloped TRAVEL ELITE in 2023 India</div>






<div class="form-popup" id="mycontForm">
  <form action="Rvbooking.html" class="form-container">

    <h1>Contact</h1>
    <b>Full Name</b>
    <input type="text" placeholder="Name" name="psw" required>
    <b>Email</b>
    <input type="text" placeholder="Enter Email" name="email" required>
    <b>Message</b>
    <input type="text" placeholder="Type something" name="psw" required>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>



<div class="form-popup2" id="myloginForm">
<div id="loginbackground" class="loginform">
  <form action="login.php" method="post">
<span onclick="document.getElementById('myloginForm').style.display='none'" class="close" title="Close">&times;</span>
  <div class="imgcontainer">
    <img src="img2.png" class="avatar">
  </div>
<br>
  <div class="lgcontainer">
    <label for="uname"><b>Username</b></label>
    <input class="dinput" type="text" placeholder="Enter Username" name="uname" required>
 
    <label for="psw"><b>Password</b></label>
    <input class="dinput" type="password" placeholder="Enter Password" name="psw" required>
     <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>   
    <button type="submit" name="submit" class="loginbtn">Login</button>
    <p>New User <a href="registerform.php">Create Account</a></p><hr>
    <button type="button" class="cancelbtn" onclick="closeloginForm()">Cancel</button>
    
  </div>
</form>
</div></div>

<script src="home.js"></script>

</body>
</html>

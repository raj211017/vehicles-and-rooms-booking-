<!DOCTYPE HTML>
<html>
    <head>
        <title>signup form</title>
        <style>
            body{background-color: blueviolet;}

            #content{
            margin:auto;
        height:800px;
    width:700px;
background-color: rgb(255, 254, 253);
box-shadow: 0px 8px 16px 0px black;
border-radius: 10px;
border-style:solid;
}
#heading{
   background-color: rgb(144, 215, 230);
text-align: center;
border-bottom:solid;
padding:7px;
border-radius: 10px 10px 0px 0px;

}
h1{
width:300px;
text-align:center;
margin:auto;
}
#form{width:600px;
margin:auto;
margin-top:40px;
}
#form p1{font-size: 25px;}
#form input{width:600px;
height:40px;
border-radius: 5px;
border-style: none;
background: #dfdede;}
#button input{width:600px;
    height:50px;
    padding:6px;
font-size: 15px;
font-family:Verdana, Geneva, Tahoma, sans-serif;
float:right;
border-style:none;
cursor: pointer;
background-color:rgb(25, 221, 48);}
#button input:hover{background-color:rgb(23, 152, 49);}
#btext{text-align:center;
font-size: 17px;}
 </style>
</head>
<body>
    <div id="content">
        <div id="heading">
    <h1>Sign up Form</h1>
    <a1>Please fill in this form to create an account.</a1><br><p1>*Fill details correctly.*</p1>
        </div>
        <div id="form">
        <form action="registerform.php" method="post">
        <p1>Full Name :</p1><br><input required name="firstname"><br>
        <p1>Middle Name :</p1><br><input  name="middletname"><br>
        <p1>Last Name :</p1><br><input required name="lastname"><br>
        <p1>Phone No. :</p1><br><input required name="phone"><br>
        <p1>Email ID :</p1><br><input required name="email" type="email"><br>
        <p1>User Name :</p1><br><input required name="username"><br>
        <p1>Password :</p1><br><input required name="password" type="password"><br><hr>
        <div id="button">
        <br><br><input type="submit" name="submit" value="Sign up" ></input>
</div>
        </form>
        <hr>
        <div id="btext">
        <a1 >Already have account <a href="home0.html">login</a></a1>
    </div>
    </div> 
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['firstname'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','','rvdata');
$query="insert into logindata
(Name,UserName,Password)
values('$name','$username','$password')";
mysqli_query($conn,$query);
echo '<script>
    alert(" you have Successfully registered...");
    </script>';
    mysqli_close($conn);
}
else
?>

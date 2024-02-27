
<?php
 $username=$_POST['uname'];
 $password=$_POST['psw'];

$conn=mysqli_connect('localhost','root','','rvdata');
$selectquery="select *from logindata ";
$query=mysqli_query($conn,$selectquery);



while($res=mysqli_fetch_array($query))
{
    if($username==$res['UserName'] && $password==$res['Password'])
    {  
         header ("location:loginedhome.html");
          exit();
    }  
}
    header("location:home0.html");
    exit();
?>

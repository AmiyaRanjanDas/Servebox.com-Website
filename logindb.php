<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn)
// {
//     die("<h2>connection Failed </h2>".mysqli_connect_error());
// }
// else
// {
//     echo("<h2>Connection sucessful</h2>");
//     echo"<br>";
// }
    $n=$_POST["AS"];
    $Email =$_POST["Email"];
    $Password =$_POST["Password"]; 
    if($n=="clint")
    {
        $sql="select * from project1table1 where  Email='$Email' and Password= '$Password'";
        $res= mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count == 1)
        {  
            $pass=mysqli_fetch_assoc($res);
            $_SESSION['username']=$pass['Firstname'];
            echo "<h1><center>You Login Sucessfully<center><h1>";      
            echo "<h3><a href='index.php'><center>go to home<center></a></h3>"; 
        }  
        else
        {  
            echo "<h1> <center>Login failed. Invalid username or password.<center></h1>";  
            echo "<h3><a href='loginas.html'><center>go back<center></a></h3>";
        }
    }
    else if($n=="plumber")
    {
        $sql1="select * from project1table2 where  Email='$Email' and Password= '$Password'";
        $res1= mysqli_query($conn,$sql1);
        $count1 = mysqli_num_rows($res1);
        if($count1 == 1)
        {  
            $pass=mysqli_fetch_assoc($res1);
            $_SESSION['username']=$pass['Firstname'];
            echo "<h1><center>You Login Sucessfully<center><h1>";      
            echo "<h3><a href='index.php'><center>go to home<center></a></h3>"; 
        }  
        else
        {  
            echo "<h1> <center>Login failed. Invalid username or password.<center></h1>";  
            echo "<h3><a href='loginas.html'><center>go back<center></a></h3";
        }
    }    
    else if($n=="electrician")
        {
        $sql2="select * from project1table3 where  Email='$Email' and Password= '$Password'";
        $res2= mysqli_query($conn,$sql2);
        $count2 = mysqli_num_rows($res2);
        if($count2 == 1)
        {  
            $pass=mysqli_fetch_assoc($res2);
            $_SESSION['username']=$pass['Firstname'];
            echo "<h1><center>You Login Sucessfully<center><h1>";      
            echo "<h3><a href='index.php'><center>go to home<center></a></h3>"; 
        }  
        else
        {  
            echo "<h1> <center>Login failed. Invalid username or password.<center></h1>";  
            echo "<h3><a href='loginas.html'><center>go back<center></a></h3>";      
        }
    }    
    else if($n=="mechanics")
    {
        $sql3="select * from project1table4 where  Email='$Email' and Password= '$Password'";
        $res3= mysqli_query($conn,$sql3);
        $count3 = mysqli_num_rows($res3);
        if($count3 == 1)
        {  
            $pass=mysqli_fetch_assoc($res3);
            $_SESSION['username']=$pass['Firstname'];
            echo "<h1><center>You Login Sucessfully<center><h1>";      
            echo "<h3><a href='index.php'><center>go to home<center></a></h3>";   
        }  
        else
        {  
            echo "<h1> <center>Login failed. Invalid username or password.<center></h1>";  
            echo "<h3><a href='loginas.html'><center>go back<center></a></h3>";
        }
    }            
mysqli_close($conn);
?>
</head>
<body>
</body>
</html>

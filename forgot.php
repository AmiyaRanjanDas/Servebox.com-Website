<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="database1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
{
    die("<h2>connection Failed </h2>".mysqli_connect_error());
}
else
{
    echo("<h2>Connection sucessful</h2>");
    echo"<br>";
}
    
    $n=$_POST["AS"];
    $Email=$_POST["Email"];
    $MobileNo=$_POST["MobileNo"];
    if($n=="electrician")
    {
        $sql1="select MobileNo from project1table1 where  Email='$Email'";
        $res1= mysqli_query($conn,$sql1);
        echo "$res1";
        if($sql1==$MobileNo)
        {
            echo "1";
            $sql2="select * from project1table1 where  Email='$Email'";
            echo ["$Password"];        
        }
    }    
    //     $res= mysqli_query($conn,$sql);
        
    //     if($count == 1)
    //     {  
    //         echo "<h1>Connection sucessful<h1>";      
    //         echo "<a href='index.html'>go back</a>";    
    //     }  
    //     else
    //     {  
    //         echo "<h1> Login failed. Invalid username or password.</h1>";  
    //         echo "<a href='loginas.html'>go back</a>";
    //     }
    // }
    // else if($n=="plumber")
    // {
    //     $sql1="select * from project1table2 where  Email='$Email' and Password= '$Password'";
    //     $res1= mysqli_query($conn,$sql1);
    //     $count1 = mysqli_num_rows($res1);
    //     if($count1 == 1)
    //     {  
    //         echo "<h1>Connection sucessful<h1>";      
    //         echo "<a href='index.html'>go back</a>";    
    //     }  
    //     else
    //     {  
    //         echo "<h1> Login failed. Invalid username or password.</h1>";  
    //         echo "<a href='loginas.html'>go back</a>";
    //     }
    // }    
    // else if($n=="electrician")
    //     {
    //     $sql2="select * from project1table3 where  Email='$Email' and Password= '$Password'";
    //     $res2= mysqli_query($conn,$sql2);
    //     $count2 = mysqli_num_rows($res2);
    //     if($count2 == 1)
    //     {  
    //         echo "<h1>Connection sucessful<h1>";      
    //         echo "<a href='index.html'>go back</a>";    
    //     }  
    //     else
    //     {  
    //         echo "<h1> Login failed. Invalid username or password.</h1>";  
    //         echo "<a href='loginas.html'>go back</a>";
    //     }
    // }    
    // else if($n=="mechanics")
    // {
    //     $sql="select * from project1table4 where  Email='$Email' and Password= '$Password'";
    //     $res= mysqli_query($conn,$sql);
    //     $count = mysqli_num_rows($res);
    //     if($count == 1)
    //     {  
    //         echo "<h1>Connection sucessful<h1>";      
    //         echo "<a href='index.html'>go back</a>";    
    //     }  
    //     else
    //     {  
    //         echo "<h1> Login failed. Invalid username or password.</h1>";  
    //         echo "<a href='loginas.html'>go back</a>";
    //     }
    // }          
    
    ?>
</body>
</html>
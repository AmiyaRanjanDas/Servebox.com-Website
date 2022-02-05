<!DOCTYPE html>
<html lang="en">
<head>

<title>Document</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">List of all Plumbers in Your Area</h1>
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
    $n=$_POST["district"];
    $sql="select * from project1table2 where location='$n'";
    $res= mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
    ?>
    <table style=" border-collapse: collapse;background-color:rgba(0,0,0,0.3);border-radius: 10px;margin: auto;" >
    <tr>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Firstname</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Lastname</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Email</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">location</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">MobileNO</th>
    </tr>  
    <?php
    $item=0;
    while($item = mysqli_fetch_array($res))
    {  
    ?>  
        <tr>
            <td style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["Firstname"]; ?></td>
            <td style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["Lastname"]; ?></td>
            <td style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["Email"]; ?></td>
            <td style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["location"]; ?></td>
            <td style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["MobileNo"]; ?></td>
        </tr>      
    <?php                  
    }
    }
    else
    {
        echo "<h2><center>NO Plumber Exist in Your District<br>Better you find in your Nearer Districts<br>Thanks a lot</center></h2>";
    } 
mysqli_close($conn);
?> 
</div>
</body>
</html>







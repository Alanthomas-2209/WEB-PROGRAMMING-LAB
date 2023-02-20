<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color:#457832;
        }
        .table {
            background:#456778;
        }
    </style>
</head>
<body>
</body>
</html>
<?php
    $conn=mysqli_connect('localhost','root','','pizza');
    if($conn){
        echo "connected";
    }
    else{
        echo "not connected";
    }
    if(isset($_POST['btn1'])){
        $sql = " SELECT * FROM customers ";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<div class='table1'>";
            echo "<center><table border=1px>";
            echo " <tr><th>Booking iD</th><th>Name</th><th>Address</th><th>Type of delivery</th><th>Pizza Size</th><th>Additional Toppings</th></tr>";
            foreach($result as $row){
                echo "<tr><td>".$row['book_id']."</td><td>".$row['Name']."</td><td>".$row['Address']."</td><td>".$row['type']."</td><td>".$row['Size']."</td><td>".$row['toppings']."</td></tr>";
            }
            echo "</center></table>";
            echo "</div>";
        }
    }
?>
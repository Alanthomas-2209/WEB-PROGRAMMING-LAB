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
            display:flex;
            align:center;
            gap:5px;
            flex-direction:column;
        }
        .table {
            background-color:#123345;
        }
        .chrages {
            display:flex;
            align:center;
            gap:5px;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="charges">
<table border=2px>
        <tr><th>delivery type</th><th>charge</th></tr>
        <tr><td>home</td><td>50</td></tr>
        <tr><td>takeaway</td><td>10</td></tr>
    </table>
    <table border=2px>
        <tr><th>pizza size</th><th>charge</th></tr>
        <tr><td>small</td><td>130</td></tr>
        <tr><td>medium</td><td>180</td></tr>
        <tr><td>large</td><td>240</td></tr>
    </table>
    <table border=2px>
        <tr><th>addtional toppings</th><th>charge</th></tr>
        <tr><td>pepper</td><td>10</td></tr>
        <tr><td>chilli</td><td>12</td></tr>
        <tr><td>sause</td><td>15</td></tr>
        <tr><td>sweet corn</td><td>15</td></tr>
    </table>
    </div>
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
    $sql= " SELECT * FROM customers ";
    if(isset($_POST['btn2'])){
        
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<h1>bill amount</h1>";
            echo "<div class='table1'>";
            echo "<center><table border=1px>";
            echo " <tr><th>Booking iD</th><th>Name</th><th>Address</th><th>Type of delivery</th><th>Pizza Size</th><th>Additional Toppings</th></tr>";
            foreach($result as $row){
                echo "<tr><td>".$row['book_id']."</td><td>".$row['	Name']."</td><td>".$row['Address']."</td><td>".$row['type']."</td><td>".$row['Size']."</td><td>".$row['toppings']."</td></tr>";
            }
            echo "</center></table>";
            echo "</div>";
        }
    }
?>
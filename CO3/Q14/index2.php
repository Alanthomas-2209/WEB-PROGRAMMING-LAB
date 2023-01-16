<?php
    $localhost = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'student';

    $conn = mysqli_connect($localhost, $username, $pass, $db);
    // if($conn){
    //     echo "success";
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resukt</title>
</head>
<style>
    table{
    border : 2px solid black;
    border-radius : 2px;
}
td{
    border : 2px solid black;
}
</style>
<body>
<?php
$sql = "SELECT * FROM `studentname` WHERE 1";
    $result = mysqli_query($conn, $sql);

    echo "<table><tr><th>Name</th></tr>";
    while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row['Name']."</td>"."<td>".$row['Jersey']."</td></tr>";
    }
    echo "</table>";
?>
</body>
</html>
<?php
    $localhost = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'student';
    $conn = mysqli_connect($localhost, $username, $pass, $db);
// if($conn){
//     echo "connected" ;
// }
// else{
// echo "not connected";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student details</title>
</head>
<style>
/* table{
border : 2px solid black;
border-radius : 2px;
visibility: hidden;
}
td{
    border : 2px solid black;
} */
.container{
    display:flex;
    justify-content: center;
    margin-top: 40vh;
}
</style>
<body>
    <div class="container">
    <form method="post">
        Enter the name:<br>
        <input type="text" name="Name"><br>
        <input type="submit" value="submit" name="sub">
        <button><a href="/C05/index2.php">View</a></button>
    </form>
</div>
<?php
$arr = array();
if (isset($_POST['sub'])) {
    $student = $_POST['name'];
    // array_push($arr, $player);
    // foreach ($arr as $elm)
    //     echo $elm;
    // print_r($arr);
    $sql = "insert into studentname values('$student')";
    $result = mysqli_query($conn, $sql);
    }
?>
</body>
</html>
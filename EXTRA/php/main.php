<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$db = 'student';
$conn = mysqli_connect($localhost,$username,$password,$db);

if(isset($_POST['submit'])){
    $name=$_POST['text1'];
    $age =$_POST['text2'];
    $course = $_POST['text3'];

    if($conn){
        $sql1 = "insert into student(name,age,course) values('$name','$age','$course')";
        mysqli_query($conn,$sql1);
    }
}


// $var = 10;
// echo "Hello  Nigga";
?>
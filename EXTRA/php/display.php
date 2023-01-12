<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'student';

    $conn = mysqli_connect($localhost,$username,$password,$db);

    if(isset($_POST['sub'])){
        if($conn){
            $sql = "select * from student";
            $data = mysqli_query($conn,$sql);
            if(mysqli_num_row($data) > 0)
            {
                while($row = mysqli_fetch_assoc($data)){
                    echo "name :".$row['name']."age :".$row['age']."course :".$row['course']."<br>";
                }
            }
            else{

            }
        }
    }
?>
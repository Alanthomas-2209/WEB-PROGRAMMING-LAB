<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color : blue;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php
    $link = mysqli_connect('localhost','root','','test');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $dept = $_POST['department'];

        $query = "INSERT INTO patient(Name,Department)
        VALUES('$name','$dept')";
        if(mysqli_query($link,$query)){
            echo "<h1>records inserted</h1>";
        }
        else{
            echo "Error: ".mysqli_error($link);
        }

        $fetch_query = "SELECT * FROM patient";
        if($result = mysqli_query($link,$fetch_query)){
            if (mysqli_num_rows($result)>0){
                echo "<table><tr><th>name</th><th>department</th></tr>";
                while($row= mysqli_fetch_array($result)){
                    echo "<tr><td>".$row['Name']."</td>";
                    echo "<td>".$row['Department']."</td></tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            }
        }
        else{
            echo "Error: $sql".mysqli_error($link);
        }
    }
    
    mysqli_close($link);
?>
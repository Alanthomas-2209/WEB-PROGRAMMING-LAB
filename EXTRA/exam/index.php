<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#345678;
        }
        .main {
            display:flex;
            flex-direction:column;
            justify-content:space-evenly;
            align-item:center;
            background-color:#ff0078;
        }
        .form-cont {
            display:flex;
            flex-direction:column;
            justify-content:space-evenly;
            align-item:center;
            padding:3px;
        }
        .input-cont{
            padding:3px;
        }
        h2 {
            font-size:2rem;
            align:center;
        }
        a {
            text-decoration:none;
            display:none;
        }
        .button {
            display:flex;
            gap:1px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h2>Pizza Hut</h2>
        <div class="form-cont">
            <form  action="result.php"  method="POST" onsubmit="return validate()">
            <div class="input-cont">
                <label for="Name">Name:</label><input type="text" name="Name" id="Name" required/>
            </div>
            <div class="input-cont">
                <label for="Adress">Address:</label><input type="text" name="Address" id="Address" required/>
            </div>
            <div class="input-cont">
                <label for="delivery1">Type of delivery:</label>
                <input type="radio" name="delivery" id="delivery1" value="home"/>home delivery
                <input type="radio" name="delivery" id="delivery2" value="takeaway"/>take away
            </div>
            <div class="input-cont">
                <label for="size">Pizza Size:</label><select name="Size" id="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
            <div class="input-cont">
                <label for="pepper">Additional Toppings:</label>
                <input type="checkbox" name="toppings" id="pepper" value="pepper" />pepper
                <input type="checkbox" name="toppings" id="chilli" value="chilli" />chilli
                <input type="checkbox" name="toppings" id="sause" value="sause" />sause
                <input type="checkbox" name="toppings" id="scorn" value="scorn" />sweet corn
            </div>
            <div class="button">
            <div class="input-cont">
                <input type="submit" value="Submit" name="btn" />
            </div>
            
                <button value="view" name="btn1" id="btn1" onclick="checker()">view</button>
                <button value="view1" name="btn1" id="btn2" onclick="go()">Bill</button>
            
            </div>
            <a href="result.php" id="link">View</a>
            <a href="bill.php" id="link1">View</a>
            </form>
        </div>
    </div>
    <script>
        let btn=document.getElementById('btn1');
        let a=document.getElementById('link');
        function checker(){
            a.click();
        }
        let btn2=document.getElementById('btn2');
        let a1=document.getElementById('link1');
        function go(){
            a1.click();
        }
        function validate(){
            return true;
        }
    </script>
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
    if(isset($_POST['btn'])){
        $Name=$_POST['Name'];
        $Address=$_POST['Address'];
        $delivery=$_POST['delivery'];
        $Size=$_POST['Size'];
        $toppings=$_POST['toppings'];
        // echo "$toppings";
        // echo "$Size";
        // echo "$delivery";
        // echo "$Address";
        // echo "$Name";
        $sql = " INSERT INTO customers(Name, Address, type, Size, toppings) VALUES ('$Name','$Address','$delivery','$Size','$toppings') ";
        
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "data inserted";
        }
        else{
            echo "not inserted";
        }
    }
?>
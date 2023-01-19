<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #99c7c3;
            display: flex;
        }
        .table{
            margin-top: 13rem;
            margin-left: 26%;
            /* padding: 1rem; */
            border: 2px solid black;
            background-color: #f5f0c2;
            width: 50%;
        }
        td{
            padding: 1rem;
        }
        .names{
            font-weight: bold;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    $reqname = $_POST['reqname'];
    $conn = mysqli_connect('localhost','root','','test');
    $sql = "select * from employee where name='$reqname'";
    $result = mysqli_query($conn,$sql);
    if(isset($_POST['newsub'])){
    // <link rel="stylesheet" href="style.css">
    echo "<div class='table'><center><h3>Details of the Employee</h3></center>";
    echo "<center><table >";
    if($sql){
    foreach($result as $row)
        echo "<tr><td class='names'>Employee ID:</td><td>".$row['emp_id']."</td></tr>";
        echo "<tr><td class='names'>Name:</td><td>".$row['name']."</td></tr>";
        echo "<tr><td class='names'>Job Name:</td><td>".$row['job']."</td></tr>";
        echo "<tr><td class='names'>Manager ID:</td><td>".$row['manager']."</td></tr>";
        echo "<tr><td class='names'>Salary:</td><td>".$row['salary']."</td></tr>";
    }
    else{
        echo "Name is not found in the database";
    } 
    }echo "</table></center></div>";
?>
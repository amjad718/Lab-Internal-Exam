<?php
    $conn = mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    span{
        color: red;
    }
    body{
        display: flex;
        background: #b9ffb9;
    }
    .container{
        border: 2px solid black;
        margin-left: 36rem;
        margin-top: 13rem;
        padding: 1rem;
        background-color: #d0ffff;
    }
    .item{
        padding: 0.5rem;
    }
    h3{
        text-align: center;
    }
    button a{
        text-decoration: none;
        color: black;
    }
    button{
        width:49%;
    }
    #sub{
        width:49%;
    }
    #sub:hover{
        cursor: pointer;
    }
</style>
</head>
<body>
    <form method="post" onsubmit="return validation()">
    <div class="container">
        <h3>Employee Details</h3>
        <div class="item">
            <b>ID:</b> <input type="text" name="emp_id" id="id">
            <span id="spanid"></span>
        </div>
        <div class="item">
            <b>Name:</b> <input type="text" name="name" id="name">
            <span id="spanname"></span>
        </div>
        <div class="item">
            <b>Job:</b> <select name="job" id="job">
                <option value="Select" selected>Select</option>
                <option value="Accountant">Accountant</option>
                <option value="Sales">Sales</option>
                <option value="Clerk">Clerk</option>
            </select>
            <span id="spanjob"></span>
        </div>
        <div class="item">
            <b>Manager ID:</b> <input type="text" name="manager" id="manager"> 
            <span id="spanmanager"></span>
        </div>
        <div class="item">
            <b>Salary:</b> <input type="text" name="salary" id="salary">
            <span id="spansalary"></span>
        </div>
        <input type="submit" value="Submit" name="sub" id="sub">
    
    </form>
    <button><a href=/webexam/test.php> View </a></button>
    </div>


<!-- JS Starts Here -->
<script>
let id = document.getElementById("id");
let name = document.getElementById("name");
let job = document.getElementById("job");
let manager = document.getElementById("manager");
let salary = document.getElementById("salary");
let btn = document.getElementById("sub")

flag = true;
function validation(){
    if(id.value.length==0 || id.value.match("[A-z a-z !@#$%^&*()]")){
        alert("Please enter a valid id");
        return false;
    }
    if(name.value.length==0 || name.value.match("[0-9 !@#$%^&*()]")){
        alert( "Please enter a valid name");
        return false;
    }
    if(job.value=='Select'){
        alert("Please select a valid job");
        return false;
    }
    if(manager.value.length == 0){
        alert("Please input a valid manager ID");
        return false;
    }
    if(salary.value.length==0 || salary.value.match("[A-z a-z !@#$%^&*()]")){
        alert("Please enter a valid salary");
        return false;
    }
return true;
}   
<?php
    if(isset($_POST['sub'])){
        $id=$_POST['emp_id'];
        $name=$_POST['name'];
        $job = $_POST['job'];
        $manager = $_POST['manager'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO employee(emp_id,name,job,manager,salary) VALUES ('$id','$name','$job','$manager','$salary')";
        $result = mysqli_query($conn,$sql);
    }
?>
</script>
</body>
</html>
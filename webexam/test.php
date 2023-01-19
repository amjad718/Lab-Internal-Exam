<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        background: #ffbea7;
    }
    .container{
        border: 2px solid black;
        margin-left: 36rem;
        margin-top: 16rem;
        padding: 1rem;
        background: #ffdde8;
    }
    .item{
        padding:0.5rem;
    }
    #sub:hover{
        cursor: pointer;
    }
</style>
<body>
    <div class="container">
        <h3>Enter the name to fetch the details:</h3>
    <form method="post" action="details.php">
    <center>
    <div class="item">
    <input type="text" name="reqname"><br>
    </div>
    <div class="item">
    <input type="submit" name="newsub" id="sub">
    </div>
    </center>
    </form>
    </div>
</body>
</html>

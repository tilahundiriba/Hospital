<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style/userLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
}

.header {
    background-color: rgba(1, 1, 1, 1);
    height: 70px;
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 0px;
  color: aquamarine;
    padding-left: 20px;


}



.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 65%;
    margin: 20px;
    text-decoration: none;
}

.linkers:hover {
    text-decoration: wavy;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}

h3 {
    color: aquamarine;
    position: relative;
    left: 370px;
    font-size: 30px;
}
        .div1 {
            display: flex;
            flex-direction: column;
        }
        i{
            color: white;
        }
        .forphp{
    display: none;
    border-radius: 20px;
    padding: 20px;
    position: absolute;
    left: 950px;
    width: 350px;
    height: 400px;
  background-color: whitesmoke;
    color: black;
    top: 150px;
    font-size: 15px;
}
.both22{
    height: 650px;
    width: 900px;
    background-color: rgba(1, 1, 1, 0.2);
    position: absolute;
  left: 0px;
}
.result{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: seagreen;
    color: white;
    left: 1050px;
}
.clear{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: darkorange;
    color: white;
    /* left: 1100px;  */
    left: 100px;
    top: 350px;
}
.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 65%;
    margin: 20px;
    text-decoration: none;
}
.header {
    background-color: rgba(1, 1, 1, 1);
    height: 70px;
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 0px;
    
    padding-left: 20px;


}
i{
    margin-right: 10px;
}
h4{
    color: firebrick;
    font-size: 30px;
    position: relative;
    left: 70px;
}
    </style>
</head>

<body>
<div class="header">

   
<a href="homepage.html" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
<a href="displayForDoctors.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW</a>
<a href="labratory.php" class="linkers"><i class="fa fa-trash-o" style="font-size:24px"></i>DELETE</a>
</div>
<div class="forphp" id="divForPhp">
  
  <?php
 echo" <h4>Lab Required </h4>";
 echo "<b>Patient Code:</b>  ". $_SESSION['pcode']."<br>" ;
 echo"<b>Start day:</b>  ". $_SESSION['startday']."<br>" ;
 echo"<b>Syptom:</b>  ". $_SESSION['syptom']."<br>" ;
 echo "<b>Test:</b>  ".$_SESSION['test'] ."<br>";
 echo"<b>How long:</b>  ". $_SESSION['howlong'] ."<br>";
 echo "<b>Test Type:</b>  ".$_SESSION['testtype']."<br>";
 echo "<b>Other info: </b> ".$_SESSION['txtview'];
  ?>
  <button onclick="document.getElementById('divForPhp').style.display='none'" class="clear">Clear</button>
  </div>
  <button onclick="document.getElementById('divForPhp').style.display='block'" class="result">Lab Required</button>
    <form class="" id="form" method="post">
        <div class="divlogin">
           
            <div class="div1">
                <label for="username" class="labal">Username </label>
                <span><i class="fa fa-envelope-o" style="font-size:24px"></i>
                    <input type="text" name="username" class="input" placeholder="User name" id="username">
                </span>
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="password" class="labal">Password </label>
                <span><i class="fa fa-lock" style="font-size:24px"></i>
                    <input type="password" name="password" class="input" placeholder="password" id="password">
                </span>
                <div class="error"></div>
            </div>
            <button name="submit" class="btnlogin">Login</button>
            <input type="reset" class="btncansel" value="Cansel">
        </div>
    </form>

    <?php
if(isset($_POST['submit'])){

    $_SESSION['username']= $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}


?>
</body>


</html>
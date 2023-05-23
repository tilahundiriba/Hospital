<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $servername ="localhost";
        $username = "root";
        $password = "";
        $database_name = "HMS"; 
        $conn = new mysqli($servername , $username,  $password, $database_name);
         
        if($conn -> connect_error){
            die("ERROR: Could not connect. "
                . $conn -> connect_error);
        }
        if(isset($_POST['insert'])){
$pcode = $_POST['cardNo'];
$itemid = $_POST['itemid'];
$sprice = $_POST['amount'];
$bprice = $_POST['price'];
$ndays = $_POST['noday'];
$rno = $_POST['roomno'];
$accpname = $_POST['nameacceptor'];


$sql = "INSERT into BILLTABLE(cardNo,itemid,amount,price,noday,roomno,nameacceptor)
values('$pcode','$itemid','$sprice','$bprice','$ndays','$rno','$accpname')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;
}
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
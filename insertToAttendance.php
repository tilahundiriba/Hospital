<!DOCTYPE html>
<html>
 
<head>
    <title>Insert  page</title>
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
       
        if(isset($_GET['submit'])){
$staffCode = $_GET['staffCode'];
$date = $_GET['date'];
$mark = $_GET['mark'];
$perm = $_GET['perm'];
$reason = $_GET['reason'];


$sql = "INSERT into ATTENDANCE(empid,date,mark,permission,reason)
values('$staffCode','$date','$mark','$perm','$reason')";

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
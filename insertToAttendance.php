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
//
$staffcode2 = $_GET['staffcode2'];
$date2 = $_GET['date2'];
$mark2 = $_GET['mark2'];
$perm2 = $_GET['perm2'];
$reason2 = $_GET['reason2'];

$sql2 ="UPDATE ATTENDANCE SET date='$date2',mark='$mark2',
permission='$perm2', reason='$reason2' WHERE empid='$staffcode2'";

$sql = "INSERT into ATTENDANCE(empid,date,mark,permission,reason)
values('$staffCode','$date','$mark','$perm','$reason')";

if($conn->query($sql)===TRUE){
  echo '<script>alert("INSERTED CORRECTLY")</script>' ;}
 else{
  echo '<script>alert("not INSERTED succesfully")</script>' ;

}

if($conn->query($sql2)===TRUE){
    echo '<script>alert("UPDATED CORRECTLY")</script>' ;}
   else{
    echo '<script>alert("not UPDATED succesfully")</script>' ;
  }
}
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
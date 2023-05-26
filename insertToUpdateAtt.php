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
//
$staffcode2 = $_GET['staffcode2'];
$date2 = $_GET['date2'];
$mark2 = $_GET['mark2'];
$perm2 = $_GET['perm2'];
$reason2 = $_GET['reason2'];

$sql2 ="UPDATE ATTENDANCE SET date='$date2',mark='$mark2',
permission='$perm2', reason='$reason2' WHERE empid='$staffcode2'";

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
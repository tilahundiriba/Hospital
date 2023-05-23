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
        $database_name = "hms"; 
        $conn = new mysqli($servername , $username,  $password, $database_name);
         
        if($conn -> connect_error){
            die("ERROR: Could not connect. "
                . $conn -> connect_error);
        }
        if(isset($_POST['submit'])){
            $pcode = $_POST['pateintCode'];
            $pname = $_POST['Pateintname'];
$date = $_POST['date'];
$age = $_POST['age'];
$disease = $_POST['disease'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$City = $_POST['City'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$Allocatedoctor = $_POST['Allocatedoctor'];

$sql = "INSERT into PATEINT(pateintCode,pname,dbrith,age,disease,email,gender,bgroup,city,paddress,contact,allname)
values('$pcode','$pname','$date','$age','$disease','$email','$gender','$bloodgroup','$City','$address','$contact','$Allocatedoctor')";

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
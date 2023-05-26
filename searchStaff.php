<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display search staff</title>
    <style>
table, th, td {
    border: 2px solid green;
  color:blue;


}
table{
    position: relative;
    left: 250px;
}
</style>
</head>
<body>

<?php 
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="HMS";
$conn=new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);
if(isset($_POST['search'])){
    if( $conn->connect_error ) {
       die('Could not connect: ' .  $conn->connect_error );
    }
    else{    
       $emp_Id = $_POST['empId'];

$sql="select empId,firstname,middlename,phone,stffaddress,proffession,salary from employee WHERE empId ='$emp_Id'";
$result=$conn->query($sql);
if($result->num_rows>0){
echo "<table><tr><th>EMP_ID</th><th>EMP_FIRST_NAME</th><th>EMP_MIDDLE_NAME</th>
<th>PHONE</th><th>ADDRESS</th><th>PROFFESSION</th><th>SALARY</th></tr>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["empId"]."</td><td>".$row["firstname"]."</td>
    <td>".$row["middlename"]."</td><td>".$row["phone"]."</td>
    <td>".$row["stffaddress"]."</td><td>".$row["proffession"]."</td><td>".$row["salary"]."</td></tr>";
}
}
echo "</table>";

}}
$conn->close();

?>  
</body>
</html>

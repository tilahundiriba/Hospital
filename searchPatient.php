<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
       $pateintCode = $_POST['empId'];

$sql="select pateintCode,pname,disease,email,paddress,contact,allname from PATEINTS WHERE pateintCode='$pateintCode'";
$result=$conn->query($sql);
if($result->num_rows>0){
echo "<table><tr><th>PATIENT ID</th><th>PATIENT NAME</th><th>DISEASE</th><th>EMAIL</th><th>ADDRESS</th><th>CONTACT</th><th>ALLOCATOR NAME</th></tr>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["pateintCode"]."</td><td>".$row["pname"]."</td><td>".$row["disease"]."</td><td>".$row["email"]."</td>
    <td>".$row["paddress"]."</td><td>".$row["contact"]."</td><td>".$row["allname"]."</td></tr>";
}
}
echo "</table>";

}}
$conn->close();

?>  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display bill</title>
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
if($conn->connect_error){
    die("connection field".$conn->connect_error);
}
$sql="select *from billtable";
$result=$conn->query($sql);
if($result->num_rows>0){


    //
    echo "<h2>Staff Information View</h2>";
echo "<table><tr><th>PATIENT_ID</th><th>ITEM_ID</th><th>AMOUT</th><th>PRICE</th>
<th>N_DAYS</th><th>TOTAL</th><th>ROOM_NO</th><th>ACC_NAME</th><th>REG_DATE</th>";

while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["cardNo"]."</td><td>".$row["itemid"]."</td><td>".$row["amount"]."</td>
    <td>".$row["price"]."</td><td>".$row["noday"]
    ."</td><td>".$row["total"]."</td><td>".$row["roomno"]."</td><td>".$row["nameacceptor"]."</td>
    <td>".$row["reg_date"]."</td></tr>";

}
echo "</table>";

}else{
    echo "0 result";
}
$conn->close();

?>  
</body>
</html>


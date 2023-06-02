<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Staff Page </title>
  <link rel="stylesheet" href="style/staff.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <form name="myForm" id="form" method="post">
    <div class="header">

    
      <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
      <a href="staffregister.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
    </div>
    <div class=" empInfo22">
      <h3> Update Employee Information</h3>
      <div class="half22">
        <div class="diverror">
          <label for="id" class="label">Employee Id</label>
          <input type="text" name="empId" class="input" placeholder="Employee Id" id="id">
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="age" class="label">Age</label>
          <input type="number" name="age" class="input" placeholder="Age" id="age">
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="phone" class="label">Phone</label>
          <input type="text" name="phone" class="input" placeholder="xx-xxxx-xxxx" id="phone">
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="country" class="label">Country</label>
          <select name="country" class="input" id="country">
            <option value="Ethiopia">Ethiopia</option>
            <option value="Sudan">Sudan</option>
            <option value="Kenya">Kenya</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="Pakstan">Pakstan</option>
          </select>
          <div class="error"></div>
        </div>
      </div>
      <div class="half2">
        <div class="diverror">
          <label for="address" class="label">Address</label>
          <input type="text" name="address" class="input" placeholder="Address" id="address">
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="date" class="label">Date</label>
          <input type="date" name="date" class="input" id="date">
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="proff" class="label">Proffession</label>
          <select name="proffession" class="input" id="proff">

            <option value="Doctor">Doctor</option>
            <option value="Nurse">Nurse</option>
            <option value="Pharamasist">Pharamasist</option>
            <option value="Labortarist">Labortarist</option>
            <option value="Radiographer">Radiographer</option>
            <option value="Dentist">Dentist</option>
          </select>
          <div class="error"></div>
        </div>
        <div class="diverror">
          <label for="salary" class="label">Salary</label>
          <input type="number" name="salary" class="input" placeholder="Salary" id="salary">
          <div class="error"></div>
        </div>
      </div>
      <div class="btndiv22">
        <input type="submit" value="Save" class="btnsave"  name="update">
        <input type="reset" value="Clear" class="btnsave">
      </div>
    </div>

  </form>


  <?php
if (isset($_POST['update'])) {

    $empId = $_POST['empId'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $proffession = $_POST['proffession']; 
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $sql ="UPDATE employee SET age='$age',country='$country',reg_date='$date',stffaddress='$address',
    	phone='$phone',proffession='$proffession',salary='$salary' WHERE empId='$empId'";
             if ($conn->query($sql) === TRUE) {
                echo '<script>alert("UPDATED CORRECTLY")</script>';
                ?>
                <script type="text/javascript"> 
                     window.location="updateStaff.php";
                 </script>
                <?php
 } else {
                 echo '<script>alert("NOT UPDATED SUCCESSFULLY")</script>';
                 ?>
                 <script type="text/javascript"> 
                      window.location="updateStaff.php";
                  </script>
                 <?php
             }

}


?>
  <!-- <script type="text/javascript" src="javascript/validateUpdateStaff.js"></script> -->
</body>

</html>
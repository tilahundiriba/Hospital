<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pateint Updatev Page</title>
    <link rel="stylesheet" href="style/updatePateint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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

.header:hover {
    background-color: rgba(1, 1, 1, 1);
}

.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 80%;
    margin: 20px;
    text-decoration: none;
}
i{
    margin-right: 10px;
}
    </style>

</head>

<body>
    <form name="myForm" id="form" method="post">


        <div class="header">

          
       
            <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
            <a href="PatientReg.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK</a>
           <i class="fa fa-angle-double-left" style="font-size:24px"></i>

        </div>
        <div class="forboth">
            <h3>Pateint Data Update </h3>
            <div class="empInfo" id="storeinfo">
                <div class="div1">
                    <label for="pateintCode" class="label">Pateint code</label>
                    <input type="text" name="pateintCode" id="pateintCode" class="input" placeholder="Pateint code">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="age" class="label">Age </label>
                    <input type="number" name="age" class="input" id="age" placeholder="Age of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="disease" class="label">Disease </label>
                    <input type="text" name="disease" class="input" id="disease" placeholder="Disease of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="appdate" class="label">Appointment date </label>
                    <input type="date" name="appdate" class="input" id="appdate" placeholder="Appointment date">
                    <div class="error"></div>
                </div>
            </div>

            <div class="empAdd" id="storempAdd">


                

                <div class="div1">
                    <label for="address" class="label">Address</label>
                    <input type="text" name="address" class="input" id="address" placeholder="Pateint Address" autocomplete="name">
                    <div class="error"></div>
                </div>
                <div class="div1">
                    <label for="city" class="label">City</label>
                    <input type="text" name="City" class="input" id="city" placeholder="Pateint City">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="contact" class="label">Contact No </label>
                    <input type="text" name="contact" class="input" id="contact" placeholder="xx-xxxx-xxxx">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="alldoctor" class="label">Allocate Doctor </label>
                    <input type="text" name="Alldoctor" class="input" id="alldoctor"
                        placeholder="Allocate doctor ">
                    <div class="error"></div>
                </div>

            </div>

            <div class="btnclass" id="btnclass">
                <input type="submit" name="submit" class="save" value="Save" >
                <input type="reset" name="reset" class="save" value="Cansel">

            </div>

        </div>

    </form>

    <?php
if (isset($_POST['submit'])) {

    $pateintCode = $_POST['pateintCode'];
    $disease = $_POST['disease'];
    $appdate = $_POST['appdate'];
    $address = $_POST['address'];
    $City = $_POST['City'];
    $contact = $_POST['contact'];
    $Alldoctor = $_POST['Alldoctor']; 
    $age = $_POST['age'];
    $sql ="UPDATE PATEINTS SET age='$age',disease='$disease',city='$City',paddress='$address',
    contact='$contact',allname='$Alldoctor', reg_date='$appdate' WHERE pateintCode='$pateintCode'";
             if ($conn->query($sql) === TRUE) {
                echo '<script>alert("UPDATED CORRECTLY")</script>';
                ?>
                <script type="text/javascript"> 
                     window.location="updatePateint.php";
                 </script>
                <?php
 } else {
                 echo '<script>alert("NOT UPDATED SUCCESSFULLY")</script>';
                 ?>
                 <script type="text/javascript"> 
                      window.location="updatePateint.php";
                  </script>
                 <?php
             }

}


?>
    <!-- <script type="text/javascript" src="javascript/validateUpdatePatein.js"></script> -->
</body>





</html>
<?php
SESSION_START();

if(isset($_POST['update'])){
    
    $_SESSION['pcode']=$_POST['pcode'];
     $_SESSION['startday']= $_POST['startday'];
     $_SESSION['syptom']= $_POST['syptom'];
     $_SESSION['test']= $_POST['reason'];
     $_SESSION['howlong']= $_POST['howlong'];
     $_SESSION['test'] = $_POST['reason'];
     $_SESSION['testtype'] = $_POST['testtype'];
     $_SESSION['txtview'] = $_POST['txtview'];
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Page</title>
    <link rel="stylesheet" href="style/updatedoctor.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .empInfo22 {   
    background-color: rgba(1, 1, 1, 0.4);
    transform: 0.5;
    width: 350px;
    display: flex;
    align-items: center;
    flex-direction: column;
    left: 50px;
    border-radius: 5px;
    position: absolute;
    top: 60px;
    height: 430px;
    margin: 20px;
    padding-top: 10px;

}

.empInfo22:hover {
    background-color: rgba(1, 1, 1, 0.6);
}

.empAdd22 {
    background-color: rgba(1, 1, 1, 0.4);
    /* padding: 30px; */
    padding-top: 30px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 5px;

    width: 350px;
    top: 80px;
    /* display: flex;
    flex-direction: column; */
    left: 450px;
    align-items: center;
    position: absolute;
    height: 400px;
}

.empAdd22:hover {
    background-color: rgba(1, 1, 1, 0.6);
}



.btnclass22 {
    position: absolute;

    height: 60px;
    width: 600px;
    top: 550px;
    left: 300px;
}

.input {
    width: 270px;
    border-radius: 2px;
    height: 30px;
    margin-top: 10px;
    /* background-color: rgba(1, 1, 1, 0.2); */
}

.input:hover {
    background-color: white;
}

.save22 {
    width: 150px;
    margin-left: 30px;
    margin-right: 30px;
    padding: 15px;
    border-bottom-color: red;
    border-top-color: green;
    background-color: rgba(1, 1, 1, 0.2);
    color: #FFF748;
    border-radius: 10px;
    font-size: large;
}

.save22:hover {
    color: black;
    background-color: white;
}


.body22 {


    background-image: url("style/images/doctors.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.label {
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #FFF748;

    left: -30px;
}


* {
    margin: 0px;
    padding: 0px;
}

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
    left: 65%;
    margin: 20px;
    text-decoration: none;
}

.linkers:hover {
    text-decoration: wavy;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}

h3 {
    color: aquamarine;
    position: relative;
    left: 370px;
    font-size: 30px;
}

p {
    padding-left: 20px;
    padding-right: 20px;
    gap: 20px;
}

.staf {
    display: flex;
    flex-direction: column;
}

.sex {
    position: relative;
    display: flex;
    flex-direction:row;
    margin: 20px;

}

.error {
    color: red;
}

.rad {
    margin: 10px;
}
.both22{
    height: 650px;
    width: 1100px;
    background-color: rgba(1, 1, 1, 0.2);
    position: absolute;
    left: 150px;
}
    .linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 65%;
    margin: 20px;
    text-decoration: none;
}
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
i{
    margin-right: 10px;
}
.forphp{
    display: none;
    border-radius: 20px;
    padding: 20px;
    position: absolute;
    left: 950px;
    width: 350px;
    height: 400px;
  background-color: whitesmoke;
    color: black;
    top: 150px;
    font-size: 15px;
}
.both22{
    height: 650px;
    width: 900px;
    background-color: rgba(1, 1, 1, 0.2);
    position: absolute;
  left: 0px;
}
.result{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: seagreen;
    color: white;
    left: 1050px;
}
.clear{
    margin-top: 30px;
    position: absolute;
    width: 150px;
    height: 30px;
    background-color: darkorange;
    color: white;
    /* left: 1100px;  */
    left: 100px;
    top: 350px;
}
h4{
    position: relative;
    left: 70px;
    color: firebrick;
    font-size: 30px;
}
</style>

</head>

<body class="body22">
  
    <div class="header">

   
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="displayForDoctors.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW</a>
    </div>
    <div class="forphp" id="divForPhp">
  
    <?php

   echo" <h4>Lab Report </h4>";
    echo "<b>patient_id:</b>  ".$_SESSION['patient_id']."<br>" ;
    echo "<b>Patient blood:</b> ".$_SESSION['blood'] ."<br>" ;
    echo "<b>Patient urine:</b>  ".$_SESSION['urine']."<br>" ;
    echo "<b>Patient x_ray:</b> ".$_SESSION['x_ray'] ."<br>" ;
    echo "<b>Patient txtview:</b> ".$_SESSION['txtview'];

    ?>
    <button onclick="document.getElementById('divForPhp').style.display='none'" class="clear">Clear</button>
    </div>
    <button onclick="document.getElementById('divForPhp').style.display='block'" class="result">Lab Report</button>
    <form id="form" method="post">
        <div class="both22">
            <h3> Update pateint Information</h3>
            <div class="empInfo22">

                <div class="staf">
                    <label for="pateintCode" class="label">patient id</label>
                    <input type="text" name="pcode" class="input" placeholder="pateintCode" id="pateintCode">
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="startDay" class="label">Start Day</label>
                    <input type="date" name="startday" class="input" placeholder="start date" id="startDay">
                    <div class="error"></div>
                </div>
                <div class="staf">
                    <label for="Symptom" class="label">Symptom</label>
                    <input type="text" name="syptom" class="input" placeholder="Disease Symptom" id="Symptom">
                    <div class="error"></div>
                </div>
                <div class="staf">
                    <label for="reason" class="label">Reason </label>
                    <input type="text" name="reason" class="input" placeholder="how long" id="reason">
                    <div class="error"></div>
                </div>
                <div class="staf">
                    <label for="howlong" class="label">How long </label>
                    <input type="number" name="howlong" class="input" placeholder="how long" id="howlong">
                    <div class="error"></div>
                </div>

            </div>

            <div class=" empAdd22">

                <div class="staf">
                    <label for="yes" class="label">Required test</label>
                    <div class="sex" id="requiredtest">
                        <input type="radio" name="test" value="yes" class="rad" id="yes">
                        <label for="yes" class="label">Yes</label>
                        <input type="radio" name="test" value="no" class="rad" id="no">
                        <label for="no" class="label">No</label>
                    </div>
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="blood" class="label">Test type</label>
                    <div class="sex" id="testtype">
                        <input type="radio" name="testtype" value="blood" class="rad" id="blood">
                        <label for="blood" class="label">Blood</label>
                        <input type="radio" name="testtype" value="urine" class="rad" id="urine">
                        <label for="urine" class="label">Urine</label>
                        <input type="radio" name="testtype" value="x-ray" class="rad" id="x-ray">
                        <label for="x-ray" class="label">X-ray</label>
                    </div>
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="txtview" class="label">Other Information</label>
                    <textarea id="txtview" name="txtview" rows="8" cols="30" class="input"></textarea>
                    <div class="error"></div>
                </div>
            </div>
            <div class="btnclass22">
                <input type="submit" name="update" value="save" class="save22">
                <input type="reset" name="reset" value="cancel" class="save22">
              


            </div>

        </div>
    </form>
    <script type="text/javascript" src=".../javascript/validateUpdateDoctor.js">
    </script>
</body>


</html>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "HMS"; 
        $conn = new mysqli($servername , $username,  $password, $database_name);
         
        if ($conn->connect_error) {
            die("ERROR: Could not connect. " . $conn->connect_error);
        }
        
        if (isset($_POST['submit'])) {
            $startDay = $_POST['startDay'];
            $symptom = $_POST['Syptom'];
            $reason = $_POST['reason'];
            $howlong = $_POST['howlong'];
            $test = $_POST['test'];
            $testtype = $_POST['testtype'];
            $txtview = $_POST['txtview'];
            $pcode = $_POST['pateintCode'];
            
            $sql = "UPDATE PATIENTS SET start_day='$startDay', symptom='$symptom',
                    reason='$reason', how_long='$howlong', test='$test',
                    test_type='$testtype', txt_view='$txtview' WHERE pateintCode='$pcode'";
            
            if ($conn->query($sql) === TRUE) {
               echo '<script>alert("UPDATED CORRECTLY")</script>';
            } else {
                echo '<script>alert("NOT UPDATED SUCCESSFULLY")</script>';
            }
        }
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
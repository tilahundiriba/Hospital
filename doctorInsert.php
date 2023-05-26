
         <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "HMS"; 
        $conn = new mysqli($servername , $username,  $password, $database_name);
         
        if ($conn->connect_error) {
            die("ERROR: Could not connect. " . $conn->connect_error);
        }
        
        if (isset($_POST['update'])) {
            $pcode = $_POST['pcode'];
            $startDay = $_POST['startday'];
            $symptom = $_POST['syptom'];
            $reason = $_POST['reason'];
            $howlong = $_POST['howlong'];
            $test = $_POST['test'];
            $testtype = $_POST['testtype'];
            $txtview = $_POST['txtview'];

           
            
            $sql ="UPDATE PATEINTS SET start_day='$startDay',symptom='$symptom',
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

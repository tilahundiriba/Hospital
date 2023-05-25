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

</style>

</head>

<body class="body22">
    <div class="header">

      
        <a href="homepage.html" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="#" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW</a>
        <a href="#" class="linkers"><i class="fa fa-trash-o" style="font-size:24px"></i>DELETE</a>
    </div>
    <form id="form" name="myForm" action="doctorInsert.php" method="post">
        <div class="both22">
            <h3> Update pateint Information</h3>
            <div class="empInfo22">

                <div class="staf">
                    <label for="pateintid" class="label">patient id</label>
                    <input type="text" name="pateintCode" class="input" placeholder="pateintCode" id="pateintCode">
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="startDay" class="label">Start Day</label>
                    <input type="date" name="startDay" class="input" placeholder="start date" id="startDay">
                    <div class="error"></div>
                </div>
                <div class="staf">
                    <label for="Symptom" class="label">Symptom</label>
                    <input type="text" name="Syptom" class="input" placeholder="Disease Symptom" id="Symptom">
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
                    <label for="requiredtest" class="label">Required test</label>
                    <div class="sex">
                        <input type="radio" name="test" value="yes" class="rad" id="yes">
                        <label for="Yes" class="label">Yes</label>
                        <input type="radio" name="test" value="no" class="rad" id="no">
                        <label for="No" class="label">No</label>
                    </div>
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="testtype" class="label">Test type</label>
                    <div class="sex">
                        <input type="radio" name="testtype" value="blood" class="rad" id="blood">
                        <label for="blood" class="label">Blood</label>
                        <input type="radio" name="testtype" value="urine" class="rad" id="urine">
                        <label for="urine" class="label">Urine</label>
                    </div>
                    <div class="error"></div>
                </div>

                <div class="staf">
                    <label for="other" class="label">Other Information</label>
                    <textarea id="txtview" name="txtview" rows="8" cols="30"></textarea>
                    <div class="error"></div>
                </div>
            </div>
            <div class="btnclass22">
                <input type="submit" name="submit" value="save" class="save22">
                <input type="reset" name="reset" value="cancel" class="save22">


            </div>

        </div>
    </form>
    <script type="text/javascript" src="javascript/validateUpdateDoctor.js">
    </script>
</body>


</html>
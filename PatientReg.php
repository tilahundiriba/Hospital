<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pateint Registration Page</title>
    <link rel="stylesheet" href="style/pateint.css">
 

</head>

<body>

    <div class="header">

        <a href="services.html" class="linkers">Services</a>
        <a href="#" class="linkers">ITEMS </a>
        <a href="homepage.html" class="linkers">HOME</a>
        <a href="login.html" class="linkers">BACK</a>
        <a href="updatePateint.html" class="linkers">Update</a>
      
    </div>
    <form name="myForm" id="form" action="insert.php" method="post">


        <div class="forboth" id="id02">
            <h3>Pateint Registration Form</h3>
            <div class="empInfo" id="storeinfo">
                <div class="div2">
                    <label for="pateintCode" class="label">Pateint code</label>
                    <input type="text" name="pateintCode" id="pateintCode" class="input" placeholder="Pateint code">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="pname" class="label">Pateint Name</label>
                    <input type="text" name="Pateintname" class="input" id="pateintName" placeholder="Pateint name">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="date" class="label">Date of brith</label>
                    <input type="date" name="date" class="input" id="dbrith" placeholder="Date of brith">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="age" class="label">Age </label>
                    <input type="number" name="age" class="input" id="age" placeholder="Age of pateint">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="disease" class="label">Disease </label>
                    <input type="text" name="disease" class="input" id="disease" placeholder="disease of pateint">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="bloodgroup" class="label">Blood Group </label>
                    <input type="text" name="bloodgroup" class="input" id="bloodgroup"
                        placeholder="blood group of pateint">
                    <div class="error"></div>
                </div>
            </div>

            <div class="empAdd" id="storempAdd">
                <div class="div2">
                    <label for="gender" class="label">Gender</label>
                    <select name="gender" class="input" id="gender">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Other">Other</option>

                    </select>
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="address" class="label">Address</label>
                    <input type="text" name="address" class="input" id="address" placeholder=" Pateint Address">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="City" class="label">City</label>
                    <input type="text" name="City" class="input" id="city" placeholder=" Pateint City">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="email" class="label">Email Address </label>
                    <input type="email" name="email" class="input" id="email" placeholder=" Email address">
                    <div class="error"></div>
                </div>
                <div class="div2">
                    <label for="contact" class="label">Contact No </label>
                    <input type="text" name="contact" class="input" id="contact" placeholder="xx-xxxx-xxxx ">
                    <div class="error"></div>
                </div>

                <div class="div2">
                    <label for="Allocate doctor" class="label">Allocate Doctor </label>
                    <input type="text" name="Allocatedoctor" class="input" id="alldoctor"
                        placeholder="Allocate doctor ">
                    <div class="error"></div>
                </div>

            </div>

            <div class="btnclass" id="btnclass">

                <input type="submit" name="submit" class="save" value="Save">
                <input type="reset" name="reset" class="save" value="Cansel">


            </div>

        </div>

    </form>
    <script type="text/javascript" src="validatePateint.js"></script>
</body>


    

</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        form{
           display: flex;
           flex-direction:column;

        }
        .empInfo{
            background-color:red;
           width: 400px;
        }
        .empAdd{
            background-color:green;
            width: 400px;
            
        }
        .japp{
            background-color:yellow;
            width: 400px;
        }
    </style>
</head>
<body>
    <form>

    <h2>WELCOME TO REGISTRATION PAGE</h2>
    <div class="empInfo">
    <legend>Employee Information
    
    <p>Frist Name <input type="text" name="fname"></p>
    <p>Middle Name <input type="text" name="mname"></p>
    <p>Last Name <input type="text" name="lname"></p>
    <p>Date Brith <input type="text" name="dbrith"></p>
    <p>Age <input type="text" name="age"></p>
    <p>Gender <input type="radio" name="male" value="Male">
    <label for="male">Male</label>
    <input type="radio" name="female" value="Female">
    <label for="female">Female</label></p>
    <p>Registration Date<input type="text" name="lname"></p>
    </legend>
    </div>
    <div class="empAdd">
    <legend>Employee Address
    <p>Phone Number <input type="text" name="phone"></p>
    <p>Email<input type="text" name="email"></p>
    <p>Country<input type="text" name="country"></p>
    <p>Region <input type="text" name="region"></p>
    <p>Address <input type="text" name="address"></p>
    
    </legend>
    </div>
    <div class="japp">
    <legend>Job Application
    <p>Employee ID <input type="text" name="id"></p>
    <p>Password <input type="password" name="password"></p>
    <p>Job Type <select name="proffession" id="proffession">

<option value="doctor">Doctor</option>
<option value="nurse">Nurse</option>
<option value="pharamasist">Pharamasist</option>
<option value="labortarist">Labortarist</option>
 <option value="radiographer">Radiographer</option>
  <option value="dentist">Dentist</option>
</select></p></p>
    <p>Payment <input type="text" name="payment"></p>
    </legend>
    </div>
    <p><button name="submit">Save</button>
    <button name="reset">New</button></p>


    </form>
</body>
</html>
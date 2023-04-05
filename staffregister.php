<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="staff.css">
    <style>
      
        
    </style>

</head>
<body>
    <form>
<fieldset class="fieldone">
 <legend><h2>WELCOME TO REGISTRATION PAGE</h2></legend>
    <div class="empInfo">

  <h3> Employee Information</h3> 


    <label for="fname" class="label">First Name</label> 
    <input type="text" name="fname" class="input">
    <label for="mname" class="label">Middle Name</label>
    <input type="text" name="mname" class="input">
    <label for="lname" class="label">Last Name</label>
     <input type="text" name="lname" class="input">
    <label for="dbrith" class="label">Date of brith</label>
     <input type="text" name="dbrith" class="input">
    <label for="age" class="label">Age</label>
    <input type="text" name="age" class="input">
    <p>
    <label for="Gender" class="label">Gender</label>
     <input type="radio" name="male" value="Male" class="rad">
    <label for="male" class="label">Male</label>
    <input type="radio" name="female" value="Female" class="rad">
    <label for="female" class="label">Female</label></p>


   

    </div>
    
    <div class="empAdd">

    <h3>Employee Address</h3>
    <label for="phone" class="label">Phone</label> 
    <input type="text" name="phone" class="input">
    <label for="email" class="label">Email</label>
    <input type="text" name="email"  class="input">
    <label for="country" class="label">Country</label>
    <input type="text" name="country"  class="input">
    <label for="region" class="label">Region</label> 
    <input type="text" name="region"  class="input">
    <label for="address" class="label">Address</label>
     <input type="text" name="address"  class="input">

    
    </div>

    <div class="japp">

   <h3>Job Application</h3> 
    <label for="id" class="label">Employee Id</label>
    <input type="text" name="id"  class="input">
    <label for="Password" class="label">Password</label>
     <input type="password" name="password"  class="input">
    <label for="proffession" class="label">Proffession</label> 
    <select name="proffession" id="proffession" class="job">

<option value="doctor">Doctor</option>
<option value="nurse">Nurse</option>
<option value="pharamasist">Pharamasist</option>
<option value="labortarist">Labortarist</option>
 <option value="radiographer">Radiographer</option>
  <option value="dentist">Dentist</option>
</select>
    <label for="payment" class="label">Payment</label>
    <input type="text" name="payment"  class="input">


    </div>
    <div class="btnclass">
    <button name="submit" class="save">Save</button>
    <button name="reset" class="save">New</button>
    <button name="reset" class="save">Back</button>
   
    
   
    </div>

    </fieldset>
    </form>
</body>
</html>

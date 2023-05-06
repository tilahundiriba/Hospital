<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- <link rel="stylesheet" href="staff.css"> -->
    <style>
.empInfo{
    background-color: rgba(1,1,1,0.4);
    transform: 0.5;
    width: 350px;
    display: flex;
    align-items: center;
    flex-direction: column;
  left: 100px;
 border-radius: 40px;
  position: absolute;
  top: 60px;
  height: 450px;
  margin:20px;
  padding-top: 10px;

}
.empInfo:hover{
    background-color: rgba(1,1,1,0.6);
}

.empAdd{
    background-color: rgba(1,1,1,0.4);
    padding-top: 10px;
    border-radius: 40px;

    width: 350px;
    top: 80px;
    display: flex;
    flex-direction: column;
    left: 550px;
  align-items: center;
  position: absolute;
  height: 450px;
}
.empAdd:hover{
    background-color: rgba(1,1,1,0.6);
}
.japp{
    border-radius: 40px;
    align-items: center;
    background-color: rgba(1,1,1,0.4);
    width: 350px;
    display: flex;
    flex-direction: column;
    left: 950px;
    top: 80px;
  padding-top: 30px;
  position: absolute;
  height: 450px;
}
.japp:hover{
    background-color: rgba(1,1,1,0.6);
}
.btnclass{
    position: absolute;

    height: 60px;
    width: 600px;
top: 570px;
left: 300px;
}
.input{
width: 250px;
border-radius: 10px;
height: 30px;
margin-top: 10px;
background-color: rgba(1,1,1,0.2);
}
.input:hover{
    background-color: white;
}
.save{
    width: 150px;
    margin-left: 30px;
    margin-right: 30px;
padding: 15px;
border-bottom-color: red;
border-top-color: green;
background-color: rgba(1,1,1,0.2);
color: #FFF748;
border-radius: 10px;
font-size: large;
}
.save:hover{
color: black;
background-color: white;
}
.fieldone{
top: 0px;
width: 1300px;
height: 600px;
border: solid black;

background-size: cover;
background-position: center;
background-attachment: fixed;

}
body{

    background-color: #b3b3ff;
    background-image: url("images/doctors.jpg");
background-repeat: no-repeat;
background-size: cover;
}
.label{
font-size: 20px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
color: #FFF748;

left: -30px;
}
h3{
color: black;
font-size: 30px;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.job{
background-color: rgba(1,1,1,0.2);
color: #FFF748;
width: 200px;
border-radius: 10px;
height: 30px;
}
*{
    margin: 0px;
    padding: 0px;
}
.header{
    background-color: rgba(1, 1, 1,0.5);
    height: 70px;
    width: 100%;
  display: flex;
  flex-direction: row;
  margin-top: 0px;
  margin-left: 0px;
  border-radius: 10px;
  padding-left: 20px;


}
.header:hover{
    background-color: rgba(1, 1, 1,1);
}

  .linkers{
 position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
     left: 75%;
    margin: 20px;
    text-decoration: none;
}
.linkers:hover{
    text-decoration: wavy;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}
h3{
    color: aquamarine;
    position:relative;

}
p{
  padding-left: 20px;
  padding-right: 20px;
  gap: 20px;
}

    </style>

</head>
<body>
<div class="header">

   <a href="#" class="linkers">Other</a>
     <a href="homepage.php" class="linkers">Home</a>


        </div>
    <form id="form" name="myForm">




    <div class="empInfo">

  <h3> Employee Information</h3>


    <label for="fname" class="label">First Name</label>
    <input type="text" name="fname" class="input" placeholder="first name" id="fname">
    <label for="mname" class="label">Middle Name</label>
    <input type="text" name="mname" class="input" placeholder="middle name" id="mname">
    <label for="lname" class="label">Last Name</label>
     <input type="text" name="lname" class="input" placeholder="last name" id="lname">
    <label for="dbrith" class="label">Date of brith</label>
     <input type="date" name="dbrith" class="input" placeholder="date of brith" id="dbrith">
    <label for="age" class="label">Age</label>
    <input type="number" name="age" class="input" placeholder="age" id="age">

    <label for="Gender" class="label">Gender</label>
    <p>


     <input type="radio" name="gender" value="Male" class="rad" id="male">
     <label for="male" class="label">Male</label>
    <input type="radio" name="gender" value="Female" class="rad" id="female">
     <label for="female" class="label">Female</label>
   </p>

    </div>

    <div class="empAdd">

    <h3>Employee Address</h3>
    <label for="phone" class="label">Phone</label>
    <input type="text" name="number" class="input" placeholder="phone number" id="phone">
    <label for="email" class="label">Email</label>
    <input type="email" name="email"  class="input" placeholder="email address" id="email">
    <label for="country" class="label">Country</label>
    <select name="country" class="input" id="country">
<option value="Ethiopia">Ethiopia</option>
<option value="Sudan">Sudan</option>
<option value="Kenya">Kenya</option>
<option value="USA">USA</option>
 <option value="India">India</option>
  <option value="Pakstan">Pakstan</option>
</select>
    <label for="region" class="label">Region</label>
    <input type="text" name="region"  class="input" placeholder="region" id="region">
    <label for="address" class="label">Address</label>
     <input type="text" name="address"  class="input" placeholder="address" id="address">


    </div>

    <div class="japp">

   <h3>Job Application</h3>
   <label for="date" class="label">Date</label>
    <input type="date" name="date" id="date" class="input" placeholder=" date......">
    <label for="id" class="label">Employee Id</label>
    <input type="text" name="id"  class="input" placeholder="employee id" id="id">
    <label for="Password" class="label">Password</label>
     <input type="password" name="password"  class="input" placeholder="password" id="pass">
    <label for="proffession" class="label">Proffession</label>
    <select name="proffession" id="proffession" class="input">

<option value="doctor">Doctor</option>
<option value="nurse">Nurse</option>
<option value="pharamasist">Pharamasist</option>
<option value="labortarist">Labortarist</option>
 <option value="radiographer">Radiographer</option>
  <option value="dentist">Dentist</option>
</select>
    <label for="payment" class="label">Salary</label>
    <input type="text" name="salary"  class="input" placeholder="payment" id="salary">


    </div>
    <div class="btnclass">
    <button name="submit" class="save">Save</button>
    <button name="reset" class="save">New</button>




    </div>


    </form>
</body>
<script src="validation.js" type="text/javascript"> </script>
</html>

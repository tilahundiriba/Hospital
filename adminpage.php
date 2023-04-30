<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE </title>
   
    <style>
     .header{
    background-color: rgba(1, 1, 1,0.5);
    height: 70px;
    width: 100%;
  display: flex;
  flex-direction: row;
  margin-top: 0px;
  margin-left: 0px;
 
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
     left: 30%; 
    margin: 20px;  
    text-decoration: none; 
} 
.linkers:hover{
height: 22px;
width: 70px;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}
h2{
    color: aquamarine;
    position:relative;
    top: 20px;
    
}
h3{
  color: #D2302C;
  font-size: 20px;
  font-weight: bold;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.empInfo{
   display: flex;
  flex-direction: column;
  background-color: #161B21;
  align-items: center; 
  width: 400px;
  border-radius: 20px;
height: 700px;
margin-top: 50px;
position: relative;
padding-top: 20px;
left: 100px;
}
*{
  margin: 0px;
  padding: 0px;
}
body{
  background-color: #FFF748;
}
.input{
  width: 250px;
  height: 40px;
  border-radius: 10px;
  border: none;
  background-color: #DDC6B6;

}
.input:hover{
  background-color: #F4A896;
}
.btnsave{
  width: 125px;
  height: 40px;
  border-radius: 10px;
  padding: 10px;
  margin-top: 20px;
  color: #8BD8BD;
  background-color: #295F2D;
  font-size: 15px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
 
}
.btnsave:hover{
  background-color: #358597;
  color: #FFE67C;
}
.label{
  font-size: 15px;
  font-weight: normal;
  font-family: Georgia, 'Times New Roman', Times, serif;
  color: #F4A950;
  font-weight: bold;
  margin-top: 10px;
}
    </style>
</head>
<body>
    <form >
        <div class="header">

   <a href="#" class="linkers">View</a>
    <a href="aboutus.php" class="linkers">Search</a>
     <a href="homepage.php" class="linkers">Home</a>
        </div>
        <div class="empInfo">

<h3> Update Employee Information</h3>


  <label for="empId" class="label">Employee Id</label>
  <input type="text" name="empId" class="input" placeholder="Employee Id">
  <label for="age" class="label">Age</label>
  <input type="text" name="age" class="input" placeholder="Age">
  <label for="phone" class="label">Phone</label>
   <input type="text" name="phone" class="input" placeholder="Phone">
  <label for="country" class="label">Country</label>
  <select name="country" class="input">

<option value="Ethiopia">Ethiopia</option>
<option value="Sudan">Sudan</option>
<option value="Kenya">Kenya</option>
<option value="USA">USA</option>
 <option value="India">India</option>
  <option value="Pakstan">Pakstan</option>
</select>
  <label for="region" class="label">Region</label>
  <input type="text" name="region" class="input" placeholder="Region">
  
  <label for="address" class="label">Address</label>
   <input type="text" name="address" class="input" placeholder="Address">
   <label for="male" class="label">Date</label>
  <input type="date" name="date" class="input">
   <label for="proffession" class="label">Proffession</label>
   <select name="proffession" class="input">

<option value="Doctor">Doctor</option>
<option value="Nurse">Nurse</option>
<option value="Pharamasist">Pharamasist</option>
<option value="Labortarist">Labortarist</option>
 <option value="Radiographer">Radiographer</option>
  <option value="Dentist">Dentist</option>
</select>
<label for="salary" class="label">Salary</label>
<input type="text" name="salary" class="input" placeholder="Salary">
   <div class="btndiv">
<input type="submit" value="Save" class="btnsave">
<input type="reset" value="Clear" class="btnsave">
</div>
  </div>

    </form>
</body>
</html>

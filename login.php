<!DOCTYPE html>
<html lang="en">
<head>
    <style></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        body{
            background-image: url("images/hdbag.jpg");
            background-size: cover;
        }
        .input{
    width: 200px;
border-radius: 10px;
height: 30px;

background-color: rgba(1,1,1,0.2);
}
.divlogin{
    padding: 15px;
width: 400px;
height: 400px;
margin: auto;
border-width: 2px;
background-color: rgba(1,1,1,0.2);
border-radius: 40px;
border-bottom-color: red;
border-top-color: green;
font-family: 'Gill Sans', 'Gill Sans MT', italic, 'Trebuchet MS', sans-serif;
   color: black;
text-align: center;
}
.prof{
    width: 200px;
border-radius: 10px;
height: 30px;

background-color: rgba(1,1,1,0.2);
}
.btnlogin{
    padding: 10px 80px;
    border-bottom-color: red;
border-top-color: green;
background-color: rgba(1,1,1,0.2);
color: white;
border-radius: 10px;
font-size: large;  

}
.btnlogin:hover{
    background-color: lightblue;
    color: white;
    cursor: pointer;
}
p{
  
    color: black;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
h3{

    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
    </style>
</head>
<body>
    <form class="divlogin">

   
    <h3>Login</h3>
    <p>Username <input type="text" name="username" class="input"></p>
    <p>Password <input type="password" name="password" class="input"></p>
    <p>Profession
    <select name="proffession" id="proffession" class="prof">

        <option value="doctor">Doctor</option>
        <option value="nurse">Nurse</option>
        <option value="pharamasist">Pharamasist</option>
        <option value="labortarist">Labortarist</option>
         <option value="radiographer">Radiographer</option>
          <option value="dentist">Dentist</option>
    </select></p>
    <p><button name="submit" class="btnlogin">Login</button></p>


    </form>
</body>
</html>

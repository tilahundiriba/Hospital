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
            background-image: url("images/pateint.jpg");
            background-size: cover;
        }
        .input{
    width: 250px;
border-radius: 10px;
height: 30px;
margin-top: 10px;


background-color: rgba(1,1,1,0.2);
}
.divlogin{
    padding: 15px;
width: 350px;
height: 400px;
margin: auto;
margin-top: 50px;
border-width: 2px;
display: flex;
flex-direction: column;

align-items: center;
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
    padding: 10px 100px;
    border-bottom-color: red;
border-top-color: green;
background-color: rgba(1,1,1,0.2);
color: white;
border-radius: 10px;
font-size: large;  
margin-top: 30px;

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
.userlogo{
    height: 150px;
    width: 300px;
    border-radius: 20px;
   
}
.labal{
    position: relative;
    left: -80px;
    font-size: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
}
    </style>
</head>
<body>
    <form class="divlogin">

   <div class="userlogindiv">
    <img src="images/userlogin.jpg" alt="User login logo" class="userlogo">
   </div>
    <label for="username" class="labal">Username </label>
    <input type="text" name="username" class="input" placeholder="User name">
    <label for="password" class="labal">Password </label>
    <input type="password" name="password" class="input" placeholder="password">

    <button name="submit" class="btnlogin">Login</button>


    </form>
</body>
</html>

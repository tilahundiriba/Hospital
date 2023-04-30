<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
    <style>

        .adminlogo{
            height: 150px;
            width: 250px;
            border-radius: 20px;
        }
        .admindiv{
            height: 400px;
        }
    </style>
</head>
<body>
    <form>
<div class="admindiv">
<div class="adm">
    <img src="images/adminlogin.jpg" alt="Admin logo" class="adminlogo">
</div>
    
    <label for="username" class="labclass">Username</label>
    <input type="text" name="username" class="inputclass" placeholder="username">
    <label for="password" class="labclass"> Password </label>
  <input type="password" name="password" class="inputclass" placeholder="username">
   <button name="submit" class="btnclass">Login</button>
   
</div>

    </form>
</body>
</html>
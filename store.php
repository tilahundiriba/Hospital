<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Page</title>
    <link rel="stylesheet" href="staff.css">
    <style>
      .btnclass{
   
top: 970px;
left: 300px;
}
body{


    background-color:#33adff;
background-repeat: none;
background-size: cover;
ba
}    
#storempAdd{
  left: 360px;
  top: 500px;
}
#linkers{
width: 180px;
  display: flex;
  flex-direction: column;
  background-color:#4d4dff;
  height: 550px;
  border-radius: 20px;
 left: 30px;
 top: 200px;

}
.save{
    margin: 20px;
    text-decoration: none;
}
.wts{
    position: absolute;
    left: 300px;
}
#btnclassforStore{
    left: 350px;
}
.pharm{
    position: absolute;
    left: 800px;
    height: 800px;
    width: 800px;
    top: 100px;
    border-radius: 30px;
}

    </style>

</head>
<body>
    <form>

 <legend><h2 class="wts">WELCOME TO STORE PAGE</h2></legend>
    <div class="empInfo" id="storeinfo">

  <h3> Store</h3> 


    <label for="item id" class="label">Item ID</label> 
    <input type="text" name="item id" class="input" placeholder="item id">
    <label for="name" class="label">Item Name</label>
    <input type="text" name="name" class="input" placeholder="item name">
    <label for="category" class="label">Category</label>
     <input type="text" name="category" class="input" placeholder="category">
    

    </div>
    <div class="pharm" id="pharm+">
    <img src="images/pharmacy.avif" alt="pharmacy photo" >
   </div>
    <div class="empAdd" id="storempAdd">

<h3>Payments</h3>
<label for="price" class="label">Price</label>
     <input type="text" name="price" class="input" placeholder="price for each">
    <label for="amount" class="label">Amount</label>
    <input type="text" name="amount" class="input" placeholder="amount">
    
    <label for="Gender" class="label">Total Cost</label>
     <input type="text" name="total" class="input" placeholder="total  Cost">
    <label for="male" class="label">Recorded by </label>
    <input type="text" name="recorded" class="input" placeholder="Recorder name">
    <label for="female" class="label">Date of Addition</label>
    <input type="text" name="date" class="input" placeholder="Date of Addition">


</div>
 
    <div class="btnclass" id="btnclassforStore">
    <button name="submit" class="save">Save</button>
    <button name="reset" class="save">New</button>
 
 
  
    
   
    </div>
    <div class="btnclass" id="linkers">
    <a href="staffregister.php" class="save" >STAFF</a>
    <a href="login.php" class="save">LOGIN</a>
    <a href="#" class="save">ITEMS </a>
    <a href="#" class="save">HOME</a>
    <a href="#" class="save">BACK</a>
    <a href="#" class="save">NEXT</a>
   
    </div>


    </form>
</body>
</html>


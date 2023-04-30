<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Page</title>
    <!-- <link rel="stylesheet" href="staff.css"> -->
    <style>
        .empInfo{
    background-color: rgba(1,1,1,0.5);
    transform: 0.5;
    width: 350px;
    display: flex;
    align-items: center;
    flex-direction: column;
  left: 50px;
 border-radius: 40px;
  position: absolute;
  top: 100px;
  height: 350px;
  margin:20px;
  padding-top: 50px;
  
}

.empAdd{
    background-color: rgba(1,1,1,0.5);
    padding-top: 10px;
    border-radius: 40px;
   
    width: 350px;
    top: 80px;
    display: flex;
    flex-direction: column;
    left: 650px;
  align-items: center;
  position: absolute;
  height: 450px;
}

.btnclass{
    position: absolute;
  
   
    height: 50px;
    width: 400px;
top: 470px;
left: 300px;
}
.input{
width: 200px;
border-radius: 10px;
height: 30px;

background-color: rgba(1,1,1,0.2);
}
.save{
padding: 15px;
border-bottom-color: red;
border-top-color: green;
background-color: rgba(1,1,1,0.2);
color:  #CCF381;
width: 200px;
border-radius: 10px;
font-size: large;
margin-right: 30px; 
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
background-color: rgba(1,1,1,0.2);
background-image: url("images/store2.jpg");
background-size: cover;
height: 100%;
background-repeat: no-repeat;
}
.label{
font-size: 20px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
color: #F0A07C;
}
h3{
color:  #CCF381;
font-size: 30px;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

      .btnclass{
   
top: 550px;
left: 450px;
display: flex;
flex-direction: row;
}
body{


    background-color:#33adff;
background-repeat: none;
background-size: cover;

}    
#storempAdd{
  left: 860px;
  top: 100px;
}
#linkers{
width: 180px;
  display: flex;
  flex-direction: column;
  background-color:#4d4dff;
  height: 550px;
  border-radius: 20px;
 left: 30px;
 top: 100px;

}

.wts{
    position: absolute;
    left: 300px;
}
/* #btnclassforStore{
    top: 500px;
    left: 350px;
    width: 600px;
} */
.pharm{
    position: absolute;
    left: 800px;
    height: 800px;
    width: 800px;
    top: 100px;
    border-radius: 30px;
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
     left: 50%; 
    margin: 20px;  
    text-decoration: none; 
} 
.linkers:hover{
    text-decoration: wavy;
    color: black;
    background-color: aquamarine;
    border-radius: 5px;
}
h2{
    color: aquamarine;
    position:relative;
    
    
}
#storeinfo{

}
    </style>

</head>
<body>
    <form>

 
 <div class="header">

     <a href="#" class="linkers">Services</a>
     <a href="#" class="linkers">ITEMS </a>
    <a href="#" class="linkers">HOME</a>
    <a href="#" class="linkers">BACK</a>
    <a href="#" class="linkers">NEXT</a>

        </div>
    <div class="empInfo" id="storeinfo">

  <h3> Store</h3> 


    <label for="item id" class="label">Item ID</label> 
    <input type="text" name="item id" class="input" placeholder="item id">
    <label for="name" class="label">Item Name</label>
    <input type="text" name="name" class="input" placeholder="item name">
    <label for="category" class="label">Category</label>
     <input type="text" name="category" class="input" placeholder="category">
    

    </div>
    
    <div class="empAdd" id="storempAdd">

<h3>Payments</h3>
<label for="price" class="label">Price</label>
     <input type="text" name="price" class="input" placeholder="price for each">
    <label for="amount" class="label">Amount</label>
    <input type="text" name="amount" class="input" placeholder="amount">
    
    <label for="total" class="label">Total Cost</label>
     <input type="text" name="total" class="input" placeholder="total  Cost">
    <label for="recorded" class="label">Recorded by </label>
    <input type="text" name="recorded" class="input" placeholder="Recorder name">
    <label for="date" class="label">Date of Addition</label>
    <input type="date" name="date" class="input" placeholder="Date of Addition">


</div>
 
    <div class="btnclass" id="btnclassforStore">
    <button name="submit" class="save">Save</button>
    <button name="reset" class="save">New</button>
 
    </div>
   


    </form>
</body>
</html>


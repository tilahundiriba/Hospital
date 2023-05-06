<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>billing</title>
    <style>
    
        h5{
   box-sizing: border-box;
   font-size: 25px;
   font-style: italic;
  font-family: 'Times New Roman', Times, serif;
   font-display: flex;
   color:  #CCF381;

        }
        *
   {
    padding: 0px;
    margin: 0px;
   }
        .menudiv{
            background-color:rgb(101, 156, 156);
            height: 60px;
         display:inline-flexbox;
  position: sticky;
  position: fixed;
  width: 1700px;
           
        }
        ul{
            display: inline-flex;
            list-style: none;
            color: white;
            gap: 30px;
            padding-left: 980px;


        }
        body{
            background-image: url("images/redcross.jpg");
            /* background-repeat: no-repeat; */
            background-size: 100%;
        }
       
        .diveinfo{
            height: 700px;
      
            padding-top: 70px;
    
            justify-content: center;
           text-align: center;
           background-color: rgba(1,1,1,0.3);
       
        }
        .inptext{
       border-radius: 15px;
       background-color: rgba(1,1,1,0.2);
            flex-direction: column;
            width: 400px;
            font-style: oblique;
         height: 25px;
            padding-top: 15px;
cursor: default;
        }

        a{
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-style: italic;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        a:hover{
            color: #000;
            background-color: thistle;
            cursor: pointer;
        }
        label{
color:  #CCF381;
font-size: 30px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-style: unset;

        }
        .inptext:hover{
         background-color: antiquewhite;
         color: #000;
        }
        .button{
            padding: 15px ;
            border: solid white;
            background-color: rgba(1,1,1,0.4);
            border-radius: 15px;
            color: white;
            font-size: large;
            height: 50px;
            width: 200px;
        }
        .button:hover{
            color: rgb(84, 129, 78);
            background-color: white;
            size: 50px;
        }
       
hr{
  
   color: #000;


}
p{
padding: 0px 50px 40px;
text-align: center;
font-size: 22px;
text-indent: 10px;
color: white;
}
    </style>
</head>

<body>
    
   <div class="menudiv"><h5>BILL MANAGMENT FORM</h5>

<ul>
<li><a href="homepage.php">Home</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="#show info">Information</a></li>
</ul>
</div> 

    <form action="" name="myForm" id="form">
      
 <div class="diveinfo">
    <label for="date">Date</label><br>
    <input type="date" name="date" id="date" class="inptext" placeholder=" date......"><br><br>
    <label for="card">CardNo</label><br>
    <input type="text" name="cardNo" id="card" class="inptext" placeholder="Please Enter CardNo....."><br><br>
    <label for="amount">Service Price</label><br>
    <input type="number" name="amount" id="amount" class="inptext" placeholder="please enter the amount......"><br><br>
    <label for="price">Bed Price</label><br>
    <input type="number" name="price" id="price" class="inptext" placeholder="Bed Price......"><br><br>
    <label for="total">Total Price</label><br>
    <input type="number" name="total" id="total" class="inptext" placeholder="total price......"><br><br>
    <label for="nameacceptor">Name Of Price Acceptor</label><br>
    <input type="text" name="nameacceptor" id="nameacceptor" class="inptext" placeholder=" Price Acceptor......"><br><br>


   
    <input type="submit" name="submit" id="btnsubmit" class="button"><br><br>
    <hr>
 </div>
    </form>
  
</body>

    <script type="text/javascript">
        
        const form1=document.getElementById('form');
   
        var rfn =/^[a=zA-Z]$/
        form1.addEventListener('submit',(e)=>{
        
            e.preventDefault();
            validate();
        });
        function validate() {
        
            if(document.myForm.date.value.trim()==""){
                alert("please enter your date");
                document.myForm.date.focus();
                return false;
                
            }
            
            if(document.myForm.cardNo.value.trim()==""){
                alert("please enter your card number");
                document.myForm.cardNo.focus();
                return false;
            }
        
        
            if(document.myForm.amount.value.trim()==""){
               alert("please provide amount");
                document.myForm.amount.focus();
                return false;
            }
            if(document.myForm.price.value.trim()==""){
                alert("please provide price");
                document.myForm.price.focus();
                return false;
            }
            if(document.myForm.total.value.trim()==""){
                alert("please provide total");
                document.myForm.total.focus();
                return false;
            }
            if(document.myForm.nameacceptor.value.trim()==""){
                alert("please provide name");
                document.myForm.nameacceptor.focus();
                return false;
            }
            // else if(!(rfn.test(document.myForm.nameacceptor.value.trim()))){
            //     alert("please provide correct word for name");
            //     document.myForm.nameacceptor.focus();
            //     return false;
            // }
            return (true);
        }
            </script>

</html>
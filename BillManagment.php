<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style/billPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .header {
    background-color: rgba(1, 1, 1, 1);
    height: 70px;
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 0px;

    padding-left: 20px;


}

.header:hover {
    background-color: rgba(1, 1, 1, 1);
}

.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 55%;
    margin: 20px;
    text-decoration: none;
}
i{
    margin-right: 10px;
}
</style>
</head>

<body>

    <div class="header">

        
        <a href="index.php" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="updateBill.php" class="linkers"><i class="fa fa-edit" style="font-size:24px"></i>UPDATE</a>
        <a href="services.html" class="linkers"><i class="fa fa-trash-o" style="font-size:24px"></i>DELETE</a>
        <a href="displayBill.php" class="linkers"><i class="fa fa-eye" style="font-size:24px"></i>VIEW </a>
    </div>
    <form action="insertbill.php" name="myForm" id="form" method="POST">

        <div class="diveinfo">
   <h3>Bill Management Form</h3>
            <div class="div1">
                <label for="card">Pateint Code</label><br>
                <input type="text" name="cardNo" id="cardno" class="inptext" placeholder="Please Enter CardNo.....">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="card">Item ID</label><br>
                <input type="text" name="itemid" id="itemid" class="inptext" placeholder="Please Enter item id.....">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="amount">Service Price</label><br>
                <input type="number" name="amount" id="amount" class="inptext"
                    placeholder="please enter the amount......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="price">Bed Price</label><br>
                <input type="number" name="price" id="price" class="inptext" placeholder="Bed Price......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="noday">Number of Days</label><br>
                <input type="number" name="noday" id="noday" class="inptext" placeholder="Number of days......">
                <div class="error"></div>
            </div>

            <div class="div1">
                <label for="roomno">Room Number </label><br>
                <input type="number" name="roomno" id="roomno" class="inptext" placeholder="Room Number ......">
                <div class="error"></div>
            </div>
            <div class="div1">
                <label for="nameacceptor"> Acceptor Name</label><br>
                <input type="text" name="nameacceptor" id="nameacceptor" class="inptext"
                    placeholder=" Price Acceptor......">
                <div class="error"></div>
            </div>

            <div class="div2">
                <input type="submit" name="insert" id="btnsubmit" class="button">
                <input type="reset" name="reset" class="button">
            </div>
        </div>

    </form>

</body>

<script type="text/javascript" src="validateBill.js">

    

</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style/billPage.css">
</head>

<body>

    <div class="header">

        <a href="services.html" class="linkers">Services</a>
        <a href="#" class="linkers">ITEMS </a>
        <a href="homepage.html" class="linkers">HOME</a>
        <a href="login.html" class="linkers">BACK</a>
        <a href="updateBill.html" class="linkers">UPdate</a>

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
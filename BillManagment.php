<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        h5 {
            position: absolute;
            left: 80px;
            top: 30px;
            box-sizing: border-box;
            font-size: 25px;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            font-display: flex;
            color: #CCF381;

        }


        .menudiv {
            background-color: rgb(101, 156, 156);
            height: 60px;
            display: inline-flexbox;
            position: sticky;
            /* position: fixed; */
            width: 1700px;

        }

        ul {
            display: inline-flex;
            list-style: none;
            color: white;
            gap: 30px;
            padding-left: 980px;


        }

        body {
            background-image: url("images/homepageback.jpg");
            /* background-repeat: no-repeat; */
            background-size: 100%;
            background-color: #262223;
        }

        .diveinfo {
            position: relative;
            width: 520px;
            height: 830px;
            padding-top: 70px;
            background-color: rgba(1, 1, 1, 0.5);
            left: 400px;
            top: 30px;
            border-radius: 2px;

        }

        .inptext {

            /* background-color: rgba(1, 1, 1, 0.2); */
            width: 400px;
            height: 20px;
            padding-top: 15px;
            border-radius: 5px;
        
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-style: italic;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        a:hover {
            color: #000;
            background-color: thistle;
            cursor: pointer;
        }

        label {
            color: #F4A950;
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: unset;

        }

        .inptext:hover {
            background-color: antiquewhite;
            color: #000;
        }

        .button {
            padding: 15px;
            border: solid white;
            background-color: rgba(1, 1, 1, 0.4);
            border-radius: 15px;
            color: white;
            font-size: large;
            height: 50px;
            width: 200px;
        }

        .button:hover {
            color: rgb(84, 129, 78);
            background-color: white;
            size: 50px;
        }

        hr {

            color: #000;


        }

        p {
            padding: 0px 50px 40px;
            text-align: center;
            font-size: 22px;
            text-indent: 10px;
            color: white;
        }

        .error {
            color: red;
        }

        .div1 {
            display: flex;
            flex-direction: column;
            position: relative;
            margin-left: 50px;
        }
        .div2{
            margin-left: 40px;
            padding: 20px;
            /* position: absolute;
            bottom: 20px; */
        }
        .header {
            background-color: rgba(1, 1, 1, 0.5);
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
            left: 50%;
            margin: 20px;
            text-decoration: none;
        }

        .linkers:hover {
            text-decoration: wavy;
            color: black;
            background-color: aquamarine;
            border-radius: 5px;
        }

        h2 {
            color: aquamarine;
            position: relative;


        }
    </style>
</head>

<body>

    <div class="header">

        <a href="services.html" class="linkers">Services</a>
        <a href="#" class="linkers">ITEMS </a>
        <a href="homepage.html" class="linkers">HOME</a>
        <a href="login.html" class="linkers">BACK</a>
        <a href="#" class="linkers">NEXT</a>

    </div>
    <form action="insertbill.php" name="myForm" id="form" method="POST">

        <div class="diveinfo">
   
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <link rel="stylesheet" href="style/attendance.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       .empInfo22 {
    background-color: rgba(1, 1, 1, 0.5);
    transform: 0.5;
    width: 430px;
    display: flex;
    align-items: center;
    flex-direction: column;
    left: 100px;
    position: absolute;
    top: 50px;
    height: 470px;
    margin: 20px;
    padding-top: 30px;

}

.btnclass22 {
    position: absolute;


    height: 50px;
    width: 400px;
    top: 470px;
    left: 100px;
}

.input {
    width: 300px;
    border-radius: 2px;
    height: 30px;


}

.save22 {
    padding: 15px;
    border-bottom-color: red;
    border-top-color: green;
    background-color: rgba(1, 1, 1, 0.2);
    color: #CCF381;
    width: 200px;
    border-radius: 10px;
    font-size: large;
    margin-right: 30px;
    margin-left: 30px;
}

.save22:hover {
    color: black;
    background-color: white;
}


.body22 {
    background-color: rgba(1, 1, 1, 0.2);
    background-image: url("style/images/homepageback.jpg");
    background-size: cover;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
}

.label {
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #F0A07C;
}

h3 {
    color: black;
    font-size: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    position: relative;
    left: 180px;
}

.btnclass22 {

    top: 600px;
    left: 140px;
    display: flex;
    flex-direction: row;
   
}





#linkers {
    width: 180px;
    display: flex;
    flex-direction: column;
    background-color: #4d4dff;
    height: 550px;
    border-radius: 20px;
    left: 30px;
    top: 100px;

}

.wts {
    position: absolute;
    left: 300px;
}

/* #btnclassforStore{
top: 500px;
left: 350px;
width: 600px;
} */
.pharm {
    position: absolute;
    left: 800px;
    height: 800px;
    width: 800px;
    top: 100px;
    border-radius: 30px;
}

* {
    margin: 0px;
    padding: 0px;
}

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


.linkers {
    position: relative;
    display: flex;
    flex-direction: row;
    color: aquamarine;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-style: normal;
    left: 75%;
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


.div11
 {
    position: relative;
    margin: 5px;
    padding: 3px;
    display: flex;
    flex-direction: column;
}

.error {
    color: red;
}
.forboth22{
    /* background-color: rgb(54, 47, 47);  */
    width: 650px;
    height: 650px;
    position: absolute;
    margin-left: 50px;
    padding: 10px;
    border-radius: 20px;
    left: 300px;
    margin-top: 20px;
} 
i{
    margin-right: 10px;
}
    </style>

</head>

<body class="body22">
    <div class="header">

           
        <a href="homepage.html" class="linkers"><i class="fa fa-home" style="font-size:24px"></i>HOME</a>
        <a href="attendance.php" class="linkers"><i class="fa fa-angle-double-left" style="font-size:24px"></i>BACK </a>

    </div>
    <form name="myForm" id="form2" action="insertToUpdateAtt.php" method="get">
       
        <div class="forboth22">
            <h3>Update Attendance </h3>
            <div class="empInfo22">
                <div class="div11">
                    <label for="staffcode2" class="label">Employee ID</label>
                    <input type="text" name="staffcode2" id="staffcode2" class="input" placeholder="staff code">
                    <div class="error"></div>
                </div>
                <div class="div11">
                    <label for="date2" class="label">Date </label>
                    <input type="date" name="date2" class="input" id="date2" placeholder="Date.....">
                    <div class="error"></div>
                </div>

                <div class="div11">
                    <label for="mark2" class="label">Mark </label>
                    <select name="mark2" class="input" id="mark2">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="error"></div>
                </div>

                <div class="div11">
                    <label for="perm2" class="label">Permition </label>
                    <select name="perm2" class="input" id="perm2">
                        <option value="Absent">Absent</option>
                        <option value="Present">Present</option>
                    </select>
                    <div class="error"></div>
                </div>
                <div class="div11">
                    <label for="reason2" class="label">Reason</label>
                    <input type="text" name="reason2" class="input" id="reason2" placeholder="reason2 ">
                    <div class="error"></div>
                </div>
            </div>

            <div class="btnclass22">
                <input type="submit" name="submit" class="save" value="Save"> 
                <input type="reset" name="reset" class="save" value="Cansel"> 
              
            

            </div>

        </div>

    </form>
  
</body>
<!-- <script type="text/javascript">

    const form2 = document.getElementById('form2');
    const empid2 = document.getElementById('staffcode2');
    const date2 = document.getElementById('date2');
    const mark2 = document.getElementById('mark2');
    const perm2 = document.getElementById('perm2');
    const reason2 = document.getElementById('reason2');
    
    
    form2.addEventListener('submit', e => {
    e.preventDefault();
    
    validateInputs();
    });
    
    const setError = (element, message) => {
    const div11 = element.parentElement;
    const errorDisplay = div11.querySelector('.error');
    
    errorDisplay.innerText = message;
    div11.classList.add('error');
    div11.classList.remove('success')
    }
    
    const setSuccess = element => {
    const div11 = element.parentElement;
    const errorDisplay = div11.querySelector('.error');
    
    errorDisplay.innerText = '';
    div11.classList.add('success');
    div11.classList.remove('error');
    };
    
    // const isValidEmail = email => {
    //     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     return re.test(String(email).toLowerCase());
    // }
    
    const validateInputs = () => {
    const empid22 = empid2.value.trim();
    const perm22 = perm2.value.trim();
    const mark22 = mark2.value.trim();
    const reason22 = reason2.value.trim();
    const date2 = date2.value.trim();
    
    if(empid22 === '') {
        setError(empid2, 'Employee Id is required');
    } else {
        setSuccess(empid2);
    }
    
    if(date2 === '') {
        setError(date2, 'Date is required');
    }  else {
        setSuccess(date2);
    }
    
    if(perm22 === '') {
        setError(perm2, 'perm2ition is required');
    } else {
        setSuccess(perm2);
    }
    
    if(mark22 === '') {
        setError(mark2, 'mark2 is required');
    } else  {
        setSuccess(mark2);
    } 
    if(reason22 === '') {
        setError(reason2, 'reason2 is required');
    } else  {
        setSuccess(reason2);
    } 
    
    };
    
    </script> -->

</html>
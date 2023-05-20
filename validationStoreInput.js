const form1=document.getElementById('form');
form1.addEventListener('submit',(e)=>{

    e.preventDefault();
    validateStaff();
});
function validateStaff() {

   
    if(document.myForm.fname.value.trim()==""){
        alert("please enter your first name");
        document.myForm.fname.focus();
        return false;

    }
    if(document.myForm.mname.value.trim()==""){
        alert("please enter your middle name");
        document.myForm.mname.focus();
        return false;

    }
    if(document.myForm.lname.value.trim()==""){
        alert("please enter your last name");
        document.myForm.lname.focus();
        return false;

    }
    if(document.myForm.dbrith.value.trim()==""){
        alert("please enter your brith date");
        document.myForm.dbrith.focus();
        return false;
    }
    if(document.myForm.age.value.trim()==""){
        alert("please enter your age");
        document.myForm.age.focus();
        return false;
    }
    if(document.myForm.gender.value.trim()==""){
        alert("please select your gender");
        document.myForm.gender.focus();
        return false;
    }
  
  
  
    if(document.myForm.phone.value.trim()==""){
       alert("please provide phone");
        document.myForm.phone.focus();
        return false;
    }
    if(document.myForm.email.value.trim()==""){
        alert("please enter your email address");
        document.myForm.email.focus();
        return false;
    }
    if(document.myForm.country.value.trim()==""){
        alert("please provide country");
        document.myForm.country.focus();
        return false;
    }
    if(document.myForm.region.value.trim()==""){
        alert("please provide region");
        document.myForm.region.focus();
        return false;
    }
    if(document.myForm.address.value.trim()==""){
        alert("please provide address");
        document.myForm.address.focus();
        return false;
    }
    if(document.myForm.date.value.trim()==""){
        alert("please provide date");
        document.myForm.date.focus();
        return false;
    }
    if(document.myForm.id.value.trim()==""){
        alert("please enter your employee Id");
        document.myForm.id.focus();
        return false;

    }
    if(document.myForm.password.value.trim()==""){
        alert("please enter your password");
        document.myForm.password.focus();
        return false;
    }
    if(document.myForm.proffession.value.trim()==""){
        alert("please provide proffession");
        document.myForm.proffession.focus();
        return false;
    }
    if(document.myForm.salary.value.trim()==""){
        alert("please provide salary");
        document.myForm.salary.focus();
        return false;
    }



    return (true);
}

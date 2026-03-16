function checkEmail(){
    let email = document.getElementById("Email").value;
    let errormsg = document.getElementById("errorMsg");
    if(email == ""){
        errormsg.innerHTML="Cannot be empty";
        return false;
    }
    if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
    errormsg.innerHTMl = "Invalid email format";
    return false;
    }
return true;

}
    let btnSubmit=document.getElementById("btnSubmit");
    btnSubmit.addEventListener("click", checkEmail);
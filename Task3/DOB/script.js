function checkDOB() {
    let dob = document.getElementById("dob").value;
    let error= document.getElementById("error");
    if (dob == "") {
         error.innerHTML="Date of Birth must be selected";
        return;
    } 
    
}

let btnSubmit = document.getElementById("btnSubmit");
btnSubmit.addEventListener('click', checkDOB);
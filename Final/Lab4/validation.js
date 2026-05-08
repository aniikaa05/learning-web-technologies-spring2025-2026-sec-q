function validateForm() {
    let name = document.getElementById("name").value;
    let contact = document.getElementById("contact").value;
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if(name == "" || contact == "" || user == "" || pass == ""){
        alert("All fields are required!");
        return false;
    }
    return true;
}
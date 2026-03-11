function validateEmail() {
    var email = document.getElementById("email").value;
    var error = document.getElementById("error");
    error.innerText = "";

    if (email === "") {
        error.innerText = "Email cannot be empty";
        return false;
    }

    // Check if email contains "@" and it's not the first character
    if (email.indexOf("@") === -1 || email.indexOf("@") === 0) {
        error.innerText = "Email must contain '@' and something before it";
        return false;
    }

    // Check if email contains "." after "@"
    if (email.substring(email.indexOf("@")).indexOf(".") === -1) {
        error.innerText = "Email must contain '.' after '@'";
        return false;
    }

    return true; // Email looks like anything@example.com
}
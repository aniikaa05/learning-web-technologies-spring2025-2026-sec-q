function validateForm() {
    document.getElementById("errorName").innerHTML = "";
    document.getElementById("errorEmail").innerHTML = "";
    document.getElementById("errorGender").innerHTML = "";
    document.getElementById("errorDob").innerHTML = "";
    document.getElementById("errorBlood").innerHTML = "";
    document.getElementById("errorDegree").innerHTML = "";
    document.getElementById("errorUserId").innerHTML = "";
    document.getElementById("errorPhoto").innerHTML = "";

    let name = document.getElementById("fullName").value.trim();
    if (name === "") {
        document.getElementById("errorName").innerHTML = "Name cannot be empty";
        return;
    } else if (name.split(" ").length < 2) {
        document.getElementById("errorName").innerHTML = "Name must contain at least two words";
        return;
    }

    let email = document.getElementById("email").value.trim();
    if (email === "") {
        document.getElementById("errorEmail").innerHTML = "Email cannot be empty";
        return;
    } else {
        let at = email.indexOf("@");
        let dot = email.lastIndexOf(".");
        if (at === -1 || dot === -1 || dot < at) {
            document.getElementById("errorEmail").innerHTML = "Invalid Email";
            return;
        }
    }
    let genders = document.getElementsByName("gender");
    let genderSelected = false;
    for (let i = 0; i < genders.length; i++) {
        if (genders[i].checked) {
            genderSelected = true;
            break;
        }
    }
    if (!genderSelected) {
        document.getElementById("errorGender").innerHTML = "Gender must be selected";
        return;
    }

    let day = document.getElementById("dobDay").value.trim();
    let month = document.getElementById("dobMonth").value.trim();
    let year = document.getElementById("dobYear").value.trim();
    if (day === "" || month === "" || year === "") {
        document.getElementById("errorDob").innerHTML = "DOB cannot be empty";
        return;
    } else if (Number(day) < 1 || Number(day) > 31 || Number(month) < 1 || Number(month) > 12 || Number(year) < 1900 || Number(year) > 2016) {
        document.getElementById("errorDob").innerHTML = "Invalid DOB";
        return;
    }

    let blood = document.getElementById("blood").value;
    if (blood === "") {
        document.getElementById("errorBlood").innerHTML = "Select blood group";
        return;
    }

    let ssc = document.getElementById("ssc").checked;
    let hsc = document.getElementById("hsc").checked;
    let bsc = document.getElementById("bsc").checked;
    let msc = document.getElementById("msc").checked;
    if (!ssc && !hsc && !bsc && !msc) {
        document.getElementById("errorDegree").innerHTML = "Select at least one degree";
        return;
    }

    let uid = document.getElementById("userId").value;
    let errorUser = document.getElementById("errorUserId");

    if (uid === "") {
        errorUser.innerHTML = "User ID cannot be empty";
        return;
    }

    if (Number(uid) <= 0) {
        errorUser.innerHTML = "User ID must be positive";
        return;
    }

    let photo = document.getElementById("photo").value;
    if (photo === "") {
        document.getElementById("errorPhoto").innerHTML = "Photo cannot be empty";
        return;
    }

    alert("Form submitted successfully!");
    document.forms[0].submit();
}
let submitBtn = document.getElementById("submitBtn");
submitBtn.addEventListener("click", validateForm);
function checkDegree(event) {
    let degrees = document.getElementsByName("degreeForm");
    let error = document.getElementById("error");
    let isChecked = false;
    for (let i = 0; i < degrees.length; i++) {
        if (degrees[i].checked) {
            isChecked = true;
            break;
        }
    }

    if (!isChecked) {
        event.preventDefault(); 
        error.innerHTML = "At least one degree must be selected!";
    } 
}
let btnSubmit = document.getElementById("submit");
btnSubmit.addEventListener('click', checkDegree);
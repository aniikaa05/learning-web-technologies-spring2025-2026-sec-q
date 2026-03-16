function validateGender()
{
    let gender = document.getElementsByName("gender");
    let error = document.getElementById("error");
    for(let i=0; i< gender.length; i++)
    {
        if(gender[i].checked)
        {
            return true;
        }
    }
    error.innerHTML = "Please select a gender";
    return false;
}
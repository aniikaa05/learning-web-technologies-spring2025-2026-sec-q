function checkUser(){
    let uid=document.getElementById("userid").value;
    let pic=document.getElementById("picture").value;
    let errorUser=document.getElementById("errorUser");

    if(uid==""){
        errorUser.innerHTML="User ID cannot be empty";
        return;
    }

    if(uid<=0){
        errorUser.innerHTML="User ID must be positive";
        return;
    }

    if(pic==""){
        errorUser.innerHTML="Picture must be selected";
        return;
    }
}

let btn=document.getElementById("submit");
btn.addEventListener("click",checkUser);
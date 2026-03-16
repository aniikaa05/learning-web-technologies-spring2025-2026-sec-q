function checkBlood(){
    let blood=document.getElementById("blood").value;
    let errorBlood=document.getElementById("errorBlood");

    if(blood==""){
        errorBlood.innerHTML="Blood group must be selected";
        return;
    }
}

let btn=document.getElementById("submit");
btn.addEventListener("click",checkBlood);
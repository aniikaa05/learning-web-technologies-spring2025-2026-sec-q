function checkDegree(){
    let degree=document.getElementsByName("degree");
    let error=document.getElementById("error");
    let selectedDegrees=[];
    for(let i=0; i<degree.length;i++){
        if(degree[i].checked){
            selectedDegrees.push(degree[i].value);
        }
    }
    if(selectedDegrees.length==0){
        error.innerHTML="At least one degree must be selected";
        return;
    }
    
}
let btnSubmit=document.getElementById("submit");
btnSubmit.addEventListener('click',checkDegree);
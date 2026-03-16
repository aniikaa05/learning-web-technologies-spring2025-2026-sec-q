function checkName() {
        let name = document.getElementById("Name").value;
        let msg = document.getElementById("errorMsg");
        if (name == "") {
            msg.innerHTML="Name can't be empty";
            return false;
        }
        if(name.split(" ").length<2){
            msg.innerHTML="Must contain at least two words";
            return false;
        }

        
        for(var i=0; i<name.length;i++){
            var ch = name[i];
            if(!(ch>= 'A' && ch<= 'Z') &&
                !(ch>='a' && ch<='z') &&
            ch!='.' && ch!='-' && ch!=' '){
                msg.innerHTML = "Invalid character in name";
                return false;
            }
        }

        var firstChar = name.charAt(0);
        if(!(firstChar>='A' && firstChar<='Z') &&
            !(firstChar>='a' && firstChar<='z')){
                msg.innerHTML="Must start with a letter";
                return false;
            }
            msg.style.color = "green";
            msg.innerHTML = "Valid name ";
            return true;
    }

    var btnSubmit = document.getElementById("btnSubmit");
    btnSubmit.addEventListener("click", checkName);
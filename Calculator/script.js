var items = [
    "7", "8", "9", "/",
    "4", "5", "6", "*",
    "1", "2", "3", "-",
    "0", ".", "=", "+",
    "C"
];

var buttonsDiv = document.getElementById("buttons");
var display = document.getElementById("display");

var firstNumber = "";
var secondNumber = "";
var operator = "";

for (let i = 0; i < items.length; i++) {
    var btn = document.createElement("button");
    btn.innerHTML = items[i];

    btn.onclick = function () {
        buttonClick(this.innerHTML);
    };

    buttonsDiv.appendChild(btn);
}

function buttonClick(value) {

    if ((value >= "0" && value <= "9") || value == ".") {
        if (operator == "") {
            firstNumber += value;
        } else {
            secondNumber += value;
        }
        display.value = firstNumber + operator + secondNumber;
    }
    
    else if (value == "+" || value == "-" || value == "*" || value == "/") {
        if (firstNumber != "") {
            operator = value;
            display.value = firstNumber + operator;
        }
    }
    
    else if (value == "=") {
        var num1 = Number(firstNumber);
        var num2 = Number(secondNumber);
        var result = 0;

        if (operator == "+") result = num1 + num2;
        else if (operator == "-") result = num1 - num2;
        else if (operator == "*") result = num1 * num2;
        else if (operator == "/") result = num1 / num2;

        display.value = result;

        firstNumber = result + "";
        secondNumber = "";
        operator = "";
    }
    else if (value == "C") {
        firstNumber = "";
        secondNumber = "";
        operator = "";
        display.value = "";
    }
}
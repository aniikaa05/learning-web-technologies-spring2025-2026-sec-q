let unitPrice = 1000;
let quantityInput = document.getElementById("quantity");
let totalPriceInput = document.getElementById("totalPrice");
let error = document.getElementById("error");

quantityInput.addEventListener("input", calculateTotal);
function calculateTotal(){
    let quantity = quantityInput.value;
    if(quantity < 0){
        quantityInput.value = 0;
        error.innerHTML = "Quantity cannot be negative";
        return;
    }
    else{
        error.innerHTML = "";
    }
    let total = unitPrice * quantity;
    totalPriceInput.value = total;
    if(total > 1000){
        alert("Congratulations! You are eligible for a gift coupon!");
    }

}
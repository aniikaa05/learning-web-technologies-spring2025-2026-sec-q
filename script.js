var boardDiv = document.getElementById("board");
var statusText = document.getElementById("status");
var resetBtn = document.getElementById("reset");

var board = ["","","","","","","","",""];
var cells = [];
var currentPlayer = "X";
var gameOver = false;

for(var i=0;i<9;i++){

var cell = document.createElement("div");

cell.className = "cell";
cell.id = "cell"+i;

cell.addEventListener("click", cellClick);

boardDiv.appendChild(cell);
cells.push(cell);

}

function cellClick(){
var index = this.id[4];

if(board[index] != "" || gameOver){
return;
}

board[index] = currentPlayer;

this.innerHTML = currentPlayer;
checkWinner();

if(gameOver == false){

if(currentPlayer == "X"){
currentPlayer = "O";
}
else{
currentPlayer = "X";
}

statusText.innerHTML = "Current Player: " + currentPlayer;

}
}
function checkWinner(){
var wins = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

for(var i=0;i<wins.length;i++){
var a = wins[i][0];
var b = wins[i][1];
var c = wins[i][2];

if(board[a] != "" && board[a] == board[b] && board[a] == board[c]){
cells[a].classList.add("winner");
cells[b].classList.add("winner");
cells[c].classList.add("winner");

statusText.innerHTML = "Winner: " + board[a];

gameOver = true;

return;
}

}
var filled = true;
for(var i=0;i<9;i++){
if(board[i] == ""){
filled = false;
}
}

if(filled == true && gameOver == false){

statusText.innerHTML = "It's a draw!";

gameOver = true;

}
}
resetBtn.addEventListener("click", function(){

for(var i=0;i<9;i++){
board[i] = "";
cells[i].innerHTML = "";
cells[i].classList.remove("winner");
}
currentPlayer = "X";
gameOver = false;
statusText.innerHTML = "Current Player: X";

}
);
function startGame() {
	document.turn = "X";
	document.winner = null;

	alert(document.turn+ " Gets to Start");
}

function setMessage(msg) {
	document.getElementById("message").innerText=msg;
}

function nextMove(square){

	if (document.winner != null) {
		alert(document.winner + "Already Won");
	}

	else if (square.innerText == "") {
		square.innerText = document.turn;
		switchTurn();
		}
	else{
		setMessage("Invalid Move");
		}
	}

function switchTurn(){
	
	if (checkForWinner(document.turn)) {
		alert("Congratulations" + document.turn +" ! You Win");
		document.winner=document.turn; 		

	}

	else if (document.turn == "X"){
		document.turn = "O";
		setMessage("It is " + document.turn + "'s Turn" );
	} 
	else{
		document.turn = "X";
		setMessage("It is " + document.turn + "'s Turn" );
	}	
}

function checkForWinner(move){
	var result = false;
	if (getRow(1,2,3, move) ||
		getRow(4,5,6, move) ||
		getRow(7,8,9, move) ||
		getRow(1,4,7, move) ||
		getRow(2,5,8, move) ||
		getRow(3,6,9, move) ||
		getRow(1,5,9, move) ||
		getRow(3,5,7, move)){
		result =true;
	}

	return result;
}

function getRow(a, b, c, move) {
	var result = false;
	if (getBox(a) == move && getBox(b) == move && getBox(c) == move){
		result = true;
	}

	return result;	
}

function getBox(number) {
	return document.getElementById("s" + number).innerText;
}

function playAgain(){
	window.open("game.html");
}
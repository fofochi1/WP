function diceGame(){
  var randNum1 = Math.floor(Math.random() * 6) + 1;
  var randNum2 = Math.floor(Math.random() * 6) + 1;

  let player1 = document.getElementById("username").innerHTML;

  var gameType = "Dice Game";
  var winner = "";
  var loser = "";
  var winCondition = "";
  var loseCondition = "";

  if(randNum1 > randNum2){
    document.querySelector("h3").innerHTML = player1 + " Wins!";
    winner = player1;
    winCondition = "Dice " + randNum1;
    loser = "Player 2";
    loseCondition = "Dice " + randNum2;
  }else if(randNum1 < randNum2){
    document.querySelector("h3").innerHTML = "Player 2 Wins!";
    winner = "Player 2";
    winCondition = "Dice " + randNum2;
    loser = player1;
    loseCondition = "Dice " + randNum1;

  }else{
    document.querySelector("h3").innerHTML = "Draw!";
  }

  if(randNum1 === 1){
    document.getElementById('player1').src='images/dice1.png';
  }else if(randNum1 === 2){
    document.getElementById('player1').src='images/dice2.png';
  }else if(randNum1 === 3){
    document.getElementById('player1').src='images/dice3.png';
  }else if(randNum1 === 4){
    document.getElementById('player1').src='images/dice4.png';
  }else if(randNum1 === 5){
    document.getElementById('player1').src='images/dice5.png';
  }else if(randNum1 === 6){
    document.getElementById('player1').src='images/dice6.png';
  }


  if(randNum2 === 1){
    document.getElementById('player2').src='images/dice1.png';
  }else if(randNum2 === 2){
    document.getElementById('player2').src='images/dice2.png';
  }else if(randNum2 === 3){
    document.getElementById('player2').src='images/dice3.png';
  }else if(randNum2 === 4){
    document.getElementById('player2').src='images/dice4.png';
  }else if(randNum2 === 5){
    document.getElementById('player2').src='images/dice5.png';
  }else if(randNum2 === 6){
    document.getElementById('player2').src='images/dice6.png';
  }

  if(winner != ""){

    var url = "php/insert.php?gameType=" + gameType +"&winner=" + winner + "&loser=" + loser + "&winCondition=" + winCondition + "&loseCondition=" + loseCondition;
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, true);
    xhttp.send();

  }

}

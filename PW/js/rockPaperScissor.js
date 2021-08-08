function rockPaperScissor(){

//Rock is set to 0
//Paper is set to 1
//Scissor is set to 2

    var randNum1 = Math.floor(Math.random() * 3);
    var randNum2 = Math.floor(Math.random() * 3);
    let player1 = document.getElementById("username").innerHTML;


    var gameType = "Rock Paper Scissors Game";
    var winner = "";
    var loser = "";
    var winCondition = "";
    var loseCondition = "";

    if(randNum1 === 0){
      document.getElementById('player1').src='Images/rock.png';
    }else if(randNum1 === 1){
      document.getElementById('player1').src='Images/paper.png';
    }else if(randNum1 === 2){
      document.getElementById('player1').src='Images/scissors.png';
    }

    if(randNum2 === 0){
      document.getElementById('player2').src='Images/rock.png';
    }else if(randNum2 === 1){
      document.getElementById('player2').src='Images/paper.png';
    }else if(randNum2 === 2){
      document.getElementById('player2').src='Images/scissors.png';
    }


    if(randNum1 === 0 && randNum2 === 0){
      document.querySelector("h3").innerHTML = "Draw!";
    }else if(randNum1 === 0 && randNum2 === 1){
      document.querySelector("h3").innerHTML = "Player 2 Wins!!!";
      winner = "Player 2";
      loser = player1
      winCondition = "Paper";
      loseCondition = "Rock";
    }else if(randNum1 === 0 && randNum2 === 2){
      document.querySelector("h3").innerHTML = "Player 1 Wins!!!";
      winner = player1;
      loser = "Player 2";
      winCondition = "Rock";
      loseCondition = "Scissors";
    }else if(randNum1 === 1 && randNum2 === 2){
      document.querySelector("h3").innerHTML = "Player 2 Wins!!!";
      winner = "Player 2";
      loser = player1;
      winCondition = "Scissors";
      loseCondition = "Paper";
    }else if(randNum1 === 1 && randNum2 === 0){
      document.querySelector("h3").innerHTML = "Player 1 Wins!!!";
      winner = player1;
      loser = "Player 2";
      winCondition = "Rock";
      loseCondition = "Paper";
    }else if(randNum1 === 1 && randNum2 === 1){
      document.querySelector("h3").innerHTML = "Draw!";
    }else if(randNum1 === 2 && randNum2 === 2){
      document.querySelector("h3").innerHTML = "Draw!";
    }else if(randNum1 === 2 && randNum2 === 1){
      document.querySelector("h3").innerHTML = "Player 1 Wins!!!";
      winner = player1;
      loser = "Player 2";
      winCondition = "Scissors";
      loseCondition = "Paper";
    }else if(randNum1 === 2 && randNum2 === 0){
      document.querySelector("h3").innerHTML = "Player 2 Wins!!!";
      winner = "Player 2";
      loser = player1;
      winCondition = "Rock";
      loseCondition = "Scissors";
    }

    if(winner != ""){
      alert(gameType + " " + winner + " " + loser + " " +  winCondition)

      $(document).ready(function(){
        $.ajax({
          type: 'POST',
          url: 'php/insert.php',
          data:{gameType:gameType,winner:winner,loser:loser,winCondition:winCondition,loseCondition:loseCondition},
          success: function(data){

          }
        })
      })
    }

}

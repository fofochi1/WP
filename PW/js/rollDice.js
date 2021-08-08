function rollDice(){
  var randNum = Math.floor(Math.random() * 6) + 1;
  var dice = 'images/dice' + randNum + '.png';
  document.getElementById('rollDice').src=dice;
}

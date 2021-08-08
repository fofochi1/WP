function pattern(){
  var rows = prompt("How many rows?");
  var symb = prompt("What symbol?");
  var down = '';
  var up = '';
  for(i = 0; i <= rows; i++){
    for(j = 0; j < i; j++){
      down += symb + " ";
    }
    down += '\n';
  }

  for(i = 0; i <= rows; i++){
    for(j = rows; j > i; j--){
      up += symb + " ";
    }
    up += '\n';
  }

  alert(down);
  alert(up);
}

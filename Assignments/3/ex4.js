function pal(){
  var word = prompt("Give word to check for palindrome");
  var i = 0;
  var j = word.length - 1;
  var answer = true;
  while(i < j){
    if(word.charAt(i) != word.charAt(j)){
      alert("Not a palindrome");
      answer = false;
      break;
    }
    i++;
    j--;
  }
  if(answer === true){
    alert("Word is a palindrome");
  }
}

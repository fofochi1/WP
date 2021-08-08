function fib(){
  var n = prompt("Please enter the n^th term of the sequence");

  var first = 0;
  var second = 1;
  let arr = [];
  arr[0] = first;
  arr[1] = second;
  if(n < 1){
    alert(first);
  }else{
    for(i = 2; i < n; i++){
      var temp = arr[i-1] + arr[i-2];
      arr.push(temp);
    }
  }
  alert(arr);
}

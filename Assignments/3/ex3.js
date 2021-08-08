function multiply_square(){
  var a = [
    [4,6,4],
    [7,9,5],
    [4,2,1]
  ];

  var b = [
    [9,9,7],
    [8,5,4],
    [4,2,6]
  ];

  var final = [];
  var result = '';
  var first = '';
  var second = '';

  for(i = 0; i < a.length; i++){
    final[i] = [];
    for(j = 0; j < b.length; j++){
      final[i][j] = 0;
      for(k = 0; k < a.length; k++){
        final[i][j] = final[i][j] + a[i][k] * b[k][j];
      }
    }
  }
  for(i = 0; i < final.length; i++){
    for(j = 0; j < final.length; j++){
      first += a[i][j] + ' ';
    }
    first += '\n';
  }

  for(i = 0; i < final.length; i++){
    for(j = 0; j < final.length; j++){
      second += b[i][j] + ' ';
    }
    second += '\n';
  }

  for(i = 0; i < final.length; i++){
    for(j = 0; j < final.length; j++){
      result += final[i][j] + ' ';
    }
    result += '\n';
  }
  alert("First 3x3 Matrix\n" + first);
  alert("Second 3x3 Matrix\n" + second);
  alert("Final Result\n" + result);
}

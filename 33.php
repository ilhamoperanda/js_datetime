<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get 12-hour format of an hour with leading zeros</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function hours_with_zeroes(dt) 
{ 
  return ((dt.getHours() % 12 || 12) < 10 ? '0' : '') + (dt.getHours() % 12 || 12);
}

dt = new Date(); 
console.log(hours_with_zeroes(dt)); 

dt = new Date(1989, 10, 1); 
console.log(hours_with_zeroes(dt));
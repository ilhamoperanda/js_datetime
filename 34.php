<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get 24-hour format of an hour without leading zeros</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function hours_without_zeroes(dt) 
{ 
  return dt.getHours();
}

dt = new Date(); 
console.log(hours_without_zeroes(dt)); 

dt = new Date(1989, 10, 1); 
console.log(hours_without_zeroes(dt));
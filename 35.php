<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get minutes with leading zeros.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function minutes_with_leading_zeros(dt) 
{ 
  return (dt.getMinutes() < 10 ? '0' : '') + dt.getMinutes();
}

dt = new Date(); 
console.log(minutes_with_leading_zeros(dt)); 

dt = new Date(1989, 10, 1); 
console.log(minutes_with_leading_zeros(dt));
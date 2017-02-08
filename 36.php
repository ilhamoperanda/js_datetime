<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get seconds with leading zeros (00 through 59)</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function seconds_with_leading_zeros(dt) 
{ 
  return (dt.getMinutes() < 10 ? '0' : '') + dt.getMinutes();
}

dt = new Date(); 
console.log(seconds_with_leading_zeros(dt)); 

dt = new Date(1989, 10, 1); 
console.log(seconds_with_leading_zeros(dt));
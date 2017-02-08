<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get a numeric representation of a month, with leading zeros (01 through 12).</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function numeric_month(dt)
{
  return (dt.getMonth() < 9 ? '0' : '') + (dt.getMonth() + 1); 
}
dt = new Date(); 
console.log(numeric_month(dt)); 

dt = new Date(2015, 10, 1); 
console.log(numeric_month(dt));
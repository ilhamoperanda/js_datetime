<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get uppercase Ante meridiem and Post meridiem</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function upper_am_pm(dt) 
{ 
  return dt.getHours() < 12 ? 'AM' : 'PM';
}

dt = new Date(); 
console.log(upper_am_pm(dt)); 

dt = new Date(1989, 10, 1); 
console.log(upper_am_pm(dt));
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to get lowercase Ante meridiem and Post meridiem. </title>
</head>
<body>

</body>
</html>
JavaScript Code :

function lower_am_pm(dt) 
{ 
  return ('' + dt.getFullYear()).substr(2);
}

dt = new Date(); 
console.log(lower_am_pm(dt)); 

dt = new Date(1989, 10, 1); 
console.log(lower_am_pm(dt));
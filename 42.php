<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to add specified weeks to a date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function add_weeks(dt, n) 
 {
 return new Date(dt.setDate(dt.getDate() + (n * 7)));      
 }

dt = new Date();
console.log(add_weeks(dt, 10).toString());  

dt = new Date(2014,10,2);
console.log(add_weeks(dt, 10).toString());
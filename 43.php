<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to add specified months to a date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function add_months(dt, n) 
 {

   return new Date(dt.setMonth(dt.getMonth() + n));      
 }

dt = new Date();
console.log(add_months(dt, 10).toString());  

dt = new Date(2014,10,2);
console.log(add_months(dt, 10).toString());
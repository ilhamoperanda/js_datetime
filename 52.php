<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to get the month start date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function startOfMonth(date)
  {
     
   return new Date(date.getFullYear(), date.getMonth(), 1);
 
  }

dt = new Date(); 

console.log(startOfMonth(dt).toString());
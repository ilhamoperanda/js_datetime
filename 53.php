<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to get the month end date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function endOfMonth(date)
  {
     
  return new Date(date.getFullYear(), date.getMonth() + 1, 0);
 
  }

dt = new Date(); 

console.log(endOfMonth(dt).toString());
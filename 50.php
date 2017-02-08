<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to get the week start date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function startOfWeek(date)
  {
    var diff = date.getDate() - date.getDay() + (date.getDay() === 0 ? -6 : 1);
  
    return new Date(date.setDate(diff));
 
  }

dt = new Date(); 

console.log(startOfWeek(dt).toString());
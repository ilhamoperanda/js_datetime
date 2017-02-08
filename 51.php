<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to get the week end date</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function endOfWeek(date)
  {
     
    var lastday = date.getDate() - (date.getDay() - 1) + 6;
    return new Date(date.setDate(lastday));
 
  }

dt = new Date(); 

console.log(endOfWeek(dt).toString());
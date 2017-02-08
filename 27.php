<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>avaScript function to get a short textual representation of a month, three letters (Jan through Dec)</title>
</head>
<body>

</body>
</html>
JavaScript Code :

 Date.shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

function short_months(dt)
   { 
     return Date.shortMonths[dt.getMonth()]; 
   }

dt = new Date(); 
console.log(short_months(dt)); 

dt = new Date(2015, 10, 1); 
console.log(short_months(dt));